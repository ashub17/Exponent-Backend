@extends('backend.master')
@section('title')
    Site Settings
@endsection
@section('content')
<div class="container-fluid mr-3">
    <form action="{{url('addSettings')}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Logo</label>
            <input type="file" accept="image/*" name="image" id="file" onchange="loadfile(event)">
            <p><label for="file">Upload Image</label></p>
            <p><img id="output" width="200"></p>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control"placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control"placeholder="+88-017-XXX-XXXX">
        </div>
        <div class="form-group">
            <label>Landline</label>
            <input type="text" name="landline" class="form-control"placeholder="+02-XXX-XXXX">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control"placeholder="location">
        </div>
        <div class="form-group">
            <label>Facebook</label>
            <input type="text" name="facebook" class="form-control"placeholder="facebook.com/...">
        </div>
        <div class="form-group">
            <label>Linkedin</label>
            <input type="text" name="linkedin" class="form-control"placeholder="linkedin.com/...">
        </div>
        <div class="form-group">
            <label>Youtube</label>
            <input type="text" name="youtube" class="form-control"placeholder="youtube.com/...">
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