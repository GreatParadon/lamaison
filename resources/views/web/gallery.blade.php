@extends('web.main')
@section('content')

    <style>
        .row {
            margin-bottom: 20px;
        }
    </style>
    <div class="row">
        <div class="col-md-12" style="text-align: center; margin-top: 50px; margin-bottom: 30px">
            <h3 class="text-uppercase">{{ trans('text.gallery') }}</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4>LA MAISON DE VALLE</h4>
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/lamaison/1.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/lamaison/2.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/lamaison/3.png') }}">
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/lamaison/4.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/lamaison/5.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/lamaison/6.png') }}">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4 class="text-uppercase">{{ trans('text.onebedroom') }}</h4>
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/1bedroom/1.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/1bedroom/2.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/1bedroom/3.png') }}">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4 class="text-uppercase">{{ trans('text.duplex') }}</h4>
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/duplex/1.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/duplex/2.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/duplex/3.png') }}">
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/duplex/4.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/duplex/5.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/duplex/6.png') }}">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4 class="text-uppercase">{{ trans('text.penthouse') }}</h4>
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/penthouse/1.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/penthouse/2.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/penthouse/3.png') }}">
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/penthouse/4.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/penthouse/5.png') }}">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/penthouse/6.png') }}">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h4 class="text-uppercase">{{ trans('text.studio') }}</h4>
        </div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-md-4">
            <img src="{{ asset('resources/gallery/studio/1.png') }}">
        </div>
    </div>


@stop