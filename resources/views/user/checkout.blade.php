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
    <link rel="stylesheet" href="{{asset('css/checkout.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
@endsection

@section('header')
    <section class="herol">
        <section class="navigation2">
            @include('layouts.front.header')
        </section>
    </section>
@endsection

@section('content')

    <div class="container wrapper" style="margin-top: 100px;">
        <div class="row cart-head">
            <div class="container">
                <div class="row">
                    <p></p>
                </div>
                <div class="row">
                    <div style="display: table; margin: auto;">
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="row">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row cart-body">
            <form class="form-horizontal" method="post" action="{{route('user.checkout-post')}}">
                {{csrf_field()}}
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Review Order <div class="pull-right"><small><a class="afix-1" href="#"></a></small></div>
                        </div>
                        <div class="panel-body">
                            @php
                                $totalFee = 0;
                            @endphp
                            @foreach($order->schedules as $schedule)
                                <div class="form-group">
                                    <div class="col-sm-3 col-xs-3">
                                        {{--<img class="img-responsive" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />--}}
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="col-xs-12">{{$schedule->coach->name}}</div>
                                        <div class="col-xs-12"><small>DateTime : <span>{{Carbon\Carbon::parse($schedule->datetime)->toFormattedDateString()}}</span></small></div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3 text-right">
                                        <h6><span>Rp</span>{{$schedule->coach->fee}}</h6>
                                        @php
                                            $totalFee = $totalFee + $schedule->coach->fee;
                                        @endphp
                                    </div>
                                </div>
                                <div class="form-group"><hr /></div>
                            @endforeach

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>Rp</span><span>{{number_format($totalFee, 2)}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Payment</div>
                        <div class="panel-body">
                        <!-- <input type="hidden" name="invoice" class="form-control" value="" /> -->
                            <div class="form-group">
                                <div class="col-md-12"><strong>Bank Account Number:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="accountnumber" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Bank Account Name:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="bankname" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Phone Number:</strong></div>
                                <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" /></div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12"><strong>Note : </strong>Please transfer to the following bank account </div>
                                <div class="col-md-12"><strong>BC* : 021222222 - Esports Coach </strong></div>
                            </div>
                            <input type="hidden" name="total_fee" value="{{$totalFee}}">
                            <input type="hidden" name="order_schedule_id" value="{{$order->id}}"/>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="submit" class="btn btn-primary btn-submit-fix" value="Place Order">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
        <div class="row cart-footer">

        </div>
    </div>

@endsection

@section('js')
    <script src="{{ URL::asset('js/checkout.js') }}"></script>
@endsection