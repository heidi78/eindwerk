@extends('layouts.dashboard')
@section('content')

<div class="col-8">
  <h3>Lijst van Brands</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Naam</th>
      </tr>
    </thead>
    <tbody>
      @if($brands)
      @foreach($brands as $brand)
      <tr>
        <td>{{$brand->id}}</td>
        <td><a href="{{route('brands.edit', $brand->id)}}" class="kleur">{{$brand->name}}</a></td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>

@endsection