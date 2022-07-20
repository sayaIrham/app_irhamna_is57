@extends('layouts.admin')



@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
            <h1 class="m-0"><i>SELAMAT DATANG </i></h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data Jurusan</h1> --}}
    
    <div class="card">
        <div class="card-header">
            Form Tambah Data Petugas
        </div>
        <div class="card-body">
            <form method="post" action="/petugas/store" enctype="multipart/form-data">
                @csrf
       
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                    <input type="text" name="nik" class="form-control">
                </div>
            

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                    <input type="text" name="nama" class="form-control">
                </div>

              

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tugas</label>
                    <select name="tugas" class="form-control">
                        <option value="">-Pilih Tugas-</option>
                        @foreach ($tugas as $item)
                            <option value="{{$item->id}}">{{$item->tugas}}</option>  
                        @endforeach
                    </select>
                </div>

                

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NO Hp</label>
                    <input type="text" name="hp" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/petugas" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
</div>
@endsection