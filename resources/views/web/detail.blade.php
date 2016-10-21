@extends('web.main')
@section('content')

    <style>
        .desc_container {
            background-image: url('{{ asset('resources/contact_bg.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            /*opacity: 0.6;*/
            /*height: 800px;*/
        }
    </style>

    <div class="desc_container">
        <div class="row">
            <div class="col-md-12" style="text-align: center; padding: 100px">
                <img src="@if(trans('text.detail_img') == 1) {{ asset('resources/detail_th.png') }} @else {{ asset('resources/detail_en.jpg') }} @endif" style="width: 100%; opacity: 0.8">
            </div>
        </div>
    </div>
@stop