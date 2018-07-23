<link href="{{ asset('css/details.css') }}"  rel="stylesheet">

@extends('layouts.app')

@section('content')

<div class="registerContainer row">
  <div class="FormContainer col-md-5 pl-5">
    <div class="bg-white shadow  p-3 mb-4 bg-white rounded">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">N° Guida de paquete</label>
        <div class="col-sm-8">
          <input id="CodeOrderInput" type="text" class="form-control" id="inputEmail3">
        </div>
      </div>
      <button onclick="searchOrder()" class="btn btn-dark">Buscar</button>
    </div>

    <div class="bg-white shadow p-3 mb-5 bg-white rounded">

      <h3>Detalles de paquete</h3>
      <hr>
      <div class="form-group row">
        <div class="col-sm-12">
          <input type="text" placeholder="Nombre producto" class="form-control mb-3" id="">
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Materiales" class="form-control mb-3" id="">
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Peso" class="form-control mb-3" id="">
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Dimensiones" class="form-control mb-3" id="">
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Unidades" class="form-control mb-3" id="">
        </div>
        <div class="col-sm-12">
          <textarea type="text" placeholder="Observaciones" class="form-control mb-3" rows=3 id=""></textarea>
        </div>
      </div>

    </div>
  </div>

  <div class="FormContainer col-md-7 pr-5">

    <div class="bg-white shadow  p-3 mb-4 bg-white rounded">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">Paquete numero</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" >
        </div>
      </div>
    </div>


      <div style="margin-left: 0px; margin-right: 0px;" class="bg-white shadow  p-3 mb-4 bg-white rounded row">
        <h4 class="mb-2 col-sm-12">Embalaje</h4>

        <div class="col-sm-7">
          <div class="form-group row">
            <div class="col-sm-12">
              <textarea type="text" class="form-control" rows=5 id=""></textarea>
            </div>
          </div>
        </div>

        <div class="col-sm-5">
          <img src="paquete.jpg" alt="..." width="250px;" height="200px;" class="img-thumbnail mx-auto d-block mb-4">
        </div>


        <div class="col-sm-7">
          <h4 class="mb-3">Estatus</h4>
          <div class="form-group row">
            <div class="col-sm-12">
              <textarea type="text" class="form-control" rows=5 id=""></textarea>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <h4 class="mb-3">Ruta</h4>

          <img src="map.jpg" width="250px;" height="200px;" class="img-thumbnail mx-auto d-block mb-4" alt="">
        </div>

        <h4 class="mb-3 col-sm-12">Cuidados especiales</h4>
        <div class="col-sm-12">
          <textarea type="text" class="form-control" rows=5 id=""></textarea>
        </div>

      </div>


</div>

@endsection

<script type="text/javascript">
  function searchOrder(){
    data = {
      'code':$('#CodeOrderInput').val()
    };
   var request = data
   var url = "http://localhost:8000/searchOrder";
   console.log(request);
   axios.post(url,request).then(response =>{
     console.log(response.data);
   },error=>{
     console.log(error);
   })
  }
</script>
