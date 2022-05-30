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

                @foreach($evidence as $e)
                             
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Edit Gejala</h5>
                                                <div>

                                                <form action="/evidence/update" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $e->id }}">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Kode &nbsp </span></div>
                                                        <input readonly="readonly" type="text" class="form-control" required="required" name="code" value="{{ $e->code }}"></div>
                                                        @if($errors->has('code'))
                                                            <small><div class="text-danger">
                                                                {{ $errors->first('code')}}
                                                            </div></small>
                                                        @endif
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Gejala</span></div>
                                                        <input placeholder="username" type="text" class="form-control" required="required" name="name" value="{{ $e->name }}"></div>
                                                        @if($errors->has('name'))
                                                            <small><div class="text-danger">
                                                                {{ $errors->first('name')}}
                                                            </div></small>
                                                        @endif
                                                    <br>
                                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                                                    <a href="/evidence" class="btn btn-warning">Kembali</a>
                                                     
                                                    <input onclick="sweet()" type="submit" class="btn btn-primary" value="Simpan Data">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach

  
    <script>
        function sweet (){
            swal("Sukses!", "Data Berhasil di Ubah!", "success");
        }

    </script>


@endsection