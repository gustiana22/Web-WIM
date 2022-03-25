@extends('layouts.nav')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-8">
<!--begin::Tables Widget 11-->
<div class="card mb-1 mb-xl-8" style="background-color: #242263;">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-3" style="color: white;">Tampil Data Kulwaru</span>
        </h3>

        {{-- Start Form Search --}}
        {{-- <div class="d-flex align-items-center">
            <!--begin::Input group-->
            <div class="position-relative w-md-150px me-md-2">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" class="form-control form-control-solid ps-10 h-md-35px" name="search" value="" placeholder="Search" />
            </div>
            <!--end::Input group-->
            <!--begin:Action-->
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary me-5 ">Search</button>
            </div>
            <!--end:Action-->
        </div> --}}
        {{-- End Form Search --}}

        {{-- Start Form Search --}}
        <form action="{{ url('losarang') }}" method="GET">
        <div class="d-flex align-items-center">

            <!--begin::Input group-->
            <div class="position-relative w-md-155px me-md-2">
                <input type="date" class="form-control" name="">
                {{-- <input type="text" class="form-control form-control-solid ps-10 h-md-35px" name="search" value="" placeholder="Search" /> --}}
            </div>
            <div class="position-relative w-md-155px me-md-2">
                <input type="date" class="form-control" name="">
                {{-- <input type="text" class="form-control form-control-solid ps-10 h-md-35px" name="search" value="" placeholder="Search" /> --}}
            </div>
            <!--end::Input group-->
            <!--begin:Action-->
            <div class="d-flex align-items-center">
                <button type="submit" class="btn btn-primary me-2 ">Search</button>
            </div>

            <!--end:Action-->
        </div>
    </form>
        {{-- End Form Search --}}
    </div>
    </div>
    <!--end::Header-->
    <!--begin::Tables Widget 11-->

     <!--begin::Tables Widget 11-->
     <div class="card mb-5 mb-xl-8" style="background-color: #242263;">

        <!--begin::Body-->
        <div class="card-body py-3" >
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4" style="color: white;">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                            <th rowspan="5" class="min-w-50px">#</th>
                            <th rowspan="5" class="min-w-100px">Waktu</th>
                            {{-- <th colspan="5" class="min-w-125px">Lidar</th> --}}
                            <th colspan="5" class="min-w-90px">WIM</th>
                            {{-- <th rowspan="2" class="min-w-125px">Foto Lidar</th> --}}
                            <th rowspan="2" class="min-w-90px">Foto Kendaraan</th>
                            {{-- <th rowspan="2" class="min-w-125px">Foto Plat Nomor</th> --}}
                        </tr>
                        <tr class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                            {{-- <th class="min-w-125px">Standar</th>
                            <th class="min-w-125px">Pengukuran</th>
                            <th class="min-w-125px">Deviasi</th>
                            <th class="min-w-125px">Presentase</th> --}}
                            <th class="min-w-90px">Berat</th>
                            <th class="min-w-90px">JBI</th>
                            <th class="min-w-90px">Berat Berlebih</th>
                            <th class="min-w-90px">Presentase</th>
                            <th class="min-w-90px">Kecepatan</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="">
                        <tr>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <p >1</p>
                                </div>
                            </td>
                            <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <p>2022-02-28 09:31:37</p>
                                </div>
                            </td>
                            {{-- <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Panjang</p>
                                </div>
                            </th>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>9,31 m</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>9,31 m</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>0 m</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>0 %</p>
                                </div>
                            </td> --}}
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>20000 KG</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>10000 KG</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>5000 KG</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>0 %</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <p>10 km/h</p>
                                </div>
                            </td>

                            {{-- <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn" style="background: transparent">
                                        <img src="{{ asset('assets/img/lidar.jpeg') }}" width="170">
                                      </button>

                                      <!--begin::Modal - Share & Earn-->
								<div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
                                            <img src="{{ asset('assets/img/lidar.jpeg') }}" width="650">
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Share & Earn-->

                                </div>
                            </td> --}}

                            <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn" style="background: transparent">
                                        <img src="{{ asset('assets/img/plat_22.jpeg') }}" width="180">
                                      </button>

                                      <!--begin::Modal - Share & Earn-->
								<div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
                                            <img src="{{ asset('assets/img/plat_22.jpeg') }}" width="650">
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Share & Earn-->

                                </div>
                            </td>

                            {{-- <td rowspan="4">
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_share_earn" style="background: transparent">
                                        <img src="{{ asset('assets/img/plat_13.jpeg') }}" width="170">
                                      </button>

                                      <!--begin::Modal - Share & Earn-->
								<div class="modal fade" id="kt_modal_share_earn" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
                                            <img src="{{ asset('assets/img/plat_13.jpeg') }}" width="650">
										</div>
										<!--end::Modal content-->
									</div>
									<!--end::Modal dialog-->
								</div>
								<!--end::Modal - Share & Earn-->

                                </div>
                            </td> --}}


                        </tr>
                        <tr>
                            {{-- <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Lebar</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>2,3 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>2,3 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>0,04 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>2,34 %</p>
                                </div>
                            </th>
                            <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Berat Berlebih</p>
                                </div>
                            </th>
                            <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Presentase</p>
                                </div>
                            </th>--}}
                        </tr>

                        <tr>
                            {{-- <th class="fw-bolder text-muted text-center" style="vertical-align: middle; background-color: #302e74;">
                                <div class="d-flex justify-content-center">
                                    <p>Tinggi</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>3,65 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>3,40 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>0 m</p>
                                </div>
                            </th>
                            <th>
                                <div class="d-flex justify-content-center">
                                    <p>0 %</p>
                                </div>
                            </th> --}}

                        </tr>

                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 11-->

</div>
<!--end::Container-->
@endsection
