@extends('layouts.app')
@section('content')

                  <div class="row">
                    <div class="col-md-12">
                        <div class="main-card mb-3 card">
                            <div class="card-header"> <center>Data Pasien</center>
                            </div>
                            <div class="card-body">
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Tambah Data Jenis
                                    </button> <br><br> -->

                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder"><center>No</center></th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder"><center>Nama</center></th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder"><center>Usia</center></th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder"><center>Jenis Kelamin</center></th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder ps-2"><center>Keluhan</center></th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder"><center>Aksi</center></th>
                                                    </tr>
                                                </thead>
                                          <tbody>

                                            <?php $no = 0; ?>
                                            @foreach($pasien as $u)
                                            <?php $no++; ?>

                                                <tr>
                                                    <td class="align-middle text-center text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ $no }}</span>
                                                    </td>

                                                    <td class="align-middle  text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ $u->nama }}</span>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ $u->usia }} &nbspTahun</span>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ $u->jeniskel }}</span>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">{{ json_encode($u->problem_name) }}</span>
                                                    </td>
                                                    <td><center>

                                                      <!-- <a href="" data-toggle="tooltip" class="btn btn-danger" title="Hapus"><i class="fa pe-7s-trash"></i></a> -->

                                                      <a href="/pasien/lihat/{{ $u->id }}" data-toggle="tooltip" class="btn btn-info" title="Lihat Profil"><i class="fa pe-7s-look"></i></a>
                                                      </center></td>
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
@endsection