@extends('layouts.app')

@section('page_title' , 'Homepage!')


@section('content')
  <div class="flex">
    <a href="{{ route('products')}}">SHOW ME THE PRODUCTS!</a>
  </div>
@endsection
