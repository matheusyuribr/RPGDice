@extends('layouts.main')

@section('title','Fichas')

@section('content')
@foreach ($fichas as $ficha)
    <p>{{ $ficha->nome }} --- {{ $ficha->classe }} --- {{ $ficha->raca }}</p>
@endforeach
@endsection


