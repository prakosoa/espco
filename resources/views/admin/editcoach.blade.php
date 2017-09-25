@extends('layouts.back.index')
@section('css')

@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Coach</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="{{url('/admin/coach/edit')}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$coach->id}}">
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="nama" value="{{$coach->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="emaill" value="{{$coach->email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nickname</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nickname" name="nicknamee" value="{{$coach->nickname}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone" name="phonee" value="{{$coach->phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Steam</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Steam" name="steamm" value="{{$coach->steam}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Rank</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rank" name="rankk" value="{{$coach->rank}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Games</label>
                    <select class="form-control select2" style="width: 100%;" >
                        <option value="" selected="selected" ><b>Select Game</b></option>
                        <option value="1">Dota2</option>
                        <option value="2">CS:GO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Fee</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Fee" name="feee" value="{{$coach->fee}}">
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