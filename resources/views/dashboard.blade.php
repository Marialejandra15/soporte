
{{-- Panel administrativo del dashboard --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Soporte AGBC</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    @role('admin')
    <p>hola admin</p>
@endrole
@role('soporte')
    <p>hola soporte</p>
@endrole
@role('usuario')
    <p>hola usuario</p>
@endrole
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
