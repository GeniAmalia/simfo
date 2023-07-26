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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Tambah Organisasi</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>
            <!-- Card header -->
            <div class="card-body p-0">
                <table class="table table-striped projects">
                          <thead class="thead-light">
                            <tr>
                                    <th scope="col" class="sort">No</th>
                                    <th scope="col" class="sort">Nama</th>
                                    <th scope="col" class="sort">Jenis User</th>
                                    <th scope="col" class="sort">Email</th>
                                    <th scope="col">Opsi</th>
                                  </tr>
                                  <tbody class="list">
                                    <?php $no = 0; ?>
                                    @foreach($data as $value)
                                      <tr>
                                        <td class="budget">
                                          {{ ++$no }}.
                                        </td>
                                        <td class="budget">
                                          {{ $value->name }}
                                        </td>
                                        <td class="budget">
                                          {{ $value->email }} 
                                        </td>
                                        <td class="budget">
                                          {{ $value->jenis_user }} 
                                        </td>
                                        <td class="budget">
                                            <form method="POST" action="{{ url('user/ubah-password', $value->id) }}">@csrf<button type="submit" class="btn btn-primary btn-sm">Ubah Password</button></form>
                                            &nbsp;<form method="POST" action="{{ url('user/edit', $value->id) }}">@csrf<button type="submit" class="btn btn-default btn-sm">Edit</button></form>
                                            &nbsp;<form id="hapus" method="POST" action="">@csrf<a type="button" href="#" onclick="event.preventDefault();if(confirm('Ápakah anda yakin?')){ $('form#hapus').attr('action', '{{ url('delete-user', $value->id) }}').submit();}" class="btn btn-danger btn-sm">Delete</a></form>
                                          </td>
                                        </tr>
                                      @endforeach
                                      </tr>
                                    </tbody>
                          </thead>
                </table>
            </div>
        </div>
    </section>
@endsection