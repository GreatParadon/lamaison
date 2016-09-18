@extends('web.main')
@section('content')


    <div style="margin-top: 100px; margin-bottom: 100px">
        <div class="row room">
            <div class="col-md-6">
                <h4>{{ trans('text.onebedroom') }}</h4>
                <img src="{{ asset('resources/room/room1.jpg') }}" class="img-circle" alt="Cinque Terre" width="220"
                     height="220">
                <p style="color: #755f25">{{ trans('text.onebedroom_desc') }}
                </p>
                <a href="onebedroom"><h4 style="color: #ceae5b">{{ trans('text.readmore') }}</h4></a>
            </div>
            <div class="col-md-6">
                <h4>{{ trans('text.duplex') }}</h4>
                <img src="{{ asset('resources/room/room2.jpg') }}" class="img-circle" alt="Cinque Terre" width="220"
                     height="220">
                <p style="color: #755f25">{{ trans('text.duplex_desc') }}</p>
                <a href="duplex"><h4 style="color: #ceae5b">{{ trans('text.readmore') }}</h4></a>
            </div>
        </div>

        <div class="row room">
            <div class="col-md-6">
                <h4>{{ trans('text.penthouse') }}</h4>
                <img src="{{ asset('resources/room/room3.jpg') }}" class="img-circle" alt="Cinque Terre" width="220"
                     height="220">
                <p style="color: #755f25">{{ trans('text.penthouse_desc') }}</p>
                <a href="penthouse"><h4 style="color: #ceae5b">{{ trans('text.readmore') }}</h4></a>
            </div>
            <div class="col-md-6">
                <h4>{{ trans('text.studio') }}</h4>
                <img src="{{ asset('resources/room/room4.jpg') }}" class="img-circle" alt="Cinque Terre" width="220"
                     height="220">
                <p style="color: #755f25">{{ trans('text.studio_desc') }}</p>
                <a href="studio"><h4 style="color: #ceae5b">{{ trans('text.readmore') }}</h4></a>
            </div>
        </div>
    </div>
@stop