@extends('layouts.main')
@section('container')

<div class="content-wrapper" style="min-height: 2646.44px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Tambah Forum</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        </ol>
                </div>
            </div>
        </div>
    </section>

<form class="form-horizontal">
    <div class="card-body">
        <div class="form-group row">
            <label for="inputtext" class="col-sm-2 col-form-label">Judul Forum</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="judulforum" placeholder="judul-forum">
        </div>
        </div>
        <div class="form-group row">
            <label for="inputtext" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="deskripsi" placeholder="deskripsi">
        </div>
        </div>
    </div>
        <div class="card-footer">
            <form action="#" method="POST">@csrf<button class="btn btn-default">
                Kembali</button>
        <form action="{{route('forum.store')}}" method="POST">@csrf<button class="btn btn-info float-right">
            Simpan</button>
        </div>
    </form>
@endsection