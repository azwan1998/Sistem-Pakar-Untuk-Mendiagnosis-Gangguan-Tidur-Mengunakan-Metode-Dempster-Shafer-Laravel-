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
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder"><center>Jenis</center></th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder"><center>Gejala</center></th>
                                                      <th class="text-uppercase text-dark text-sm font-weight-bolder ps-2"><center>CF</center></th>
                                                      <!-- <th class="text-uppercase text-dark text-sm font-weight-bolder ps-2"><center>Solusi</center></th> -->
                                                      <!-- <th class="text-uppercase text-dark text-sm font-weight-bolder">Aksi</th> -->
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
                                                      <span class="text-dark text-sm font-weight-normal">{{ $p->name }}</span>
                                                    </td>

                                                    <td class="align-middle text-sm">
                                                      <span class="text-dark text-sm font-weight-normal">
                                                        <ul>
                                                            @foreach($p->evidence as $e)
                                                                <li> {{ $e->name }} </li>
                                                            @endforeach
                                                        </ul>    
                                                      </span>
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


@endsection