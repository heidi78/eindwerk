@extends('layouts.dashboard')
@section('content')

<div class="col-8">
  <h3>Lijst van Users</h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Photo</th>
        <th scope="col">Naam</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Active</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
      </tr>
    </thead>
    <tbody>
      @if($users)
      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td><img height="50" src="{{$user->photo ? asset($user->photo->file) : 'http://placehold.it/400x400'}}" alt="{{$user->name}}"></td>
        <td><a href="{{route('users.edit', $user->id)}}" class="kleur">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->role ? $user->role->name : 'User without role'}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}
        </tr>
        @endforeach
        @endif
      </tbody>
    </table>
    <div class="row">
      <div class="col-2">
        {{$users->links()}}
      </div>
    </div>
  </div>

  @endsection