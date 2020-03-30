@extends('backend.master')
@section('title')
    Update Product
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
<div class="container-fluid">
    <form action="{{url('updateProduct')}}/{{$maindata->pid}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="hidden" name="table" value="{{encrypt('products')}}">
    <input type="hidden" name='pid' value="{{$maindata->pid}}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{$maindata->title}}" class="form-control" >
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{$maindata->description}}</textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" accept="image/*" name="image" id="file" onchange="loadfile(event)">
            <p><label for="file">Upload Image</label></p>
            <p><img id="output" width="200"></p>
        </div>
        <div class="form-group">
            <label>Link</label>
            <input type="text" name="link" value="{{$maindata->link}}" class="form-control" >
        </div>
        <div class="form-group">
            <button class="btn btn-success">Update</button>
        </div>
    </form>
</div>

<script>
    var loadfile=function(event){
        var image=document.getElementById('output');
        image.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
@endsection