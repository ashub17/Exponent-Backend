@extends('backend.master')
@section('title')
    Products
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
                <th>Image</th>
                <th>Link</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key=>$product)
            <tr>
                    <td>{{++$key}}</td>
                    <td>{{$product->title}}</td>
                    <td>{!!$product->description!!}</td> 
                    <td><img src="{{url('products')}}/{{$product->image}}" width="200"></td>
                    <td>{{$product->link}}</td> 
                    <td>
                        <a href="{{url('editProduct')}}/{{$product->pid}}" class="btn btn-success"><i class="fa fa-edit">Edit</i></a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$product->pid}}">
                            <i class="fa fa-trash">Delete</i>
                        </button>
                        <div class="modal fade" id="delete{{$product->pid}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <button type="button" class="btn btn-danger"><a href="{{url('deleteProduct')}}/{{$product->pid}}">Confirm</a></button>
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
    <h3>Add A Product</h3>
    <form action="{{url('addProducts')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="hidden" name="table" value="{{encrypt('products')}}">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" accept="image/*" name="image" id="file" onchange="loadfile(event)">
            <p><label for="file">Upload Image</label></p>
            <p><img id="output" width="200"></p>
        </div>
        <div class="form-group">
            <label>Link</label>
            <input type="text" name="link" class="form-control" required>
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