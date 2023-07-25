@extends('layouts.main')
@section('container')

<div class="content-wrapper" style="min-height: 2646.44px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Organisasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/input-organisasi">Tambah Organisasi</a></li>
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
                                    <th scope="col" class="sort">Nama Organisasi</th>
                                    <th scope="col" class="sort">Jumlah Anggota</th>
                                    <th scope="col">Opsi</th>
                                  </tr>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder"></i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                </td>
                          </thead>
                </table>
            </div>
        </div>
    </section>
    @endsection