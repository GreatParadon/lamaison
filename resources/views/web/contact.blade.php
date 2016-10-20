@extends('web.main')
@section('content')

    <style>
        .contact_container {
            background-image: url('{{ asset('resources/contact_bg.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            height: 800px;
        }
    </style>
    <div class="contact_container">
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin-top: 50px; margin-bottom: 50px">
                <h1>{{ trans('text.contact') }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="padding-left: 100px; padding-right: 40px">
                <div class="form-group">
                    <label for="name">{{ trans('text.name') }}</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('text.email') }}</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="tel">{{ trans('text.tel') }}</label>
                    <input type="text" class="form-control" id="tel" name="tel" placeholder="">
                </div>
                <div class="form-group">
                    <label for="topic">{{ trans('text.topic') }}</label>
                    <input type="text" class="form-control" id="topic" name="topic" placeholder="">
                </div>
                <div class="form-group">
                    <label for="message">{{ trans('text.contact_desc') }}</label>
                    <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                </div>
                <button type="submit" id="submit_button" class="btn btn-default">{{ trans('text.submit') }}</button>
            </div>
            <div class="col-md-6"
                 style="text-align: center; padding-top: 50px; padding-left: 10px; padding-right: 100px">
                <img src="{{ asset('resources/LOGO.png') }}" style="margin-bottom: 20px">
                <p>
                    บริษัท ปัจจัย 4 พร็อพเพอตี้ จำกัด 12/6 ต.สุเทพ อ.เมือง จ.เชียงใหม่<br>
                    Tel. : 053212323<br>
                    Email : patjai4property@hotmail.com<br>
                    Website : www.lamaisondevalleone.com<br>
                    Facebook : www.facebook.com/La-Maison-De-VALLE-546413978892930/
                </p>
            </div>
        </div>
    </div>

    <script type="application/javascript">
        $("#submit_button").click(function () {
            $.ajax({
                url: '{{ url('store') }}',
                type: 'POST',
                data: {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    tel: $("#tel").val(),
                    topic: $("#topic").val(),
                    message: $("#message").val(),
                    _token: '{{ csrf_token() }}'
                }, success: function () {
                    alert('เราจะติดต่อกลับไปทางอีเมลค่ะ ขอบคุณค่ะ');
                }, error: function () {
                    alert('เราจะติดต่อกลับไปทางอีเมลค่ะ ขอบคุณค่ะ');
                }
            });
            window.location.href = '{{ url('') }}';
        })
    </script>
@stop