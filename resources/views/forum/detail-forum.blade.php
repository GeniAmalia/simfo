@extends('layout.main')
@section('container')
    
<div class="content-wrapper" style="min-height: 2646.44px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Forum</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
    </section>
    {{-- content --}}

    
    {{-- form komentar --}}
    @include('komentars', ['fid_forum' => $idForum])

    <div class="card card-info">
        <div class="card-header">
        <h3 class="card-title">Beri Komentar</h3>
        </div>
            <form class="form-horizontal">
                <div class="card-body">
                <div class="form-group row">
                    <label for="inpukomentar" class="col-sm-2 col-form-label">Komentar</label>
                <div class="col-sm-10">
                    <input type="komentar" class="form-control" id="komentar" placeholder="Isi-Komentar">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <form action="{{ route('comments.store') }}" method="post">@csrf
                <input type="hidden" name="id_forum" value="{{ $idForum }}"><button class="btn btn-info">Komentar</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
        </div>
    </form>
</div>
@endsection