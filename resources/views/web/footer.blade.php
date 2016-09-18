<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer_1">
                <h4>LA MAISON DE VALLE</h4>
                <p>{{ trans('text.footer_desc') }}</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('resources/LOGO.png') }}" style="border: 40px solid #1b1b1b; width: 230px;">
            </div>
            <div class="col-md-4 footer_3">
                <a href="#">
                    <img src="{{ asset('resources/footer/icon1.png') }}">
                </a>
                <a href="#">
                    <img src="{{ asset('resources/footer/icon3.png') }}">
                </a>
                <a href="#">
                    <img src="{{ asset('resources/footer/icon2.png') }}">
                </a>
                <p style="margin-top: 20px">{{ trans('text.footer_address') }}</p>
            </div>
        </div>
    </div>
</footer>