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




                        {{--search end--}}
                {{--<h1 class="text-center">Vote for your favorite</h1>--}}
                <div class="list-groupds">
                    <div href="#" class="list-group-items" style=" background: dimgrey; ">
                        <div class="media col-md-3">
                            <figure class="pull-left">
                                <img class="media-object img-rounded img-responsive"  src="http://wiki.teamliquid.net/commons/images/thumb/3/3d/Fear_frankfurt_major_2015.jpg/600px-Fear_frankfurt_major_2015.jpg" alt="placehold.it/350x250" >
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4 class="list-group-item-heading"> Coach Name "Nick" </h4>
                            <h5 class="list-group-item-heading"> Game </h5>

                            <p class="list-group-item-text"> Qui diam libris ei, vidisse incorrupte at mel. His euismod salutandi dissentiunt eu. Habeo offendit ea mea. Nostro blandit sea ea, viris timeam molestiae an has. At nisl platonem eum.
                                Vel et nonumy gubergren, ad has tota facilis probatus. Ea legere legimus tibique cum, sale tantas vim ea, eu vivendo expetendis vim. Voluptua vituperatoribus et mel, ius no elitr deserunt mediocrem. Mea facilisi torquatos ad.
                            </p>
                        </div>
                        <div class="col-md-3 text-center">
                            <h2> 350000 <small> /hr </small></h2>
                           <a href="{{ url('profilecoach') }}"> <button type="button" class="btn btn-primary btn-lg btn-block" > Hire Now! </button></a>
                            {{--<div class="stars">--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                            {{--</div>--}}
                            <p><b>Rank :</b>  <small>  </small> <b>7000</b> </p>
                        </div>
                    </div>
                    {{--<div href="#" class="list-group-items">--}}
                        {{--<div class="media col-md-3">--}}
                            {{--<figure class="pull-left">--}}
                                {{--<img class="media-object img-rounded img-responsive" src="http://placehold.it/350x250" alt="placehold.it/350x250" >--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                            {{--<h4 class="list-group-item-heading"> List group heading </h4>--}}
                            {{--<p class="list-group-item-text"> Eu eum corpora torquatos, ne postea constituto mea, quo tale lorem facer no. Ut sed odio appetere partiendo, quo meliore salutandi ex. Vix an sanctus vivendo, sed vocibus accumsan petentium ea.--}}
                                {{--Sed integre saperet at, no nec debet erant, quo dico incorrupte comprehensam ut. Et minimum consulatu ius, an dolores iracundia est, oportere vituperata interpretaris sea an. Sed id error quando indoctum, mel suas saperet at.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-3 text-center">--}}
                            {{--<h2> 12424 <small> votes </small></h2>--}}
                            {{--<button type="button" class="btn btn-primary btn-lg btn-block">Vote Now!</button>--}}
                            {{--<div class="stars">--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                            {{--</div>--}}
                            {{--<p> Average 3.9 <small> / </small> 5 </p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div href="#" class="list-group-items">--}}
                        {{--<div class="media col-md-3">--}}
                            {{--<figure class="pull-left">--}}
                                {{--<img class="media-object img-rounded img-responsive" src="http://placehold.it/350x250" alt="placehold.it/350x250">--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                            {{--<h4 class="list-group-item-heading"> List group heading </h4>--}}
                            {{--<p class="list-group-item-text"> Ut mea viris eripuit theophrastus, cu ponderum accusata consequuntur cum. Suas quaestio cotidieque pro ea. Nam nihil persecuti philosophia id, nam quot populo ea.--}}
                                {{--Falli urbanitas ei pri, eu est enim volumus, mei no volutpat periculis. Est errem iudicabit cu. At usu vocibus officiis, ad ius eros tibique appellantur.--}}
                            {{--</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-3 text-center">--}}
                            {{--<h2> 13540 <small> votes </small></h2>--}}
                            {{--<button type="button" class="btn btn-primary btn-lg btn-block">Vote Now!</button>--}}
                            {{--<div class="stars">--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star"></span>--}}
                                {{--<span class="glyphicon glyphicon-star-empty"></span>--}}
                            {{--</div>--}}
                            {{--<p> Average 4.1 <small> / </small> 5 </p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection

@section('js')

@endsection