@extends('layouts.app')

@section('page_title' , 'Products!')

{{-- CONTENT --}}

@section('content')
  <div class="container">
    <div class="row">
      <h1 class="mt-5 mb-5">M%B - Products</h1>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CATEGORY</th>
            <th>TYPE</th>
            <th>SELLER</th>
            <th>PRICE</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->category }}</td>
              <td>{{ $product->type }}</td>
              <td>{{ $product->seller }}</td>
              <td>{{ $product->price }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
