@extends('web.main')
@section('content')

    <style>

        #owl-demo .item img {
            display: block;
            width: 100%;
        }

    </style>

    <div id="owl-demo" class="owl-carousel owl-theme">
        @foreach(['header1','header2','header3'] as $r)
            <div class="item"><img src="{{ asset('resources/banner').'/'.$r.'.png' }}"></div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-4">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLa-Maison-De-VALLE-546413978892930%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=977149125690271"
                    style="width: 100%; height: 410px;border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowTransparency="true"></iframe>
        </div>
        <div class="col-md-8">
            {{--<iframe style="width: 100%; height: 410px;" src="https://www.youtube.com/embed/P9skCMXnu4E" frameborder="0"--}}
                    {{--allowfullscreen></iframe>--}}
            {{--<video style="width: 100%; height: 100%" controls>--}}
            {{--<source src="{{ asset('resources/vdo.mp4') }}" type="video/mp4">--}}
            {{--</video>--}}
        </div>
    </div>
    <div class="row room">
        <div class="col-md-3">
            <h4>{{ trans('text.onebedroom') }}</h4>
            <img src="{{ asset('resources/room/room1.jpg') }}" class="img-circle" width="220" height="220">
            <p style="color: #755f25">{{ trans('text.onebedroom_desc') }}
            </p>
            <a href="onebedroom"><h4 style="color: #ceae5b">{{ trans('text.readmore') }}</h4></a>
        </div>
        <div class="col-md-3">
            <h4>{{ trans('text.duplex') }}</h4>
            <img src="{{ asset('resources/room/room2.jpg') }}" class="img-circle" width="220" height="220">
            <p style="color: #755f25">{{ trans('text.duplex_desc') }}</p>
            <a href="duplex"><h4 style="color: #ceae5b">{{ trans('text.readmore') }}</h4></a>
        </div>
        <div class="col-md-3">
            <h4>{{ trans('text.penthouse') }}</h4>
            <img src="{{ asset('resources/room/room3.jpg') }}" class="img-circle" width="220" height="220">
            <p style="color: #755f25">{{ trans('text.penthouse_desc') }}</p>
            <a href="penthouse"><h4 style="color: #ceae5b">{{ trans('text.readmore') }}</h4></a>
        </div>
        <div class="col-md-3">
            <h4>{{ trans('text.studio') }}</h4>
            <img src="{{ asset('resources/room/room4.jpg') }}" class="img-circle" width="220" height="220">
            <p style="color: #755f25">{{ trans('text.studio_desc') }}</p>
            <a href="studio"><h4 style="color: #ceae5b">{{ trans('text.readmore') }}</h4></a>
        </div>
    </div>

    <script type="application/javascript">
        $(document).ready(function () {

            $("#owl-demo").owlCarousel({

                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });

        });
    </script>
@stop