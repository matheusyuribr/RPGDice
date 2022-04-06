@extends('layouts.main')

@section('title', 'Ficha')

@section('content')
@if ($id!=null)
 <p>Mostrando ficha id: {{ $id }} </p>
@endif

@endsection
