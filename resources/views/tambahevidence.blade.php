@extends('layouts.app')
@section('content')

                                                <div class="content md-2">
                                                    <div class="col-lg-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <strong>Isi Data</strong> <small class="text-muted">Tanda <a style="color:red;"><blink>*</blink></a> wajib diisi</small>
                                                            </div>

                                                            <form action="/evidence/store" method="post" enctype="multipart/form-data">
                                                            {{ csrf_field() }}

                                                                <div class="card-body card-block">
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Kode Gejala <a style="color:red;"><blink>*</blink></a> </label>
                                                                        </div>
                                                                        <div class="col-md-9">                                            
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                                                <input size="50" maxlength="50" class="form-control" placeholder="Masukkan Kode" name="code" id="code" type="text" value="{{ old('code') }}">                                              
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                                @if($errors->has('code'))
                                                                                <small><div class="text-danger">
                                                                                    {{ $errors->first('code')}}
                                                                                </div></small>
                                                                                @endif
                                                                                </br>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="card-body card-block">
                                                                    <div class="form-group">
                                                                        <div class="col-md-3">
                                                                            <label class="control-label">Gejala <a style="color:red;"><blink>*</blink></a> </label>
                                                                        </div>
                                                                        <div class="col-md-9">                                            
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                                                    <input size="50" maxlength="50" class="form-control" placeholder="Masukkan Gejala" name="name" id="name" type="text" value="{{ old('name') }}">                                              
                                                                                <span class="help-block"></span>
                                                                            </div>
                                                                            @if($errors->has('name'))
                                                                            <small><div class="text-danger">
                                                                                {{ $errors->first('name')}}
                                                                            </div></small>
                                                                            @endif
                                                                            </br>
                                                                            <input type="submit" class="btn btn-primary" value="Simpan Data">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

@endsection