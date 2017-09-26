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


                        <div class="container">
                            <div class="row searchFilter" >
                                <div class="col-sm-12" >
                                    <div class="input-group" >
                                        <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown" >
                                        <div class="input-group-btn" >
                                            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Category</span> <span class="caret" >&nbsp;</span></button>
                                            <div class="dropdown-menu dropdown-menu-right" >
                                                <ul class="category_filters" >
                                                    <li >
                                                        <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio" ><label for="all" >All</label>
                                                    </li>
                                                    <li >
                                                        <input type="radio" name="radios" id="Design" value="1" ><label class="category-label" for="Dota2" >Dota2</label>
                                                    </li>
                                                    <li >
                                                        <input type="radio" name="radios" id="Marketing" value="2" ><label class="category-label" for="CSGO" >CSGO</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <button id="searchBtn" type="button" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        {{--search end--}}
                {{--<h1 class="text-center">Vote for your favorite</h1>--}}


                        {{--@foreach($coach as $resultcoach)--}}
                            {{--<tr>--}}
                                {{--<td>{{$resultcoach->name}}</td>--}}
                                {{--<td>{{$resultcoach->nickname}}</td>--}}
                                {{--<td>{{$resultcoach->email}}</td>--}}
                                {{--<td>{{$resultcoach->fee}}</td>--}}
                                {{--<td>--}}
                                    {{--<a href="{{"/notes/". $note->id. "/edit"}}" >--}}
                                    {{--<a href="{{url('/admin/editcoach/'.$resultcoach->id)}}" >  <button type="button" class="btn btn-primary btn-s" style="margin: -1px; color: blue;"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>--}}
                                    {{--<button id="btn-del" class="btn btn-primary btn-sm" style="margin: -1px; color: red;" data-id="{{$resultcoach->id}}" data-nama="{{$resultcoach->name}}"><i class="fa fa-trash" aria-hidden="true"></i></button>--}}

                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}

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