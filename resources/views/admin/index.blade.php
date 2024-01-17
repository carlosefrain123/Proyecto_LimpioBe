@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
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
