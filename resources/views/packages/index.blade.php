@extends('layout')

@section('content')
    <div class="col-sm-8">
      <h2>
        Listado de paquetes
        <a href="{{route('Packages.create')}}" class="btn btn-primary float-right">Nuevo</a>
      </h2>
    </div>
    <div class="col-sm-4">
      mensaje
    </div>
@endsection
