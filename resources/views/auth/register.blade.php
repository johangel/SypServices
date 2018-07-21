<link href="{{ asset('css/register.css') }}"  rel="stylesheet">

@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<form method="POST" action="{{ route('register') }}" id="form-register" aria-label="Register">
  {{ csrf_field() }}
  <div class="registerContainer row">

    <div class="FormContainer col-md-6 pl-5">
      <div class="personalInfoForm bg-white shadow p-3 mb-5 bg-white rounded">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre(s)</label>
            <div class="col-sm-8">
              <input name="name" onkeyup="setValue('name')" type="text" class="form-control" id="name">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-4 col-form-label">Primer apellido</label>
            <div class="col-sm-8">
              <input name="first_lastname" onkeyup="setValue('first_lastname')" type="text" class="form-control" id="first_lastname">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-4 col-form-label">Segundo Apellido</label>
            <div class="col-sm-8">
              <input name="second_lastname" type="text" class="form-control" onkeyup="setValue('second_lastname')" id="second_lastname">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-4 col-form-label">contraseña</label>
            <div class="col-sm-8">
              <input name="password" type="password" class="form-control" onkeyup="setValue('password')" id="password">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-4 col-form-label">Repetir contraseña</label>
            <div class="col-sm-8">
              <input name="password_confirmation" type="password" onkeyup="setValue('password_confirmation')" class="form-control" id="password_confirmation">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="col-sm-4 col-form-label">Correo</label>
            <div class="col-sm-8">
              <input name="email" type="email" class="form-control" onkeyup="setValue('email')" id="email">
            </div>
          </div>
      </div>
    </div>

    <div class="FormContainer col-md-6 pr-5">
      <div class="personalInfoForm bg-white shadow p-3 mb-5 bg-white rounded">

        <select name="profile" onchange="setRole()" id="role" class="custom-select custom-select-md mb-3">
          <option disabled selected>Seleccionar Perfil</option>
          <option value="Registrador">Registrador</option>
          <option value="Administrador">Administrador</option>
          <option value="Supervisor">Supervisor</option>
        </select>

        {{-- <select name="permissions" class="custom-select custom-select-md mb-3">
          <option selected>Permisos</option>
          <option value="ningunos">Permisos a</option>
          <option value="todos">Permisos b</option>
          <option value="3">Permisos c</option>
        </select> --}}

        <select name="place" onchange="setValue('branch_Office')" id="branch_Office" class="custom-select custom-select-md mb-3">
          <option disabled selected>Seleccionar sucursal</option>
          <option value="Sucursal Este">Sucursal Este</option>
          <option value="Sucursal Norte">Sucursal Norte</option>
          <option value="Sucursal Oeste">Sucursal Oriente</option>
        </select>

        <h4 style="margin-top: 50px;" class="text-center">Administrador</h3>
          <hr>

        <div style="margin-top: 30px;" class="form-group row">
          <label class="col-sm-3 col-form-label">Correo</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" onkeyup="setValue('admin_email')" id="admin_email">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-3 col-form-label">contraseña</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" onkeyup="setValue('admin_password')" id="admin_password">
          </div>
        </div>

        <div class="mt-5 text-right">
          <button onclick="registrar(event)" class="btn btn-dark">Validar</button>
          <button class="btn btn-info">Regresar</button>
        </div>
      </div>
    </div>

  </div>
</form>
@endsection


<script type="text/javascript">

  var request = {
    'email':'',
    'first_lastname':'',
    'second_lastname':'',
    'name':'',
    'password':'',
    'password_confirmation':'',
    'role':'',
    'role_name':'',
    'admin_email':'',
    'admin_password':'',
    'branch_Office':''
  }

  function setValue(id){
    request[id] =  $('#'+id).val();
    console.log(request)
  }

  function CheckEmptyValues(){
    var arrayRequest = Object.keys(request);
    for(var i= 0; i<arrayRequest.length;i++){
      if(request[arrayRequest[i]] == ''){
        toastr.error('aun hay campos sin llenar')
        return false;
      }
    }
    return true;
  }

  function setRole(){
    if($('#role').val() == 'Registrador'){
      request.role = '1';
      request.role_name = 'Registrador';
    }
    if($('#role').val() == 'Administrador'){
      request.role = '3';
      request.role_name = 'Administrador';
    }
    if($('#role').val() == 'Supervisor'){
      request.role = '2';
      request.role_name = 'Supervisor';
    }
    console.log(request);
  }

  function registrar(e){
    console.log(e);
    e.preventDefault();

    if(!CheckEmptyValues()){
      return;
    }

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      statusCode: {
        500: function() {
          toastr.error('Credenciales del administrador no coinciden');
         }
      },
      type: "POST",
      url : "http://localhost:8000/register",
      data: request,
      success :function(data, status){
        toastr.success('Usuario creado con exito');
        setTimeout(function(){
          window.location.replace("http://localhost:8000/home");
        }, 2000);
      }
    });

  }

  function validateEmail(email){
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }



</script>
