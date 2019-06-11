@extends('layouts.dashboard')
@section('content')

<div class="col-8">
  <h3>Lijst van Roles</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Naam</th>
      </tr>
    </thead>
    <tbody>
      @if($roles)
      @foreach($roles as $role)
      <tr>
        <td>{{$role->id}}</td>
        <td><a href="{{route('roles.edit', $role->id)}}" class="kleur">{{$role->name}}</a></td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>

@endsection