
@extends('layouts.admin')


@section('content')
<head>
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/montserrat-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>

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
            <div class="container-fluid-lg">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class=""></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Accounts</li>
                        <li class="breadcrumb-item active">New Account</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="" style="background-color: #f4f5f7;">
            <div class="contai">
                <div class="row d-flex">
                    <div class="col col-lg-10">
                        <div class="page-content mb-3" >
                            <div class="wizard-v10-content">
                                <div class="wizard-form">
                                    <div class="wizard-header">
                                        <h3>Create a new Account</h3>
                                    </div>
                                    <form class="form-register" action="" method="post">
                                        @csrf
                                        <div id="form-total">
                                            <!-- SECTION 1 -->
                                            <h2>1</h2>
                                            <section>
                                                <div class="inner">
                                                    <div class="form-row">
                                                        <label for="card">Account Type</label>
                                                        <div class="option-container">

                                                            <input class="option-input" checked id="option1" type="radio" name="accounts_types_id" value="1" />
                                                            <input class="option-input" id="option2" type="radio" name="accounts_types_id" value="2"/>



                                                            <label class="option" for="option1">
                                                            <span class="option__indicator"></span>
                                                            <span class="option__label">
                                                                Savings
                                                            </span>
                                                            </label>

                                                            <label class="option" for="option2">
                                                            <span class="option__indicator"></span>
                                                            <span class="option__label">
                                                                Current
                                                            </span>
                                                            </label>



                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="option-group">

                                                            <div class="option-container">
                                                                <!-- <label for="card">Currency</label> -->
                                                                <input class="option-input" checked id="option-1" type="radio" name="currency" value="1"/>
                                                                <input class="option-input" id="option-2" type="radio" name="currency" value="2" />

                                                                <label class="option" for="option-1">
                                                                <span class="option__indicator"></span>
                                                                <span class="option__label">
                                                                    <sub>Naira</sub>
                                                                </span>
                                                                </label>

                                                                <label class="option" for="option-2">
                                                                <span class="option__indicator"></span>
                                                                <span class="option__label">
                                                                    <sub>Dollar</sub>
                                                                </span>
                                                                </label>

                                                            </div>
                                                        </div>
                                                        <div class="option-group">
                                                            <div class="option-container">

                                                                <input class="option-input" id="option-3" type="radio" name="currency" value="3" />
                                                                <input class="option-input" id="option-4" type="radio" name="currency" value="4" />

                                                                <label class="option" for="option-3">
                                                                <span class="option__indicator"></span>
                                                                <span class="option__label">
                                                                    <sub>Pounds</sub>
                                                                </span>
                                                                </label>

                                                                <label class="option" for="option-4">
                                                                <span class="option__indicator"></span>
                                                                <span class="option__label">
                                                                    <sub>Euro</sub>
                                                                </span>
                                                                </label>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </section>
                                            <!-- SECTION 2 -->
                                            <h2>2</h2>
                                            <section>
                                                <div class="inner">
                                                    <div class="form-row">


                                                        <div class="option-group">

                                                            <div class="option-container">

                                                                <input class="option-input" id="card1" type="radio" name="card_type" value="1" />
                                                                <input class="option-input" id="card2" type="radio" name="card_type" value="2"/>

                                                                <label class="option" for="card1">
                                                                <span class="option__indicator"></span>
                                                                <span class="option__label">
                                                                    <sub>Master Card</sub>
                                                                </span>
                                                                </label>

                                                                <label class="option" for="card2">
                                                                <span class="option__indicator"></span>
                                                                <span class="option__label">
                                                                    <sub>Visa Card</sub>
                                                                </span>
                                                                </label>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </section>
                                            <!-- SECTION 3 -->
                                            <!-- <h2>3</h2>
                                            <section>
                                                <div class="inner">
                                                    <div class="form-row">
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                            <label for="floatingTextarea2">Any Additional Comments?</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </section> -->
                                        </div>

                                        <button id="submit" style="display: none;" type="submit">Submit</button>
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
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/jquery.steps.js')}}"></script>
	<script src="{{asset('js/main copy.js')}}"></script>
@endsection
