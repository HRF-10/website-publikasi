@extends('admin.layouts.main')

@section('container')
            <!-- header area start -->
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
                                    <a href="/formasi/create" class="btn btn-primary mb-3">Sampikan Aspirasi</a>
                                    <h4 class="header-title">Tabel Aspirasi</h4>
                                    <form method="GET" action="/aspirasisaya">
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
                                        <div class="tab-pane fade show active" id="aspirasiSaya" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="dbkit-table">
                                                    <tr class="heading-td">
                                                        <td class="mv-icon">No</td>
                                                        <td class="coin-name">Aspirasi</td>
                                                        <td class="buy">Pihak Yang Dituju</td>
                                                        <td class="stats-chart">Action</td>
                                                    </tr>
                                                    @foreach ($aspirasis as $aspirasi)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $aspirasi->aspirasi }}</td>
                                                            <td>{{ $aspirasi->pihak }}</td>
                                                            <td>
                                                                <a href="/aspirasisaya/{{ $aspirasi->id }}" class="badge bg-info"><i class="fa-regular fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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