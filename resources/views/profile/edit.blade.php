
@extends('layouts.admin')


@section('content')

<div class="content-wrapper">

     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="vh-100" style="background-color: #f4f5f7;">
            <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-white"
                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                            alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                        <h5>{{ $profile->name }}</h5>
                        <p>
                            @if ( $profile->is_admin == 1)
                            Admin
                            @else
                            Customer
                            @endif
                        </p>

                        <a href="{{ route ('profile.edit', $profile->id) }}"><i class="far fa-edit fa-2x mb-5 "></i></a>

                        </div>
                        <div class="col-md-8">
                            <form action="" method="post">
                                <div class="card-body p-4">
                                    <h5><strong>Information</strong></h5>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Email</h6>

                                        <div class="form-outline">
                                            <input type="text" id="form6Example1" class="form-control" value="{{ $profile->email }}"/>
                                        </div>

                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Phone</h6>
                                        <div class="form-outline">
                                            <input type="text" id="form6Example1" class="form-control" value="{{ $profile->phone_number }}"/>
                                        </div>

                                    </div>
                                    </div>
                                    <h6>Address</h6>
                                    <hr class="mt-0 mb-2">
                                    <div class="row pt-1">
                                        <div class="col-12">
                                            <div class="form-outline mb-4">
                                                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4"> Update </button>


                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>



    </div>
    <!-- /.content-wrapper -->


</div>
@endsection
