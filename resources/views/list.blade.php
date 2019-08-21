@extends('layouts.master')
@section('title', 'List')
@section('css')
    @parent
@endsection
@section('content')
@if (Session::has('message'))
    <div> class="alert alert-success"
        {{Session::get('message')}}   
    </div>
@endif
    

<table class="table table-dark">
    <h1 class="display-4">List Page</h1>
    
    <a href="{{ url ('people/create')}}">
        <button type="button" class="btn btn-success">Create</button> 
    </a>    
    <thead>
        
        <th class="bg-info">ID</th>
        <th class="bg-info">Fristname</th>
        <th class="bg-info">Lastname</th>
        <th class="bg-info">Age</th>
        <th class="bg-info">Created_at</th>
        <th class="bg-info">Updated_at</th>
        <th class="bg-info">Actions</th>
    </thead>
    @foreach ($people as $p)
    <tr>
    <tbody>        
              <td>  {{$p->id}}</td>
              <td>  {{$p->fname}}</td>
              <td>  {{$p->lname}}</td>
              <td>  {{$p->age}}</td>
              <td>  {{ date('Y-m-d H:i:s', strtotime($p->created_at)) }}</td>
              <td>  {{ date('Y-m-d H:i:s', strtotime($p->updated_at)) }}</td>
              <td>  

        <div class="form-inline">
              <a href="{{ url ('people/' . $p->id . '/edit')}}">
              <button type="button" class="btn btn-outline-warning">Edit</button> 
            </a>                             
              <form action="{{url('people/'.$p->id)}}" method= "post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>  
        </div>

    </td>
</tr>
    </tbody>
    @endforeach
    </table>
@endsection