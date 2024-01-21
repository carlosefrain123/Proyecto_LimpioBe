@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="text-left"><b>Limpio Be</b> <img src="{{asset('img/logo.png')}}" width="50" height="50" alt=""></h1>
        </div>
        <div class="col-6">
            <h1 class="text-right"><b>{{now()->format('d/m/y')}}</b></h1>
        </div>
    </div>
</div>
    <h1 class="text-center"><b>Limpio Be</b></h1>
@stop

@section('content')
    <h5 class="text-center">¡Hola! <b>{{Auth::user()->name}}</b> desde aquí podras administrar</h5>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
