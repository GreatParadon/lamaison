@extends('web.main')
@section('content')

    <style>
        #container {
            background-image: url('{{ asset('resources/contact_bg.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            /*opacity: 0.6;*/
            /*height: 800px;*/
        }
    </style>

    <div class="row">
        <div class="col-md-12" style="text-align: center; padding: 100px">
            <img src="@if(trans('text.desc_img') == '1') {{ asset('resources/desc_th.png') }} @else {{ asset('resources/desc_en.jpg') }} @endif"
                 style="width: 100%; opacity: 0.8">
        </div>
    </div>
@stop