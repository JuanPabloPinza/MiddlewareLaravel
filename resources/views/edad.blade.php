@extends('app')
@section('cscontent')
<div class="container">
    <div class="card text-start">
        <div class="card-body">
            <h4 class="card-title">BIENVENIDO A MI SITIO</h4>
            <p class="card-text">Ingrese su edad para acceder a la plataforma:</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('edad.store') }}">
                @csrf
                <input type="number" name="edad" placeholder="Edad" required min="0" max="120" class="form-control mb-2">
                <button type="submit" class="btn btn-primary">Acceder</button>
            </form>
        </div>
    </div>
</div>
@endsection
