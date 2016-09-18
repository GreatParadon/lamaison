<div class="row">
    <div class="col-md-12" style="text-align: center; margin-top: 50px; margin-bottom: 50px">
        <h1 class="text-uppercase">{{ trans('text.masterplan') }}</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-10" style="padding-left:50px; padding-right: 0px;">
        <img src="{{ asset('resources/masterplan/FLOOR 1.jpg') }}" id="masterplan_img"
             style="padding:40px; width: 100%; background-color: rgba(255, 255, 255, 1);">
    </div>
    <div class="col-md-2" style="padding-left: 0px; padding-right: 50px">
        <ul class="list-group" style="background-color: #ffffff; margin-top: 30px">
            @foreach(['FLOOR 1', 'FLOOR 2', 'FLOOR 3', 'FLOOR 4', 'FLOOR 5', 'FLOOR 6', 'FLOOR 7', 'FLOOR 8'] as $r)
                <button type="button" class="list-group-item floor"
                        onclick="changeFloor('{{ $r or '' }}')" id="{{ str_replace(' ', '', $r) }}"
                        style="background-color: @if($r == 'FLOOR 1') #acacac @else #e4e4e4 @endif;
                                border-color: @if($r == 'FLOOR 1') #acacac @else #e4e4e4 @endif;
                                ">{{ $r or '' }}</button>
            @endforeach
        </ul>
    </div>
</div>

<script type="application/javascript">

    function changeFloor(id) {
        $("#masterplan_img").prop('src', '{{ asset('resources/masterplan') }}/' + id + '.jpg');
        $(".floor").prop('style', 'background-color: #e4e4e4;');
        $("#" + id.replace(" ", "")).prop('style', 'background-color: #acacac; border-color: #acacac;');
        console.log(id.replace(" ", ""));
    }

</script>