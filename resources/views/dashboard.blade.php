@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        </div>
    </div>
</div>

<table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
    @foreach($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>
                <form action="" method="POST">
    
                    <a class="btn btn-primary" href="edit/{{$item->id}}">Edit</a>
      
                    <a class="btn btn-primary" href="delete/{{$item->id}}" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
 
    </table>
      
@endsection