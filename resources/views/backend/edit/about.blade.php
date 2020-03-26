@extends('backend.master')
@section('title')
    Update About Us
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
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key=>$about)
            <tr>
                    <td>{{++$key}}</td>
                    <td>{{$about->title}}</td>
                    <td>{{$about->description}}</td> 
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container-fluid mr-3">
    <form action="{{url('updateAbout')}}/{{$maindata->aid}}" method="post">
        {{ csrf_field() }}
    <input type="hidden" name="table" value="{{encrypt('abouts')}}">
    <input type="hidden" name='aid' value="{{$maindata->aid}}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{$maindata->title}}" class="form-control" >
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" value="{{$maindata->description}}" rows="5"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Update</button>
        </div>
    </form>
</div>
@endsection