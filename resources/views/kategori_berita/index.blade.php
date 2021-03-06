@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> list Kategori Berita</div>


                <div class="card-body">
                <a href="{!! route('kategori_berita.create')!!}" class="btn btn-primary">
                Tambah Data
                </a>

                <div class="card-body">
                <table border="1">

    <tr>

    <td>ID</td>
    <td>Nama</td>
    <td>Users</td>
    <td>Aksi</td>
    <td>create</td>
    </tr>
    @foreach($listKategoriBerita as $item)

    <tr>

    <td>{!!$item->id!!}</td>
    <td>{!!$item->nama!!}</td>
    <td>{!!$item->users_id!!}</td>
    <td>{!!$item->created_at->format('d/m/y m:i:s')!!}</td>

    <td>
    <a href="{!! route('kategori_berita.show',($item->id)) !!}" class="btn btn-sm  btn-primary">
    Lihat
    </a>
    </td>
    </tr> 
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

