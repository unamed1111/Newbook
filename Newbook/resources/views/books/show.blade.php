@extends('layouts.master')
@section('add',route('book.create'))
@section('title','Book List')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        New Book Has:  
        <h2>{{ $book['title'] }}</h2> 
        <h2>{{ $book['publisher']}}</h2> 
    </div>
</div>
@endsection    			