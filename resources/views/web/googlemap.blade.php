@extends('web.main')
@section('content')

    <style>
        .google_container {
            background-image: url('{{ asset('resources/contact_bg.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            /*opacity: 0.6;*/
            height: 800px;
        }
    </style>
    <div class="google_container">
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin-top: 50px; margin-bottom: 50px">
                <h1 class="text-uppercase">{{ trans('text.google') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1710.4237195432222!2d98.95911586572532!3d18.80163620634049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30da300544526549%3A0xf358054a6f8c15a7!2sThanon+Mahidol%2C+Tambon+Pa+Daet%2C+Amphoe+Mueang+Chiang+Mai%2C+Chang+Wat+Chiang+Mai!5e0!3m2!1sen!2sth!4v1472372307175"
                        frameborder="0" style="width: 100%; height:600px; border:0; padding: 20px"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>

@stop