@extends('backend.master')
@section('title')
    Homepage
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
                <th>Subtitle</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key=>$home)
            <tr>
                    <td>{{++$key}}</td>
                    <td>{{$home->title}}</td>
                    <td>{{$home->subtitle}}</td> 
                    <td><img src="{{url('homes')}}/{{$home->image}}" width="200"></td> 
                    <td>
                        <a href="{{url('editHome')}}/{{$home->hid}}" class="btn btn-success"><i class="fa fa-edit">Edit</i></a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$home->hid}}">
                            <i class="fa fa-trash">Delete</i>
                        </button>
                        <div class="modal fade" id="delete{{$home->hid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Alert!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this component?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger"><a href="{{url('deleteHome')}}/{{$home->hid}}">Confirm</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container-fluid mr-3">
    <h3>Add A Home Content</h3>
    <form action="{{url('addHomes')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="hidden" name="table" value="{{encrypt('homes')}}">
        <div class="form-group">
            <label>Image</label>
            <input type="file" accept="image/*" name="image" id="file" onchange="loadfile(event)">
            <p><label for="file">Upload Image</label></p>
            <p><img id="output" width="200"></p>
        </div>
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Subitle</label>
            <input type="text" name="subtitle" class="form-control" required>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Add</button>
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