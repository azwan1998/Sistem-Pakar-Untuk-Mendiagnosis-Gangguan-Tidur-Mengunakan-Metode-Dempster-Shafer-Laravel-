@extends('layouts.app')
@section('content')

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header"> <center>Data Jenis Gangguan Tidur</center>
                            </div>
                            <div class="card-body">
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Tambah Data Jenis
                                    </button> <br><br> -->

                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder">No</th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder">Kode</th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder">Jenis</th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder ps-2"><center>Keterangan</center></th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder ps-2"><center>Solusi</center></th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder">Aksi</th>
                                                    </tr>
                                                </thead>
                                          <tbody>

                                            <?php $no = 0; ?>
                                            @foreach($problem as $p)
                                            <?php $no++; ?>

                                                <tr>
                                                    <td class="align-middle text-center text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ $no }}</span>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ $p->code }}</span>
                                                    </td>

                                                    <td class="align-middle text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ $p->name }}</span>
                                                    </td>

                                                    <td class="align-middle text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ $p->notes }}</span>
                                                    </td>

                                                    <td class="align-middle text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ $p->solution }}</span>
                                                    </td>

                                                    <td>
                                                      <a href="/problem/editproblem/{{ $p->id }}" data-toggle="tooltip" title="Edit" class="btn btn-warning"><i class="fa pe-7s-pen"></i></a>

                                                      <a href="/problem/hapus/{{ $p->id }}" data-toggle="tooltip" class="btn btn-danger hapusp" title="Hapus"><i class="fa pe-7s-trash"></i></a>

                                                      <a href="" data-toggle="tooltip" class="btn btn-info" title="Lihat Profil"><i class="fa pe-7s-look"></i></a>
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

                <script src="assets/dist/sweetalert2.all.min.js"></script>


      <script>        
      $('.hapusp').on('click', function (event) {
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

@endsection