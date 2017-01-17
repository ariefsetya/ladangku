@extends('appadmin')

@section('title') Dashboard Admin @endsection

@section('body')

Welcome back, {{Auth::user()->name}}

@endsection