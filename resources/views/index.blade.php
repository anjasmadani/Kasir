@extends('layouts.master')

@section('content')
<div class="container-fluid">
            <div class="block-header">
                <h1><b>DASHBOARD</b></h1>
            </div>
            
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-2 bg-pink hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">date_range</i>
                        </div>
                        <div class="content">
                            <div class="text"><b>Kalender</b></div>
                            <div class="text">{{ date('l, d-m-Y') }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-2 bg-cyan hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">access_time</i>
                        </div>
                        <div class="content">
                            <div class="text"><b>Jam</b></div>
                            <div class="number count-to">{{ date("h:i a") }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-2 bg-light-green hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">local_grocery_store</i>
                        </div>
                        <div class="content">
                            <div class="text"><b>Penjualan Hari Ini</b></div>
                            <div class="number count-to" id="penjualanHriini" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-2 bg-orange hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons">trending_up</i>
                        </div>
                        <div class="content">
                            <div class="text"><b>Profit Hari Ini</b></div>
                            <div class="number count-to" id="profitHriini" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>              
            </div>
 <!-- Diagram -->
  <!-- Morris Css -->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>DIAGRAM</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>                                
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="line_chart" class="graph">
                                isi data grafik
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Line Chart -->
@endsection