@extends('layouts.masterLayout')
@section('title')
    <title>Home</title>
@endsection
@section('content')
       <!-- Chart.js -->



<div id="page-title">
    <h2>Overwiew</h2>
    <p>The most complete user interface framework that can be used to create stunning admin dashboards and presentation websites.</p>
  {{--   @include('courier.inc.dashboard.sideoptions') --}}
</div>

<div class="row">
    <div class="col-md-4">
        <div class="tile-box tile-box-alt bg-red">
            <div class="tile-header">
                Pending Orders
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-dashboard"></i>
                <div class="tile-content">
                    @if(\App\Orders::all()!==null)
                        {{count(\App\Orders::whereIn('status',['processing','delivered'])->where('user_id',Auth::guard('courier')->user()->id)->get())}}
                    @endif

                </div>
                <small>
                    <i class="glyph-icon icon-caret-up"></i>
                    +7,6% new users in the first quarter
                </small>
            </div>
            <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="This is a link example!">
                view details
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="tile-box tile-box-alt bg-blue-alt">
            <div class="tile-header">
               My Stores
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-tag"></i>
                <div class="tile-content">
                6
                </div>
                <small>
                    <i class="glyph-icon icon-caret-up"></i>
                    +7,6% new users in the first quarter
                </small>
            </div>
            <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="This is a link example!">
                view details
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="tile-box tile-box-alt bg-black-opacity">
            <div class="tile-header">
               Total Deliveries
            </div>
            <div class="tile-content-wrapper">
                <i class="glyph-icon icon-tag"></i>
                <div class="tile-content">
                    @if(\App\Orders::all()!==null)
                        {{count(\App\Orders::where('status',3)->where('user_id',Auth::guard('courier')->user()->id)->get())}}
                    @endif
                    
                </div>
                <small>
                    <i class="glyph-icon icon-caret-up"></i>
                    +7,6% new users in the first quarter
                </small>
            </div>
            <a href="#" class="tile-footer tooltip-button" data-placement="bottom" title="This is a link example!">
                view details
                <i class="glyph-icon icon-arrow-right"></i>
            </a>
        </div>
    </div>
</div><br>
@php
    use Carbon\Carbon; 
     $activeUsers = \App\Orders::
    select('user_id','shop_id', \DB::raw('count(*) as total'))->where('status',3)->where('user_id',Auth::guard('courier')->user()->id)
    ->groupBy('shop_id','user_id')
    ->orderBy('total', 'desc')
    ->get();

@endphp

<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Deliveries Per Store
                </h3>
                <div class="example-box-wrapper">
                    <div id="example1" style="width: 100%; height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

<script type="text/javascript" src="{{asset('couriers/assets/js-core/d3.js')}}"></script>
<script type="text/javascript" src="{{asset('couriers/assets/widgets/charts/xcharts/xcharts.js')}}"></script>
<script type="text/javascript">
     $(function() {

    var datas = {
        "xScale": "ordinal",
        "yScale": "linear",
        "main": [{
            "className": ".pizza",
            "data": [
            @foreach($activeUsers as $p)
            {
                "x": "{!!$p->shop->shopname!!}",
                "y": {{$p->total}}
            },
            @endforeach
            ]
        }]
    };
    var myChart = new xChart('bar', datas, '#example1');

});
</script>
@endsection