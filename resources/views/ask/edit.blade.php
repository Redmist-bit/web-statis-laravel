@extends('adminlte.master')

@section('content')
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit pertanyaan {{ $ask->id }}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{ $ask->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $ask->judul) }}" placeholder="Enter Judul">
                    @error('judul')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', $ask->isi) }}" placeholder="Isi pertanyaan">
                    @error('judul')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>       
                  <div class="form-group">
                    <label>Tanggal dibuat</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" id="datein" name="datein" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="{{ old('datein', $ask->tanggal_dibuat) }}" data-mask="" im-insert="false" placeholder="yyyy/mm/dd">
                    </div>
                  <div class="form-group">
                    <label>Tanggal dibuat</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" id="dateout" name="dateout" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="{{ old('dateout', $ask->tanggal_diperbaharui) }}" data-mask="" im-insert="false" placeholder="yyyy/mm/dd">
                  </div>
                  <!-- <div class="form-group">
                    <label for="isi">User ID</label>
                    <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Isi user id">
                  </div>  
                  <div class="form-group">
                    <label for="isi">ID jawaban tepat</label>
                    <input type="text" class="form-control" id="id_jawaban_tepat" name="id_jawaban_tepat" placeholder="Isi id jawaban tepat">
                  </div>   -->
                  <!-- /.input group -->
                </div>           
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
@endsection