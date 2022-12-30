@extends('layouts.apps')
@section('main')
    @include('admin.balita.form')

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Data Balita</h3>
                    <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks
                        to simple-datatables</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Balita</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
            <div class="card" style="margin-top: 20px">
                <div class="card-header">
                    Data Balita
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($balita as $b)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration++ }}</td>
                                    <td>{{ $b->nama_balita }}</td>
                                    <td>{{ $b->tl_balita }}</td>
                                    <td>{{ $b->jk }}</td>
                                    <td>
                                        <button type="button" class="btn shadow btn-sm btn-outline-warning"><i class="bi bi-pencil-square"></i></button>
                                        <button type="button" class="btn shadow btn-sm btn-outline-success"><i class="bi bi-eye"></i></button>
                                        <a class="btn shadow btn-sm btn-outline-danger " data-bs-toggle="modal" data-bs-target="#delete-balita{{ $b->id }}"><i class="bi bi-trash3" ></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
