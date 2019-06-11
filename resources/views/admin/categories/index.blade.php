@extends('layouts.dashboard')
@section('content')

<div class="col-8">
  <h3>Lijst van Categories</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th>Afbeelding</th>
        <th scope="col">Naam</th>
      </tr>
    </thead>
    <tbody>
      
      @if($category)

      @foreach($category as $cat)
      <tr>
        <td>{{$cat->id}}</td>
        <td><img height="50" src="{{$cat->photo ? asset($cat->photo->file) : 'http://placehold.it/400x400'}}" alt="{{$cat->name}}"></td>
        <td><a href="{{route('categories.edit', $cat->id)}}" class="kleur">{{$cat->name}} </a></td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>

@endsection