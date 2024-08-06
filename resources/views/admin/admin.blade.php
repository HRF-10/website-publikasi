@extends('admin.layouts.main')

@section('container')
            @include('admin.layouts.header')
            <div class="page-title-area">   
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Aspirasi Saya</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Aspirasi Saya</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Welcome, {{ ucfirst(strtolower(explode(' ', auth()->user()->name)[0])) }} <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="/">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- row area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title">Tabel Aspirasi Siswa</h4>
                                    <form method="GET" action="/admin">
                                        <div class="row pb-3">
                                            <div class="col-md-4">
                                                <label for="start_date">Start Date:</label>
                                                <input type="date" id="start_date" name="start_date" class="form-control">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="end_date">End Date:</label>
                                                <input type="date" id="end_date" name="end_date" class="form-control">
                                            </div>
                                            <div class="col-md-3 align-self-end">
                                                <button type="submit" class="btn btn-primary btn-block">Filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="trad-history mt-4">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="dbkit-table">
                                                    <thead>
                                                        <tr class="heading-td ">
                                                            <th class="mv-icon">No</th>
                                                            <th class="coin-name">Aspirasi</th>
                                                            <th class="buy">Pihak Yang Dituju</th>
                                                            <th class="sell">Aspirator</th>
                                                            <th class="stats-chart">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($aspirasis as $aspirasi)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $aspirasi->aspirasi }}</td>
                                                                <td>{{ $aspirasi->pihak }}</td>
                                                                <td>
                                                                    @php
                                                                        $nameParts = explode(' ', $aspirasi->user->name);
                                                                        $shortName = implode(' ', array_slice($nameParts, 0, 2));
                                                                        echo $shortName;
                                                                    @endphp
                                                                </td>
                                                                <td>
                                                                    <a href="/admin/{{ $aspirasi->id }}" class="badge bg-info"><i class="fa-regular fa-eye"></i></a>
                                                                    <a href="/admin/{{ $aspirasi->id }}/edit" class="badge bg-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection