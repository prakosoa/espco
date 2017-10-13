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
                    <form method="get" action="{{url('/listcoach/search')}}" >
                    {{csrf_field()}}
                        <div class="row">
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" name="coachname" placeholder="Enter Coach Name">
                            </div>
                            <div class="form-group col-md-3">
                                <select class="form-control" name="games">
                                    <option value="">Select Games</option>
                                    <option value="1">Dota2</option>
                                    <option value="2">CSGO </option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                            <button type="submit" class="btn bg-navy margin">Search</button>
                            </div>

                        </div>
                    </form>
                        <br>
                        <br>
                        <br>
                        {{--search end--}}


                @forelse($coach as $resultcoach)
                <div class="list-groupds"  >
                    <div href="#" class="list-group-items row" style="background-color:#efefef; border-bottom: solid 1px #ddd; margin: 0 0 25px;">
                        <div class="media col-md-2" >
                            <figure class="pull-left">
                            <a href="{{ url('profilecoach/'.$resultcoach->id)}}"> <img class="media-object img-rounded img-responsive"  src="{{Asset($resultcoach->photo)}}" alt="placehold.it/350x250" style="width:150px; height:150px; margin-top:7px;" > </a>
                            </figure>
                        </div>
                        <div class="col-md-7">
                           <a href="{{ url('profilecoach/'.$resultcoach->id)}}"> <h3 class="list-group-item-heading" style="color:#ff7e65; margin-top:5px;"> {{$resultcoach->name}} <b>"{{$resultcoach->nickname}}"</b> </h3></a>
                           <h6 class="list-group-item-heading">
                                    @if($resultcoach->games_id==1)
                                         <b>Dota2</b> Coach
                                    @elseif ($resultcoach->games_id==2)
                                        <b>CSGO</b> Coach
                                    @endif
                            </h6>
                            <h5 style="font-size: 10px;margin:-6px 0 0 0;"><input class="star-rating"  value="{{$resultcoach->rating}}"></h5>
                            
                            
                                <p class="list-group-item-text"  style="background-color:#dae2ef;"><b> {{$resultcoach->about}}</b></p>
                            
                        </div>
                        <div class="col-md-3 text-center">
                            <h3> Rp {{$resultcoach->fee}} <small> /hr </small></h3>
                           <a href="{{ url('profilecoach/'.$resultcoach->id)}}"> <button type="button" class="btn btn-primary btn-lg btn-block" > Hire Now! </button></a>
                            <p><b>Rank :</b>  <small>  </small> <b>{{$resultcoach->rank}}</b> </p>
                        </div>
                    </div>
                </div>

            @empty
                <p Style="text-align:center;">No data found</p>
            @endforelse
            </div>
        </div>
        <div style="text-align: center;">
            {{ $coach->links() }}
        </div>
    </div>
    </div>
    @endsection

@section('js')
<!-- <script src="{{ URL::asset('rating/js/star-rating.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('rating/themes/krajee-uni/theme.js') }}"></script> -->
    <script>
        $(document).on('ready', function(){
            $('.star-rating').rating({
                theme: 'krajee-uni',
                clearButton:'',
                stars: 5,
                showCaption: false,
                readonly: true,
                size:'xs',
            });
        });
    </script>
@endsection