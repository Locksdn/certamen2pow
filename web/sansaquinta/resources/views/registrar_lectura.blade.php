@extends('layout.master')
@section('content')

<div class="card bg-secondary">
    <div class="card-body m-4">
        <h4 class="card-title">Registrar Lectura</h4>
        <br>
        <form>
            <div class="form-group">
                <label for="date">Fecha</label>
                <input class="form-control" id="date" name="date" type="date" required>
            </div>
            <br>
            <div class="form-group">
                <label for="hour">Hora</label>
                <input class="form-control" id="hour" name="hour" placeholder="HH:mm" type="text">
            </div>
            <br>
            <div class="form-group">
                <label for="medidor">Medidor</label>
                <select class="form-control" name="medidor" id="medidor">
                    @for ($i = 1; $i < 11; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" name="direccion" id="direccion">
            </div>
            <br>
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" min=1 max=500 class="form-control" name="valor" id="valor">
            </div>
            <br>
            <div class="form-group">
                <label for="tipo">Tipo de Medida</label>
                <select class="form-control" name="tipo" id="tipo">
                    <option value="kW">Kilowatts</option>
                    <option value="W">Watts</option>
                    <option value="C">Temperatura (Celcius)</option>
                </select>
            </div>
            <br>
            <div class="card-footer">
                <button id="registrar-btn" class="btn btn-primary float-right" type="button">Registrar</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('javascript')
<script src="{{asset('js/services/lecturasService.js')}}"></script>
<script src="{{asset('js/registrar_lectura.js')}}"></script>
@endsection
