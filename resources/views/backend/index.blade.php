@extends('backend.master')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="row">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            <div>
                                <h3 class="card-title">Sales Overview</h3>
                                <h6 class="card-subtitle">Ample Admin Vs Pixel Admin</h6>
                            </div>
                            <div class="ml-auto">
                                <ul class="list-inline">
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-success"><i
                                                class="fa fa-circle font-10 mr-2 "></i>Ample</h6>
                                    </li>
                                    <li class="list-inline-item px-2">
                                        <h6 class="text-info"><i
                                                class="fa fa-circle font-10 mr-2"></i>Pixel</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="amp-pxl" style="height: 360px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Our Visitors </h3>
                <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                <div id="visitor" style="height:290px; width:100%;"></div>
            </div>
            <div class="card-body text-center border-top">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item px-2">
                        <h6 class="text-info"><i class="fa fa-circle font-10 mr-2 "></i>Mobile</h6>
                    </li>
                    <li class="list-inline-item px-2">
                        <h6 class=" text-primary"><i class="fa fa-circle font-10 mr-2"></i>Desktop</h6>
                    </li>
                    <li class="list-inline-item px-2">
                        <h6 class=" text-success"><i class="fa fa-circle font-10 mr-2"></i>Tablet</h6>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection