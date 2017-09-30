@extends('layouts.front.index')

@section('css')
    <link rel="stylesheet" href="{{asset('css/listcoach.css') }}">
    <style>
        a.list-group-item {
            height:auto;
            min-height:220px;
        }
        a.list-group-item.active small {
            color:#fff;
        }
        .stars {
            margin:20px auto 1px;
        }
    </style>

@endsection

@section('header')
    <section class="herol">
        <section class="navigation2">
            @include('layouts.front.header')
        </section>
    </section>
@endsection

@section('content')
            <div class="container" style="margin-top: 150px;padding: 0 50px 50px 50px;">
                <div class="row" >
                    <div class="welll" >
                        {{--search--}}
                    <div class="row">
                        <div class="form-group col-md-3">
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group col-md-3">
                            <select class="form-control" >
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                    </div>
              
                        <br>
                        <br>
                        <br>
                        {{--search end--}}


                @foreach($coach as $resultcoach)
                <div class="list-groupds" >
                    <div href="#" class="list-group-items" >
                        <div class="media col-md-3">
                            <figure class="pull-left">
                                <img class="media-object img-rounded img-responsive"  src="https://cdn.dotablast.com/wp-content/uploads/2015/07/fearesl.png" alt="placehold.it/350x250" >
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4 class="list-group-item-heading"> {{$resultcoach->name}} <b>"{{$resultcoach->nickname}}"</b> </h4>
                            <h5 class="list-group-item-heading">
                                    @if($resultcoach->games_id==1)
                                         <b>Dota2</b> Coach
                                    @elseif ($resultcoach->games_id==2)
                                        <b>CSGO</b> Coach
                                    @endif
                            </h5>

                            <p class="list-group-item-text"> {{$resultcoach->about}}
                            </p>
                        </div>
                        <div class="col-md-3 text-center">
                            <h3> Rp {{$resultcoach->fee}} <small> /hr </small></h3>
                           <a href="{{ url('profilecoach/'.$resultcoach->id)}}"> <button type="button" class="btn btn-primary btn-lg btn-block" > Hire Now! </button></a>
                            <p><b>Rank :</b>  <small>  </small> <b>{{$resultcoach->rank}}</b> </p>
                        </div>
                    </div>
                </div>

                        @endforeach
            </div>
        </div>
    </div>
    </div>
    @endsection

@section('js')

@endsection