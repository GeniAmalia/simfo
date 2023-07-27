@extends('layouts.main')
@section('container')

<div class="content-wrapper" style="min-height: 2646.44px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Berita</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tambah Berita</a></li>
                </ol>
            </div>
        </div>
    </div>
    </section>
    <section class="content">
        <div class="card">
            <!-- Card header -->
            <div class="card-body p-0">
                <table class="table table-striped projects">
                          <thead class="thead-light">
                            <tr>
                                    <th scope="col" class="sort">No.</th>
                                    <th scope="col" class="sort">Nama Berita</th>
                                    <th scope="col">Opsi</th>
                            </tr>
                            </thead>
                                  <tbody class="list">
                                    @foreach ($data as $value)
                                        <tr>
                                            <td>{{$value->id}}</td>
                                            <td>{{$value->nama_berita}}</td>
                                        <td class="budget">
                                        <form action="/organisasi/detail-organisasi" method="POST">@csrf<button class="btn btn-primary btn-sm"><ion-icon name="folder-open"></ion-icon>
                                        View</button></form>&nbsp;<form action=/edit method="POST">@csrf<button class="btn btn-info btn-sm"><ion-icon name="pencil"></ion-icon>
                                        Edit</button></form>&nbsp;<form action="/delete" method="POST">@csrf<button class="btn btn-danger btn-sm"><ion-icon name="trash"></ion-icon>
                                        Delete</button></form>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                    </table>
            </div>
        </div>
    </section>
    @endsection