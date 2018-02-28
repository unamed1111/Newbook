@extends('layouts.master')
@section('add',route('book.create'))
@section('title','Book List')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        @include('layouts.flash')
    	<table class="table table-inverse table-bordered">
        	<thead>
        		<tr>
        			<th>Title</th>
        			<th>Author</th>
        			<th>Publisher</th>
        			<th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
                @foreach($data as $item)
        		<tr>
        			<td>{{$item->title}}</td>
        			<td>{{$item->author}}</td>
        			<td>{{$item->publisher->name}}</td>
        			<td>
        				<button class="btn btn-secondary"><a href="{{ route('book.edit',['id'=>$item->id]) }}" style=" color: black; text-decoration: none;">Edit</a></button>
        				<form action="{{ route('book.destroy', [$item->id]) }}" method="POST" style="display: inline;float: none;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
        			</td>
        		</tr>
                @endforeach
        	</tbody>
        </table>
        <div class="pagination"> {{$data->links()}}</div>
    </div>
</div>
@endsection    			