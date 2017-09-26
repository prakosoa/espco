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
                        {{--<span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>--}}
                        {{--<span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>--}}
                        {{--<span class="step_thankyou check-bc step_complete">Thank you</span>--}}
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="row">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row cart-body">
            <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Review Order <div class="pull-right"><small><a class="afix-1" href="#"></a></small></div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    {{--<img class="img-responsive" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />--}}
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">Fear</div>
                                    <div class="col-xs-12"><small>DateTime : <span>29 Sept 17 - 20.00-21.00</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span>Rp</span>350000</h6>
                                </div>
                            </div>
                            <div class="form-group"><hr /></div>
                            {{--<div class="form-group">--}}
                                {{--<div class="col-sm-3 col-xs-3">--}}
                                    {{--<img class="img-responsive" src="//c1.staticflickr.com/1/466/19681864394_c332ae87df_t.jpg" />--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6 col-xs-6">--}}
                                    {{--<div class="col-xs-12">Product name</div>--}}
                                    {{--<div class="col-xs-12"><small>Quantity:<span>1</span></small></div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-3 col-xs-3 text-right">--}}
                                    {{--<h6><span>$</span>25.00</h6>--}}
                                {{--</div>--}}
                            {{--</div>--}}



                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>Rp</span><span>350000</span></div>
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
                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<h4>Payment</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}

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

                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                    <!--CREDIT CART PAYMENT-->
                    {{--<div class="panel panel-info">--}}
                        {{--<div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure Payment</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-12"><strong>Card Type:</strong></div>--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<select id="CreditCardType" name="CreditCardType" class="form-control">--}}
                                        {{--<option value="5">Visa</option>--}}
                                        {{--<option value="6">MasterCard</option>--}}
                                        {{--<option value="7">American Express</option>--}}
                                        {{--<option value="8">Discover</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-12"><strong>Credit Card Number:</strong></div>--}}
                                {{--<div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-12"><strong>Card CVV:</strong></div>--}}
                                {{--<div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<strong>Expiration Date</strong>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<select class="form-control" name="">--}}
                                        {{--<option value="">Month</option>--}}
                                        {{--<option value="01">01</option>--}}
                                        {{--<option value="02">02</option>--}}
                                        {{--<option value="03">03</option>--}}
                                        {{--<option value="04">04</option>--}}
                                        {{--<option value="05">05</option>--}}
                                        {{--<option value="06">06</option>--}}
                                        {{--<option value="07">07</option>--}}
                                        {{--<option value="08">08</option>--}}
                                        {{--<option value="09">09</option>--}}
                                        {{--<option value="10">10</option>--}}
                                        {{--<option value="11">11</option>--}}
                                        {{--<option value="12">12</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">--}}
                                    {{--<select class="form-control" name="">--}}
                                        {{--<option value="">Year</option>--}}
                                        {{--<option value="2015">2015</option>--}}
                                        {{--<option value="2016">2016</option>--}}
                                        {{--<option value="2017">2017</option>--}}
                                        {{--<option value="2018">2018</option>--}}
                                        {{--<option value="2019">2019</option>--}}
                                        {{--<option value="2020">2020</option>--}}
                                        {{--<option value="2021">2021</option>--}}
                                        {{--<option value="2022">2022</option>--}}
                                        {{--<option value="2023">2023</option>--}}
                                        {{--<option value="2024">2024</option>--}}
                                        {{--<option value="2025">2025</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<span>Pay secure using your credit card.</span>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<ul class="cards">--}}
                                        {{--<li class="visa hand">Visa</li>--}}
                                        {{--<li class="mastercard hand">MasterCard</li>--}}
                                        {{--<li class="amex hand">Amex</li>--}}
                                    {{--</ul>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    <!--CREDIT CART PAYMENT END-->
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