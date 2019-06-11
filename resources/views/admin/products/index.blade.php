@extends('layouts.dashboard')
@section('content')

<div class="col-8">
  <h3>Lijst van Products</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th>Afbeelding</th>
        <th scope="col">Naam</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Category_id</th>
        <th scope="col">Brand_id</th>
        <th scope="col">User_id</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>
    <tbody>
      @if($products)
      @foreach($products as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td><img height="50" src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/400x400'}}" alt="{{$product->name}}"></td>
        <td><a href="{{route('products.edit', $product->id)}}" class="kleur">{{$product->name}}</a></td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->category ? $product->category->name : 'Uncategorized'}}</td>
        <td>{{$product->brand ? $product->brand->name : 'Uncategorized'}}</td>
        <td>{{$product->user ? $product->user->name : 'Uncategorized'}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->updated_at}}</td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>

@endsection