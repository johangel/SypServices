<link href="{{ asset('css/home.css') }}"  rel="stylesheet">

@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="welcomeMessageContainer">
  <h2 class="welcomeMessage">
    Bienvenido a tu aplicacion de logistica
  </h2>
</div>
@endsection
