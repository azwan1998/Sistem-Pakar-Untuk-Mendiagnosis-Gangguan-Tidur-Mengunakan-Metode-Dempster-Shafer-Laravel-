@extends('layouts.app')
@section('content')
 <style>
     .table-responsive{
        font-family:'Helvetica';
        font-size: 15px;
     }


 </style>


                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header"> <center>Data Gejala Gangguan Tidur</center>
                            </div>
                            <div class="card-body">
                            <!-- <a href="/evidencetrash">Tong Sampah</a> -->
                                    <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Tambah Gejala
                                    </button>

                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-uppercase text-dark text-sm font-weight-bolder">No</th>
                                                        <th class="text-uppercase text-dark text-sm font-weight-bolder">Kode</th>
                                                        <th class="text-uppercase text-dark text-sm font-weight-bolder ps-2"><center>Gejala</center></th>
                                                        <th class="text-uppercase text-dark text-sm font-weight-bolder">Aksi</th>
                                                    </tr>
                                                </thead>
                                        <tbody>

                                            <?php $no = 0; ?>
                                            @foreach($evidence as $e)
                                            <?php $no++; ?>

                                                <tr>
                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-dark text-md font-weight-normal">{{ $no }}</span>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                        <span class="text-dark text-md font-weight-normal">{{ $e->code }}</span>
                                                    </td>

                                                    <td class="align-middle text-sm">
                                                        <span class="text-dark text-sm font-weight-normal">{{ $e->name }}</span>
                                                    </td>

                                                    <td>
                                                        <a href="/evidence/edit/{{ $e->id }}" data-toggle="tooltip" title="Edit" class="btn-sm btn-warning"><i class="fa pe-7s-pen"></i></a></br>
                                                    
                                                        <a href="/evidence/hapus/{{ $e->id }}" data-toggle="tooltip" class="btn-sm btn-danger hapuss" title="Hapus"><i class="fa pe-7s-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="assets/dist/sweetalert2.all.min.js"></script>


    <script>        
    $('.hapuss').on('click', function (event) {
        event.preventDefault();
        const href = $(this).attr('href');

        Swal.fire({
            title: 'Yakin ingin menghapus data?',
            text: "Data yang dihapus akan dipindahkan ke Recycle bin",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
            }).then((result) => {
            if (result.value) {
                document.location.href = href; 
                Swal.fire(
                    'Data dihapus!',
                    'Untuk mengembalikan data, silahkan ke Recycle bin.',
                    'success'
                    )              
            }
            });
         });
    </script>

    <script>
        function tambah (){
            swal("Sukses!", "Data Berhasil di Tambah!", "success");
        }
    </script>
                
@endsection

                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><strong>Tambah Gejala</strong></h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="content md-2">
                                                    <div class="col-lg-12">
                                                        

                                                            <form action="/evidence/store" method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}

                                                                <div class="card-body card-block">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text">&nbsp &nbsp Kode &nbsp &nbsp &nbsp</span></div>
                                                                                    <input placeholder="Kode" type="text" class="form-control" required="required" name="code" id="code">
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <br>
                                                                        <div class="input-group">
                                                                            <div class="input-group-prepend"><span class="input-group-text">&nbsp &nbsp Gejala &nbsp &nbsp &nbsp</span></div>
                                                                                    <textarea placeholder="Gejala" rows="2" type="text" class="form-control" required="required" name="name" id="name"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                                                    <input onclick="tambah()" type="submit" class="btn btn-primary tambah" value="Simpan Data">
                                                                </div>                         
                                                            </form>  
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>

    