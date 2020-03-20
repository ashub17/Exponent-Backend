@extends('backend.master')
@section('title')
    Update Category
@endsection
@section('content')
<div class="container-fluid">
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissable">
            {{session::get('message')}}
            <a class="close" data-dismiss="alert">&times;</a>
        </div>
    @endif
</div>
<div class="container-fluid mr-3">
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key=>$category)
            <tr>
                    <td>{{++$key}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->status}}</td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container-fluid mr-3">
    <form action="{{url('updateCategory')}}/{{$maindata->id}}" method="post">
        {{ csrf_field() }}
    <input type="hidden" name="table" value="{{encrypt('categories')}}">
    <input type="hidden" name='id' value="{{$maindata->id}}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{$maindata->title}}" class="form-control" >
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option>On</option>
                <option>Off</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Update Category</button>
        </div>
    </form>
</div>
@endsection