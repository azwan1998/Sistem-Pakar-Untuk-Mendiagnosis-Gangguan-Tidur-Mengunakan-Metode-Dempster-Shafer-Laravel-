@extends('layouts.app')
@section('content')

<style>
     .card {
         /* background: #1bb34a; */
         background: #ffffff;
         color: blue;
         border-radius: 20px;
         box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
         
     }

     .card-header {
         /* background: #1bb34a; */
         background: #F0F8FF;
         /* color: blue; */
         border-radius: 20px;
         
         
     }

     .card:hover {
        box-shadow: 0px 2px 20px rgba(0,0,0,0.2);
      }

     .dua {
        background: #ffffff;
         color: blue;
         border-radius: 20px;
         box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
     }

     .widget-heading {
         font-size: 18px;
         font-family: 'Helvetica';
     }
 </style>

                            <div class="main-card mb-3 card">
                            <div class="card-header text-center"> <center>Data Pasien</center>
                            </div>
                                <div class="no-gutters row">
                                    <div class="col-md-4">
                                        <div class="widget-content">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-right ml-0 mr-3">
                                                    <div class="widget-numbers text-success">{{ $pasien }}</div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Total Pasien</div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="widget-content">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-right ml-0 mr-3">
                                                    <div class="widget-numbers text-warning">{{ $evidence }}</div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Total Gejala</div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="widget-content">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-right ml-0 mr-3">
                                                    <div class="widget-numbers text-danger">{{ $problem }}</div>
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Total Jenis</div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
@endsection


