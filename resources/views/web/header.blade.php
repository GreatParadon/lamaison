<style>
    .lang {
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .lang p a {
        color: #ceae5b;

    }

    .lang p a:hover {
        color: #ceae5b;

    }
</style>
<nav class="navbar navbar-inverse">
    <div>
        <img src="{{ asset('resources/LOGO.png') }}" style="border: 40px solid #1b1b1b; width: 230px">
        <div class="lang">
            <p><a href="#" onclick="changeLang('th')">ไทย</a> | <a href="#" onclick="changeLang('en')">English</a></p>
        </div>
    </div>
    {{--<div class="container">--}}
    <ul class="nav nav-pills nav-justified">
        <li><a href="/">{{ trans('text.home') }}</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">{{ trans('text.concept') }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="desc">{{ trans('text.desc') }}</a></li>
                <li><a href="detail">{{ trans('text.detail') }}</a></li>
                <li><a href="unitplan">{{ trans('text.unitplan') }}</a></li>
            </ul>
        </li>
        <li><a href="masterplan">{{ trans('text.masterplan') }}</a></li>
        <li><a href="facility">{{ trans('text.facility') }}</a></li>
        <li><a href="gallery">{{ trans('text.gallery') }}</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">{{ trans('text.map1') }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="map">{{ trans('text.map2') }}</a></li>
                <li><a href="googlemap">{{ trans('text.google') }}</a></li>
            </ul>
        </li>
        <li><a href="contact">{{ trans('text.contact') }}</a></li>
    </ul>
    {{--</div><!--/.nav-collapse -->--}}
</nav>

<script type="application/javascript">
    function changeLang(lang) {
        $.ajax({
                    url: '{{ url('lang') }}/' + lang,
                    dataType: 'GET',
                    success: function () {
                        location.reload();
                    }, error: function () {
                        location.reload();
                    }
                }
        )
    }
</script>