@extends('layout.master')
@section('content')

<div class="card">
    <div class="card-body m-4">
        <h4 class="card-title">Mediciones Existentes</h4>
        <br>
        <table class="table table-hover table-bordered table-striped talbe-responsive">
            <thead>
                <tr>
                    <td>Fecha</td>
                    <td>Hora</td>
                    <td>Medidor</td>
                    <td>Valor</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody id="tbody-lecturas">

            </tbody>
        </table>
    </div>
</div>

@endsection