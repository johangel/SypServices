<link href="{{ asset('css/registerPackage.css') }}"  rel="stylesheet">

@extends('layouts.app')

@section('content')
  <div class="registerContainer row">
    <div class="FormContainer col-md-6 pl-5">
      <div class="bg-white shadow p-3 mb-5 bg-white rounded">
        <h3>Destinatario</h3>
        <hr>

        <form>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre(s)</label>
            <div class="col-sm-8">
              <input onkeyup="setValue('receptor-name')" type="text" class="form-control" id="receptor-name">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Direccion</label>
            <div class="col-sm-8">
              <input type="text" id="receptor-address" onkeyup="setValue('receptor-address')" class="form-control" id="inputPassword3">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-4 col-form-label">Correo</label>
            <div class="col-sm-8">
              <input type="email" id="receptor-email" onkeyup="setValue('receptor-email')" class="form-control">
            </div>
          </div>

          <div class="row mt-5">

            <div class="col-sm-4">
              <h5 class="mb-3">Tipo de envio</h5>
              <select onchange="setValue('scale')" id="scale" class="custom-select custom-select-md mb-3">
                <option selected="true" disabled="disabled">Tipo de envio</option>
                <option value="Envio Nacional">Envio nacional</option>
                <option value="Envio Transnacional">Envio Transnacional</option>
              </select>

            </div>

            <div class="col-sm-4 pl-5">
              <h5 class="mb-3">Tipo de Pago</h5>
              <div class="form-check">
                <input class="form-check-input" name="payType" checked="checked" type="radio" value="Efectivo">
                <label class="form-check-label" >
                  Efectivo
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="payType" type="radio" value="TDC">
                <label class="form-check-label" >
                  TDC
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="payType" type="radio" value="PayPal">
                <label class="form-check-label">
                  PayPal
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="payType" type="radio" value="OXXO">
                <label class="form-check-label">
                  OXXO
                </label>
              </div>
            </div>

            <div class="col-sm-4 pl-3">
              <h5 class="mb-3">Zona de envio</h5>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="zone" checked="checked" value="Esta Surcusal" id="">
                <label class="form-check-label">
                  Esta Surcusal
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="zone" value="Sucursal Norte" id="">
                <label class="form-check-label">
                  Sucursal Norte
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="zone" value="Sucursal Oriente" id="">
                <label class="form-check-label">
                  Sucursal Oriente
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="zone" value="Internacional" id="">
                <label class="form-check-label">
                  Internacional
                </label>
              </div>
            </div>

          </div>



        </form>

      </div>
    </div>
    <div class="FromContainer col-md-6 pr-5">

      <div class="bg-white shadow p-3 mb-5 bg-white rounded">
        <h3 class="col-sm-7">Remitente</h3>
        <small class="col-sm-4" id="currentDate"></small>

        <hr>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Nombre</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="sender-name" onkeyup="setValue('sender-name')">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-4 col-form-label">Direccion</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="sender-adress" onkeyup="setValue('sender-adress')">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-4 col-form-label">Fecha Recepcion</label>
          <div class="col-sm-8">
            <input onchange="setValue('recepcion-date')" type="date" class="form-control" id="recepcion-date">
          </div>
        </div>

        <div class="mt-5">
          <h3>Detalles de paquete</h3>
          <hr>

        </div>

        <div class="form-group">
          <label for="exampleFormControlFile1">Imagen de paquete</label>
          <input onchange="setImage(event, 'img')" type="file" class="form-control-file">
        </div>

        <img src="paquete.jpg" alt="..." id="img" width="250px;" height="200px;" class="img-thumbnail mx-auto d-block mb-4">


        <div class="row">


          <div class="col-sm-6 mt-1">
            <label for="inputPassword3" class="col-sm-12 col-form-label">descripcion de materiales</label>
            <div>
              <textarea type="text" class="form-control" rows="3" id="material-description" onkeyup="setValue('material-description')"></textarea>
            </div>
          </div>

          <div class="col-sm-6 mt-1">
            <label for="inputPassword3" class="col-sm-12 col-form-label">Observaciones</label>
            <div>
              <textarea type="text" class="form-control" rows="3" id="observations" onkeyup="setValue('observations')"></textarea>
            </div>
          </div>

          <div class="col-sm-6 mt-4">
            <label for="inputPassword3" class="col-sm-12 col-form-label">Peso del producto</label>
            <div>
              <input type="text" class="form-control" id="weight" placeholder="Ej: 10 Kg" onkeyup="setValue('weight')">
            </div>
          </div>

          <div class="col-sm-6 mt-4">
            <label for="inputPassword3" class="col-sm-12 col-form-label">Dimensiones del producto</label>
            <div>
              <input type="text" class="form-control" id="dimensions" placeholder="Ej: 60x40x50 cm" onkeyup="setValue('dimensions')">
            </div>
          </div>

          <div class="col-sm-6 mt-4">
            <label for="inputPassword3" class="col-sm-12 col-form-label">Cantidad de productos a enviar</label>
            <div>
              <input type="number" id="quantity" onkeyup="setValue('quantity')" onchange="setValue('quantity')" onkeydown="preventLetters(event)" class="form-control" >
            </div>
          </div>

          <div class="input-group col-sm-6 mt-4">
            <label for="inputPassword3" class="col-sm-12 col-form-label">Precio envio</label>
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input type="number" class="form-control" id="price" onkeyup="setValue('price')" onchange="setValue('price')" onkeydown="preventLetters(event)">
            <div class="input-group-append">
              <span class="input-group-text">.00</span>
            </div>
          </div>



          <div class="button-group mt-4 col-sm-12">
            <button onclick="CreateOrder()" class="btn btn-dark">Guardar y enviar Correo</button>
            <button class="btn btn-danger">Cancelar</button>
          </div>
        </div>

      </div>

    </div>
  </div>
@endsection


<script type="text/javascript">
  // $(document).ready(function() {
  //
  // });

  var request = {
    'receptor-name':'',
    'receptor-address':'',
    'receptor-email': '',
    'scale':'',
    'payType':'',
    'zone':'',
    'sender-name':'',
    'sender-adress':'',
    'recepcion-date':'',
    'img':null,
    'img_name':'',
    'material-description':'',
    'observations':'',
    'product-name':'',
    'quantity':'',
    'price':'',
  }

  function setValue(id){
    request[id] = $('#'+id).val();
    request.payType = document.querySelector('input[name="payType"]:checked').value;
    request.zone = document.querySelector('input[name="zone"]:checked').value;

    console.log(request);
  }

  function preventLetters(evt){
    if((evt.which < 48 || evt.which > 57)
    && evt.which != 8
    && evt.which != 96
    && evt.which != 97
    && evt.which != 98
    && evt.which != 99
    && evt.which != 100
    && evt.which != 101
    && evt.which != 102
    && evt.which != 103
    && evt.which != 104
    && evt.which != 105){
      evt.preventDefault();
    }
  }

  function setImage(e, idTarget){
    var reader = new FileReader();

    reader.onloadend = evet =>{
      $('#'+idTarget)['0'].src = reader.result;
      // identifier : imgId
    };
    if(e.target.files[0]){
      request.img_name = e.target.files[0].name;
      console.log(e.target.files[0]);
      reader.readAsDataURL(e.target.files[0]);
      reader.onload = (e) => {
        console.log(e.target.result)
       request.img = e.target.result;
      }
    }else{
      $('#' +idTarget).src = "";
    }
  }

  function CheckEmptyValues(e){
    e.preventDefault();
    var arrayRequest = Object.keys(request);
    for(var i= 0; i<arrayRequest.length;i++){
      if(request[arrayRequest[i]] == ''){
        console.log(arrayRequest[i] + ' no tiene valor');
        return;
      }
    }
  }

  function CreateOrder(){
    var url = "http://localhost:8000/createOrder";
    var data= request;

    axios.post(url,data).then(response =>{
      console.log(response.data);
    })

  }

  setTimeout(function(){
    var d = new Date();
    var strDate = d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear();
    $('#currentDate').text(strDate);
  }, 1500);
</script>
