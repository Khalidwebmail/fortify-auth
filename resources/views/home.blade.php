@extends('layouts.app')
@section('content')
    @if( ! empty(\Illuminate\Support\Facades\Auth::user()->name))
        <h2>Welcome back {{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
    @endif
@endsection
