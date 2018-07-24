<link href="{{ asset('css/administration.css') }}"  rel="stylesheet">


@extends('layouts.app')

@section('content')

<div class="container mt-4">
  <div class="row">
    <div class="col-sm-3">
      <div class="card mt-3 mb-2">
        <div class="card-body">
          <p style="margin-bottom:0.5rem;" class="card-text">CONSULTA ENVIOS</p>
          <div class="form-check">
            <input class="form-check-input" name="Envio" type="radio" value="PayPal">
            <label class="form-check-label">
              Mensual
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="Envio" type="radio" value="OXXO">
            <label class="form-check-label">
              Semestral
            </label>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="mt-4 btn-group">
              <button class="btn btn-sm btn-dark">descargar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-3 mb-2">
        <div class="card-body">
          <p style="margin-bottom:0.5rem;" class="card-text">CONSULTA SUCURSALES</p>
          <div class="form-check">
            <input class="form-check-input" name="Sucursales" type="radio">
            <label class="form-check-label">
              Envios
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="Sucursales" type="radio">
            <label class="form-check-label">
              Recepciones
            </label>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="mt-4 btn-group">
              <button class="btn btn-sm btn-dark">descargar</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card mt-3 mb-2">
        <div class="card-body">
          <p style="margin-bottom:0.5rem;" class="card-text">CONSULTA PRODUCTO</p>
          <div class="form-check">
            <input class="form-check-input" name="Producto" type="radio" value="PayPal">
            <label class="form-check-label">
              Tipos de producto
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" name="Producto" type="radio">
            <label class="form-check-label">
              Forma de pago
            </label>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="mt-4 btn-group">
              <button class="btn btn-sm btn-dark">descargar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-9">
      <h3>Reporte de envios en la ultima semana</h3>
      <hr>
        <div class="card">
            <div class="card-body">
                <canvas id="chLine"></canvas>
            </div>
        </div>
        <div class="statisti_report" style="margin-bottom: 30px;">
          <h3 class="mt-5 mb-3">Reportes de estadistica</h3>
          <div class="table-responsive">
            <table class="table table-bordered responsive" style="margin-bottom:0px;">
              <thead class="thead-light">
                <tr>
                  <th></th>
                  <th>Total envios semanal</th>
                  <th>Promedio/Envios Diarios</th>
                  <th>Promedio ganacia/Pedido</th>
                  <th>Total ganancia Semanal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Envios nacionales</td>
                  <td>145</td>
                  <td>20</td>
                  <td>30$</td>
                  <td>4.350$</td>
                </tr>
                <tr>
                  <td>Envios internacionales</td>
                  <td>124</td>
                  <td>17</td>
                  <td>45$</td>
                  <td>5.580$</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>

@endsection

<script src="{{ asset('js/chart.js') }}" defer></script>
<script type="text/javascript">

var chartData = {
  labels: ["Domingo", "Lunes", "Martes", "MIercoles", "Jueves", "Viernes", "Sabado"],
  datasets: [{
    label: 'Envios Nacionales',
    data: [14, 13, 18, 31, 26, 20, 23],
    backgroundColor: [
             'rgba(255, 99, 132, 0.2)',
         ],
         borderColor: [
             'rgba(255,99,132,1)',
         ],
         borderWidth: 1
  },
  {
    label: 'Envios Internacionales',
    data: [17, 12, 15, 24, 20, 16, 20],
    backgroundColor: [
             'rgba(75, 192, 192, 0.2)',
         ],
         borderColor: [
             'rgba(75, 192, 192, 1)',
         ],
         borderWidth: 1
  }]
};

setTimeout(function(){
  var chLine = document.getElementById("chLine");
    if (chLine) {
      new Chart(chLine, {
      type: 'line',
      data: chartData,
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: true,
        }
      }
      });
    }else{
      console.log('falta un pelo');
    }
}, 1000);

</script>
