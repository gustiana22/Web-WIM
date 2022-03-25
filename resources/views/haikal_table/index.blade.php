@extends('layouts.dashboard')


@section('content')


<div class="row">
    <div class="col-xl-12 col-md-13 col-sm-12">
      <div class="d-flex justify-content-sm-center"><h2 class="my-5" style="color:#6cf5ff;">TAMPIL DATA</h2></div>
    </div>
  </div>

    <div class="col-xl-12">
      <table class="table table-dark table-hover table-data text-center" style="color: white; font-size: 80%;">
        <tr>
            <th rowspan="6" style="text-align: center; vertical-align: middle;">1</th>
          </tr>

          <tr>
            <th rowspan="2" style="text-align: center; vertical-align: middle; background-color: #1f2451;">Waktu</th>
            <th colspan="5" style="text-align: center; background-color: #1f2451;">LIDAR</th>
            <th colspan="4" style="text-align: center; background-color: #1f2451;">WIM</th>
            <th style="text-align: center; background-color: #1f2451;">Foto Lidar</th>
            <th style="text-align: center; background-color: #1f2451;">Foto Kendaraan</th>
            <th style="text-align: center; background-color: #1f2451;">Foto Plat Nomor</th>
          </tr>

          <tr>
            <th></th>
            <th style="background-color: #1f2451;">Standar</th>
            <th style="background-color: #1f2451;">Pengukuran</th>
            <th style="background-color: #1f2451;">Deviasi</th>
            <th style="background-color: #1f2451;">Presentase</th>
            <th style="background-color: #1f2451;">Kecepatan</th>
            <th style="background-color: #1f2451;">Berat</th>
            <th style="background-color: #1f2451;">JBI</th>
            <th style="background-color: #1f2451;">Berat Berlebih</th>
            <td rowspan="4"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background: transparent">
                <img src="{{ asset('image/lidar.jpeg') }}" width="150">
              </button>

              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document" >
                  <div class="modal-content" style="background: transparent">
                    <div class="modal-body">
                        <img src="{{ asset('image/lidar.jpeg') }}" width="500">
                    </div>
                  </div>
                </div>
              </div>
            </td>

            <td rowspan="4"><img src="{{ asset('image/plat_22.jpeg') }}" width="160"></td>
            <td rowspan="4"><img src="{{ asset('image/plat_13.jpeg') }}" width="150"></td>
          </tr>

          <tr>
            <td rowspan="4">2022-02-28 09:31:37</td>
            <th style="background-color: #1f2451;">Panjang</th>
            <td>9,31 m</td>
            <td>9,31 m</td>
            <td>0 m</td>
            <td>0 %</td>
            <td>10 km/h</td>
            <td>20000 KG</td>
            <td>10000 KG</td>
            <td>5000 KG</td>

          </tr>

          <tr>
            <th style="background-color: #1f2451;">Lebar</th>
            <td>2,3 m</td>
            <td>2,3 m</td>
            <td>0,04 m</td>
            <td>2,34 %</td>
          </tr>

          <tr>
            <th style="background-color: #1f2451;">Tinggi</th>
            <td>3,65 m</td>
            <td>3,40 m</td>
            <td>0 m</td>
            <td>0 %</td>
          </tr>
      </table>
    </div>
@endsection
