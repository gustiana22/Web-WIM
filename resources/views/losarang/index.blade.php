@extends('layouts.dashboard')


@section('content')


<div class="row">
    <div class="col-xl-12 col-md-13 col-sm-12">
      <div class="d-flex justify-content-sm-center"><h2 class="my-5" style="color:#6cf5ff;">TAMPIL DATA</h2></div>
    </div>
  </div>


    <div class="col-xl-12">
      <table class="table table-dark table-hover table-data ">
        <thead class="text-center" style="color: white;">
            <tr >
                <th scope="col">#</th>
                <th scope="col">Waktu</th>
                <th scope="col">Plat Nomor</th>
                <th scope="col">Berat</th>
                <th scope="col">Berat Berlebih</th>
                <th scope="col">Panjang</th>
                <th scope="col">Lebar</th>
                <th scope="col">Tinggi</th>
                <th scope="col">Pelanggaran</th>
                <th scope="col">Foto</th>
            </tr>
        </thead>
        <tbody class="text-center" style="color: #6cf5ff ;">
            @foreach ($data as $wim )

          <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $wim->WeighingDateTime }}</td>
              <td>{{ $wim->LicencePlate }}</td>
              <td>{{ $wim->Weight }}</td>
              <td>{{ $wim->OverWeight }}</td>
              <td>{{ $wim->Axle_wimWW }}</td>
              <td>3.5 m</td>
              <td>5.6 M</td>
              <td>Over Weight</td>
              <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ ($wim->id_wim) }}" style="background: transparent">
                    <img src="{{ asset($wim->Image) }}" width="200">
                  </button>

                  <div class="modal fade" id="exampleModalCenter{{ ($wim->id_wim) }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document" >
                      <div class="modal-content" style="background: transparent">
                        <div class="modal-body">
                            <img src="{{ asset($wim->Image) }}" width="1000">
                        </div>
                      </div>
                    </div>
                  </div>

                </td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>
@endsection
