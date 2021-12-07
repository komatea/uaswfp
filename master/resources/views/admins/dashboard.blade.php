@extends('admins.layouts.app', ['pageActive' => 'admins.index', 'pageTitle' => 'Admin Dashboard'])

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Admin</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Kick start -->
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Selamat datang di Dashboard Admin 🚀</h4>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <p>
                        Anda dapat memulai perjalanan administrasi anda dengan memilih salah satu menu di bagian kiri!
                    </p>
                    <div class="alert alert-primary" role="alert">
                        <div class="alert-body">
                            <strong>Hai Admin!</strong> Semoga harimu menyenangkan :)
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Kick start -->

    </div>
@endsection
