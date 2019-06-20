@extends('layouts.dashboard')
@section('content')

<div class="col-8">
  <h3>Lijst van Slider-foto</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th>Afbeelding</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>
    <tbody>
      @if($sliders)
      @foreach($sliders as $slider)
      <tr>
        <td><a href="{{route('sliders.edit', $slider->id)}}" class="kleur">{{$slider->id}}</a></td>
        <td><img height="50" src="{{$slider->photo ? asset($slider->photo->file) : 'http://placehold.it/400x400'}}" alt="slider photo"></td>
        <td>{{$slider->created_at}}</td>
        <td>{{$slider->updated_at}}</td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>
@endsection