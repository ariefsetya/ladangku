@extends('appfarmer')

@section('title') Produk Saya @endsection

@section('body')

<hr>
<strong>Informasi</strong>
<hr>

<h1>{{$message}}</h1>

<hr>
<a style="width:47%;float:right;" class="button" href="{{route('harvest.start-plant')}}">Mulai Penanaman</a>
<a style="width:47%;float:left;" class="addnew" href="{{route('harvest.my-product')}}">Produk Saya</a>

<br>
<br>
<br>
<br>
<br>
<br>


@endsection