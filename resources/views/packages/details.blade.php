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
          <input type="text" placeholder="Nombre producto" id="name" class="form-control mb-3" id="">
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Materiales" class="form-control mb-3" id="material">
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Peso" class="form-control mb-3" id="weight">
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Dimensiones" class="form-control mb-3" id="dimensions">
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Unidades" class="form-control mb-3" id="quantity">
        </div>
        <div class="col-sm-12">
          <textarea type="text" placeholder="Observaciones" class="form-control mb-3" rows=2 id="observations"></textarea>
        </div>
      </div>

    </div>
  </div>

  <div class="FormContainer col-md-7 pr-5">

    <div class="bg-white shadow  p-3 mb-4 bg-white rounded">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-4 col-form-label">Paquete numero</label>
        <div class="col-sm-8">
          <input type="text" id="id" class="form-control" >
        </div>
      </div>
    </div>


      <div style="margin-left: 0px; margin-right: 0px;" class="bg-white shadow  p-3 mb-4 bg-white rounded row">
        <h4 class="mb-2 col-sm-12">Estatus</h4>

        <div class="col-sm-7">
          <div class="form-group row">
            <div id="status" class="col-sm-12">
            </div>
          </div>
        </div>

        <div class="col-sm-5">
          <img id="product_img" alt="Imagen del paquete" width="250px;" height="200px;" class="img-thumbnail mx-auto d-block mb-4">
        </div>


        <div class="col-sm-7">
          <h4 class="mb-3">Embalaje</h4>
          <div class="form-group row">
            <div class="col-sm-12">
              <textarea type="text" id="packaging" class="form-control" rows=2 id=""></textarea>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <h4 class="mb-3">Posicion Geografica</h4>

          <img id="route_img" alt="Imagen Localizacion del paquete en tiempo real" width="250px;" height="200px;" class="img-thumbnail mx-auto d-block mb-4" alt="">
        </div>

        <h4 class="mb-3 col-sm-12">Cuidados especiales</h4>
        <div class="col-sm-12">
          <textarea id="specialCares" type="text" class="form-control" rows=2 id=""></textarea>
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
     Res = response.data;
     console.log(response.data);
     $('#id').val(response.data.PackageInfo.id);
     $('#name').val(response.data.PackageInfo.name);
     $('#name').val(response.data.PackageInfo.name);
     $('#material').val(response.data.PackageInfo.material);
     $('#dimensions').val(response.data.PackageInfo.dimensions);
     $('#weight').val(response.data.PackageInfo.weight);
     $('#quantity').val(response.data.OrderInfo.quantity + ' Unidad(es)');
     $('#observations').val(response.data.OrderInfo.observations);
     $('#price').val(response.data.OrderInfo.price);
     $('#packaging').val(response.data.OrderInfo.packaging);
     $('#specialCares').val(response.data.OrderInfo.specialCares);
     $('#product_img').attr('src',"http://localhost:8000/images/" + response.data.PackageInfo.picture);
     $('#route_img').attr('src',"http://localhost:8000/images/map.jpg");

     var stringForStatus = 'Nombre de Emisor: ' + response.data.OrderInfo['sender-name'] + ', ' +
                            response.data.OrderInfo['sender-adress']  +  '<br> Nombre de receptor: ' + response.data.OrderInfo['receptor-name'] + ', ' +
                             response.data.OrderInfo['receptor-adress'] + '<br> Fecha en que se realizo el envio : ' + response.data.OrderInfo['emition-data']
                             + '<br> Fecha en que llegara a su destino: ' + response.data.OrderInfo['recepcion-date'] + '<br> Destino final del paquete : ' +  response.data.OrderInfo['zone'] +
                             '<br> Escala de envio: ' + response.data.OrderInfo['scale'] + '<br> Costo del envio: ' + response.data.OrderInfo.price + '$<br> Tipo de pago: ' +
                             response.data.OrderInfo.payType;
     $('#status').html(stringForStatus);

   },error=>{
     toastr.error('No hay una orden con el codigo descrito');
     console.log(error);
   })
  }
</script>
