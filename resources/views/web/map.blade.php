@extends('web.main')
@section('content')

    <style>
        #container {
            background-image: url('{{ asset('resources/contact_bg.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            /*opacity: 0.6;*/
            height: 800px;
        }
    </style>
    <div class="row">
        <div class="col-md-12" style="text-align: center; margin-top: 50px; margin-bottom: 50px">
            <h1>{{ trans('text.map1') }}</h1>
        </div>
    </div>
    <div class="row" style="background-color: rgba(255,255,255,0.2); ">
        <div class="col-md-6" style="padding-left: 0px; padding-right: 40px">
            <img src="{{ asset('resources/map.png') }}">
        </div>
        <div class="col-md-6"
             style="text-align: center; padding-top: 150px; padding-left: 10px; padding-right: 20px;">
            <img src="{{ asset('resources/LOGO.png') }}" style="margin-bottom: 20px">
            <p>
                {{ trans('text.map_desc') }}
            </p>
        </div>
    </div>

@stop