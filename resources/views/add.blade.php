@extends('layouts.master')
@section('title', 'Add')
@section('content')
<form action="{{ url('people') }}" method="POST">
    @csrf
    <h1 class="display-4"> Add User</h1>
    <div class="form-group">
        <label>Firstname</label>
        <input type="text" class="form-control" name="fname">
    </div>
    <div class="form-group">
            <label>Lastname</label>
            <input type="text" class="form-control" name="lname">
    </div>
    <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age">
    </div>
    <button type="submit" class="btu button-success"> Save</button>
@if ($errors->any())
<div class="alert" alert-danger>  
<ul>
    @foreach ($errors->all as $error)
            <li>{{$error}}</li>
        
    @endforeach
    </ul> 
</div>  
@endif
 
</form>
@endsection