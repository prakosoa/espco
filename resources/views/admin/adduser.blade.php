@extends('layouts.back.index')
@section('css')

@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Add User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{url('/admin/adduser/add')}}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Retype password"  id="password-confirm" name="password_confirmation" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Level</label>
                            <select class="form-control select2" name="levell" style="width: 100%;" >
                                <option value="" selected="selected"><b>Level</b></option>
                                <option value="2">Coach</option>
                                <option value="3">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nickname</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nickname" name="nicknamee" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone" name="phonee" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Steam</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Steam" name="steamm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rank</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Rank" name="rankk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Games</label>
                            <select class="form-control select2" style="width: 100%;" >
                                <option value="" selected="selected" ><b>Select Game</b></option>
                                <option name="game" value="1">Dota2</option>
                                <option name="game" value="2">CS:GO</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fee</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Fee" name="feee">
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