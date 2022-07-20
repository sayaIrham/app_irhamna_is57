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
    <a href="/petugas/form" class="btn btn-primary">Tambah Data</a>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            Data Petugas
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Petugas</th>
                    <th scope="col">Tugas</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pe as $item)
                        <tr>
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{$item->nik}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->tugas->tugas}}</td>
                            <td>{{$item->hp}}</td>
                            <td>
                            
                                <!-- Modal Foto -->
                               

                                <a href="/petugas/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
                                
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                                    hapus
                                </button>

                                <!-- Modal Hapus -->
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Yakin data petugas <b>{{$item->nama}}</b> ingin dihapus?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form method="POST" action="/petugas/{{$item->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Belum Ada Data</td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection