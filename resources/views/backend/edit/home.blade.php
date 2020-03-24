@extends('backend.master')
@section('title')
    Update Homepage
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
    <form action="{{url('updateHome')}}/{{$maindata->hid}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="hidden" name="table" value="{{encrypt('homes')}}">
    <input type="hidden" name='hid' value="{{$maindata->hid}}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{$maindata->title}}" class="form-control" >
        </div>
        <div class="form-group">
            <label>Subtitle</label>
            <input type="text" name="subtitle" value="{{$maindata->subtitle}}" class="form-control" >
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" accept="image/*" name="image" id="file" onchange="loadfile(event)">
            <p><label for="file">Upload Image</label></p>
            <p><img id="output" width="200"></p>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Update Homepage</button>
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