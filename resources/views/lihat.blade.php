@extends('layouts.app')
@section('content')
 
<style>
 .card {
    margin : 20px;
     
    position: relative;
    padding: 20px 15px 0;
 }

 .card:hover {
    box-shadow: 0px 2px 20px rgba(0,0,0,0.2);
}
</style>


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title mb-12"><center>Data Pasien - {{ $pasien->id }}</center></strong>
                        </div>
                    <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><h6 class=" form-control-label">Nama</h6></div>
                                    <div class="col-12 col-md-9">
                                        <h6 class="form-control-static">:  {{ $pasien->nama }}</h6>
                                    </div>
                            </div>
                        </form>
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><h6 class=" form-control-label">Usia</h6></div>
                                    <div class="col-12 col-md-9">
                                        <h6 class="form-control-static">:  {{ $pasien->usia }} Tahun</h6>
                                    </div>
                            </div>
                        </form>
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><h6 class=" form-control-label">Jenis Kelamin</h6></div>
                                    <div class="col-12 col-md-9">
                                        <h6 class="form-control-static">:  {{ $pasien->jeniskel }}</h6>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
           

@endsection