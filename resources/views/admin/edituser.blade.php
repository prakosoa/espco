@extends('layouts.back.index')
@section('css')

@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form"  method="post" action="{{url('/admin/user/edit')}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="namee" placeholder="Name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="emaill" placeholder="Enter email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="phonee" placeholder="Phone" value="{{$user->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Steam</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="steamm" placeholder="Steam" value="{{$user->steam}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Photo</label>
                            <input type="text" readonly="" class="form-control" placeholder="Browse...">
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </section>
    </div>

@endsection

@section('js')

@endsection