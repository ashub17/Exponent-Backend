@extends('backend.master')
@section('title')
    About Us
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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key=>$about)
            <tr>
                    <td>{{++$key}}</td>
                    <td>{{$about->title}}</td>
                    <td>{{$about->description}}</td> 
                    <td>
                        <a href="{{url('editAbout')}}/{{$about->aid}}" class="btn btn-success"><i class="fa fa-edit">Edit</i></a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$about->aid}}">
                            <i class="fa fa-trash">Delete</i>
                        </button>
                        <div class="modal fade" id="delete{{$about->aid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Alert!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this part?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger"><a href="{{url('deleteAbout')}}/{{$about->aid}}">Confirm</a></button>
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
    <h4>Add an About us content</h4>
    <form action="{{url('addAbout')}}" method="post">
        {{ csrf_field() }}
    <input type="hidden" name="table" value="{{encrypt('abouts')}}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success">Add</button>
        </div>
    </form>
</div>
@endsection