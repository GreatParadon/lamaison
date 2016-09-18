@extends('web.main')
@section('content')

    <style>

        .floor:focus {
            outline: 0;
        }

        .floor {
            margin-bottom: 5px;
        }

        .list-group {
            border: 0px solid;
            border-radius: 0em;
        }

        .list-group-item:first-child {
            border-radius: 0px;
        }

        #owl-demo .item img {
            display: block;
            width: 100%;
        }

    </style>

    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="{{ asset('resources/banner/1.jpg') }}"></div>
    </div>
    <div class="row">
        <div class="col-md-12" style="text-align: center; margin-top: 50px; margin-bottom: 50px">
            <h1>{{ trans('text.onebedroom') }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10" style="padding-left:50px; padding-right: 0px;">
            <img src="{{ asset('resources/roomplan/TYPE B.jpg') }}" id="roomplan_img"
                 style="padding:0px; width: 100%; background-color: rgba(255, 255, 255, 1);">
        </div>
        <div class="col-md-2" style="padding-left: 0px; padding-right: 50px">
            <ul class="list-group" style="background-color: #ffffff; margin-top: 0px">
                @foreach([['TYPE B','51.48'], ['TYPE C','41.62'], ['TYPE C2','41.62'], ['TYPE D','42.68'], ['TYPE E','42.34'], ['TYPE F','41.66'], ['TYPE F2','42.04'], ['TYPE G','43.62'], ['TYPE H','44.01']] as $r)
                    <button type="button" class="list-group-item floor"
                            onclick="changeRoom('{{ $r[0] or '' }}')" id="{{ str_replace(' ', '', $r[0]) }}"
                            style="background-color: @if($r[0] == 'TYPE B') #acacac @else #e4e4e4 @endif;
                                    border-color: @if($r[0] == 'TYPE B') #acacac @else #e4e4e4 @endif;
                                    ">{{ $r[0] or '' }}<br>{{ trans('text.area', ['area' => $r[1]]) }}</button>
                @endforeach
            </ul>
        </div>
    </div>

    @include('web.floorplan')


    <script type="application/javascript">

        function changeRoom(id) {
            $("#roomplan_img").prop('src', '{{ asset('resources/roomplan') }}/' + id + '.jpg');
            $(".floor").prop('style', 'background-color: #e4e4e4;');
            $("#" + id.replace(" ", "")).prop('style', 'background-color: #acacac; border-color: #acacac;');
            console.log(id.replace(" ", ""));
        }

        $(document).ready(function () {

            $("#owl-demo").owlCarousel({

//            navigation: true, // Show next and prev buttons
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

            });

        });
    </script>

@stop