<?php

namespace App\Http\Controllers;

use App\Models\Wim;
use App\Models\Lidar;
use App\Models\Resep;
use App\Queries\WimDatatable;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {



        // return view('home');
    }

    public function dashadmin()
    {

        // $data = Wim::all();

        // // Data Untuk Chart
        // $categories = [];

        // foreach($data as $wim){
        //     $categories[] = $wim->OverWeight;
        // }

        $datawim = DB::table('wim','wim.IsWeightOver')->where('IsWeightOver','>',0)->count();
        $datawim2 = DB::table('wim','wim.DoesLicencePlateExist')->where('DoesLicencePlateExist','>',0)->count();
        $datalidar = DB::table('lidar','lidar.IsDimensionOver')->where('IsDimensionOver','>',0)->count();
        $datalengkap = $datawim + $datawim2 + $datalidar;

        return view('admin.index', compact('datawim','datalidar', 'datawim2','datalengkap'));
    }

    public function dashuser()
    {

        // $sumber ='https://masak-apa-tomorisakura.vercel.app/api/recipes';
        // $konten = file_get_contents($sumber);
        // $data = json_decode($konten, true);
        return view('user_front.index');
        // return view('user_front.index');
    }

    public function dashdevice()
    {
        return view('device.index');
    }

    public function losarang()
    {
        // $sumber ='https://masak-apa-tomorisakura.vercel.app/api/recipes';
        // $konten = file_get_contents($sumber);
        // $data = json_decode($konten, true);
        // return view('losarang.index', compact('data'));
        // return view('losarang.index');

        // if (request()->start_date || request()->end_date) {
        //     $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        //     $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        //     $datawim = Wim::whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(10);
        // } else {
        //     $datawim = Wim::with('lidar')->paginate(10);
        // }

        // $datawim = DB::table('wim')
        //     ->join('lidar', 'lidar.id', '=', 'wim.id')
        //     ->get();

        // $datalidar = lidar::with('wim')->paginate(10);

        // $datawim = Wim::with('lidar')->paginate(10);
        if (request()->start_date || request()->end_date) {
        $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
        $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
        $datawim = DB::table('wim')
                    ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
                    ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
                    'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
                    'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
                    'OverWeight','LimitWeight','OverWeight','WeighingDateTime','Image')
                    ->whereBetween('WeighingDateTime', [$start_date,$end_date])->paginate(10);
        } else {

        $datawim = DB::table('wim')
            ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            'LidarReadingWidth','LidarReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','Weight_wim','Speed',
            'OverWeight','LimitWeight','OverWeight','WeighingDateTime','Image')
            ->latest()->paginate(10);
        }

        return view('losarang.losarang', compact('datawim'));


    }

    public function losaranglidar()
    {

        return view('losarang.losarang_lidar');


    }

    public function kulwaru(Request $request)
    {
        // if($request->ajax()){
        //     return DataTables::of((new WimDatatable())->get())->make(true);
        // }


        // $cari = $request->cari;

        // $data = DB::table('wim')
        // ->where('Weight','like',"%".$cari."%")
        // ->paginate(10);

        return view('kulwaru.kulwaru');
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {
            $data = Wim::latest()->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('image', function ($request) {
                $url= asset('../'.$request->Image);
                if(empty($request->Image)){
                    return '';
                }
                return '<img src="'.$url.'" border="0" width="150" align="center" />';
                // return ' <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    //         data-bs-target="#kt_modal_share_earn{{ $wim->id }}" style="background-color: transparent">
                    //         <img src="'.$url.'" border="0" width="150" align="center" />
                    //         </button>';

                // $url= asset('../'.$request->Image);
            })
            ->rawColumns(['image'])
            ->make(true);
        }

    }

    public function datakulwaru(Request $request)
    {
        if ($request->ajax()) {
            $data = Wim::latest()->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('image', function ($request) {
                $url= asset('../'.$request->Image);
                if($request->Image){
                    return '-';
                }
                    // return ' <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn{{ $wim->id }}" style="background: transparent">
                    //         <img src="'.$url.'" border="0" width="150" align="center" />
                    //         </button>';


            })
            ->rawColumns(['image'])
            ->make(true);
        }

    }

    public function datalidar(Request $request)
    {

        if ($request->ajax()) {
            // $datalidar = DB::table('wim')
            // ->join('lidar', 'wim.id', '=', 'lidar.wim_id')
            // ->select('wim.*', 'LidarLimitHeight', 'LidarLimitWidth','LidarLimitLength','LidarReadingHeight',
            // 'LidarReadingWidth','Lidar   ReadingLength','LidarOverHeight','LidarOverWidth','LidarOverLength',
            // 'LidarPercentageHeight','LidarPercentageWidth', 'LidarPercentageLength','WeighingDateTime')->latest()->get();
            $datalidar = Lidar::latest()->get();
            return DataTables::of($datalidar)->addIndexColumn()->make(true);

        }

    }

}


