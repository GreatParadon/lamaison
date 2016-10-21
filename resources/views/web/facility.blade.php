@extends('web.main')
@section('content')

    <style>
        #owl-demo {
            background-color: #161616;
        }

        #owl-demo .item {
            margin: 10px;
        }

        #owl-demo .item img {
            display: block;
            width: 100%;
            height: auto;
        }

        .facility_container {
            background-image: url('{{ asset('resources/contact_bg.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            /*opacity: 0.6;*/
            /*height: 800px;*/
        }
    </style>

    <div class="facility_container">
        <div class="row">
            <div class="col-md-12" style="text-align: center; padding: 100px">
                <img src="@if(trans('text.facility_img') == 1) {{ asset('resources/facility_th.png') }} @else {{ asset('resources/facility_en.jpg') }} @endif" style="width: 100%; opacity: 0.8">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="{{ asset('resources/gallery/lamaison/4.png') }}"></div>
                    <div class="item"><img src="{{ asset('resources/gallery/duplex/1.png') }}"></div>
                    <div class="item"><img src="{{ asset('resources/gallery/penthouse/5.png') }}"></div>
                </div>
            </div>
        </div>
    </div>

    <script type="application/javascript">
        $(document).ready(function () {

            $("#owl-demo").owlCarousel({
                items: 3
            });

        });
    </script>
@stop