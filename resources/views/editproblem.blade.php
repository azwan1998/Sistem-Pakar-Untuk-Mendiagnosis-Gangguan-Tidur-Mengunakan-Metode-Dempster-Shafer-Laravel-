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

                                @foreach($problem as $p)
                             
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Edit Jenis</h5>
                                                <div>

                                                <form action="/problem/update" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $p->id }}">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">&nbsp &nbsp Kode &nbsp &nbsp &nbsp</span></div>
                                                        <input readonly="readonly" type="text" class="form-control" required="required" name="code" value="{{ $p->code }}"></div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">&nbsp &nbsp Jenis &nbsp &nbsp &nbsp</span></div>
                                                        <input placeholder="jenis" type="text" class="form-control" required="required" name="name" value="{{ $p->name }}"></div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Keterangan</span></div>
                                                        <input placeholder="keterangan" rows="2" type="text" class="form-control" required="required" name="notes" value="{{ $p->notes }}"></div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">&nbsp &nbsp Solusi &nbsp &nbsp &nbsp</span></div>
                                                        <textarea placeholder="solusi" rows="5" type="textarea" class="form-control" required="required" name="solution" value="{{ $p->solution }}"></textarea></div>
                                                    <br>
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