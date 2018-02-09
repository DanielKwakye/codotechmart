@extends('layouts.masterLayout')
@section('title')
    <title>Analytics</title>
@endsection
@section('content')
    <!-- Chart.js -->



{{-- <script type="text/javascript" src="assets/widgets/charts/xcharts/xcharts-demo.js"></script>
 --}}
<div id="page-title">
    <h2>Statistics</h2>
</div>
@php
use Carbon\Carbon; 
     $activeUsers = \App\Orders::
    select('courier_id','shop_id', \DB::raw('count(*) as total'))->where('status',3)->where('courier_id',Auth::guard('courier')->user()->id)
    ->groupBy('shop_id','courier_id')
    ->orderBy('total', 'desc')
    ->get();
$perday = \App\Orders::
    select('created_at', \DB::raw('count(*) as total'))->where('status',3)->where('courier_id',Auth::guard('courier')->user()->id)->whereYear('created_at', '=', date("Y"))
    ->groupBy('created_at')
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
                    @if($activeUsers->count()>0)
                    <div id="example1" style="width: 100%; height: 300px;"></div>
                    @else
                        You have Not Made a Delivery yet
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Deliveries Per Day
                </h3>
                <div class="example-box-wrapper">
                   @if($perday->count()>0)    
                     <div id="example4" style="width: 100%; height: 300px;"></div>
                     @else
                     You have Not Made a Delivery WithIn the Week...Work with a shop and Make Your first Delivery
                   @endif
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
    @if($activeUsers->count()>0)
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
    @endif

    @if($perday->count()>0)
    $(function() {

    var tt = document.createElement('div'),
        leftOffset = -(~~$('html').css('padding-left').replace('px', '') + ~~$('body').css('margin-left').replace('px', '')),
        topOffset = -32;
    tt.className = 'ex-tooltip';
    document.body.appendChild(tt);

    var data = {
        "xScale": "time",
        "yScale": "linear",
        "main": [{
            "className": ".pizza",
            "data": [
            @foreach($perday as $p)
            {
                "x": "{{Carbon::parse($p->created_at)->format('Y-m-d')}}",
                "y": {{$p->total}}
            },
            @endforeach 

            ]
        }]
    };
    var opts = {
        "dataFormatX": function(x) {
            return d3.time.format('%Y-%m-%d').parse(x);
        },
        "tickFormatX": function(x) {
            return d3.time.format('%A')(x);
        },
        "mouseover": function(d, i) {
            var pos = $(this).offset();
            $(tt).text(d3.time.format('%A')(d.x) + ': ' + d.y)
                .css({
                    top: topOffset + pos.top,
                    left: pos.left + leftOffset
                })
                .show();
        },
        "mouseout": function(x) {
            $(tt).hide();
        }
    };
    var myChart = new xChart('line-dotted', data, '#example4', opts);

});
    @endif
    
</script>
@endsection