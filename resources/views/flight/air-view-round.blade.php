@extends('layouts.fheader')


@section('content')

<div class="top-second-section ">
    <div class="container top-second-section-container">
        <img src="dist/img/logo/logo.png" class="mainLogo" alt="">
    </div>
</div>
@php $format=new \App\CMBairs\core\CoreServiceImp();@endphp
<section class="deal-section">
    <div class="container-fluid ">
        <div class="row">
            @include('flight.headefliter')

            <div class="container">
                @include('flight.filters')
                <div class="result-mai">

                    @foreach($airList as $air)
                        @php



                            //  Log::info(print_r($air['outBound'],true)); return;

                                $outBound=$air['outBound']->airSegment;
                                 $checkMoreTime=count($outBound);
                                 $findLastFlySeq=count($outBound[0])-1;
                                 $departureFlight=$outBound[0][0];
                                 $arrivalFlight=$outBound[0][$findLastFlySeq];
                                 $departureTime=$format->dateFormat($departureFlight['@attributes']['DepartureTime']);
                                 $arrivalTime=$format->dateFormat($arrivalFlight['@attributes']['ArrivalTime']);
                                 $timeDiffer=$format->timeDifferace($arrivalTime,$departureTime);
                                 $carrier=$departureFlight['@attributes']['Carrier'].'.GIF';
                                 \Illuminate\Support\Facades\Log::info($carrier);




                        @endphp

                    <div class="col-12 result-mai-col">

                        <div class="card mb-3 border-0">
                            <div class="card-body">
                                <div class="rel-main-img"><img src="images/airimages/{{$carrier}}"  class="air-logo" alt=""> </div>
                                <div class="rel-main-info">
                                    <div class="city-name-main">
                                        <p class="m-0">Colombo to Batticaloa &nbsp;<button class="btn city-btn">1stop</button></p>
                                        <span class="city-span">One Way</span>
                                    </div>
                                    <div class="paci-icon-main">
                                        <img src="" alt="">
                                    </div>
                                    <div class="sear-rate-main">
                                        <span class="avg-span">avg/person</span>
                                        <span class="avg-rate">LKP 24500</span>
                                    </div>
                                </div>
                                <div class="rel-main-info2">
                                    <div class="city-take-col">
                                        <img src="dist/img/icon/ICONS-01.png" class="cmb-icon">
                                        <span class="cmb">CMB</span>
                                        <div class="take-off">Take Off</div>
                                        <div class="take-date">{{$departureTime}}</div>
                                    </div>
                                    <div class="city-take-col city-right">
                                        <img src="dist/img/icon/ICONS-02.png" class="cmb-icon">
                                        <span class="cmb">BKK</span>
                                        <div class="take-off">Landing</div>
                                        <div class="take-date">{{$departureTime}}</div>
                                    </div>
                                    <div class="city-take-col">
                                        <img src="dist/img/icon/ICONS-01.png" class="cmb-icon">
                                        <span class="take-off">TOTAL TIME</span>
                                        <div class="take-date">{{$timeDiffer}}</div>
                                        @if($checkMoreTime>1)
                                        <div class="take-off">
                                            <img src="dist/img/icon/ICONS-01.png" class="cmb-icon">
                                            MORE TIME
                                        </div>
                                            @endif
                                    </div>
                                    <div class="sear-rate-main2 city-right">
                                        <button class="btn select-now">SELECT NOW</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

@endforeach

                </div>
            </div>
        </div>

    </div>
    </div>
</section>

@endsection
