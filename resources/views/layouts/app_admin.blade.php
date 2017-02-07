<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIPCOFIP') }}</title>

    @include('partials.css')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="theme-red">
        @if (session()->has('flash_notification.message'))
            <div class="alert alert-{{ session('flash_notification.level') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                {!! session('flash_notification.message') !!}
            </div>
        @endif
    {{-- MENU SUPERIOR --}}
    @include('partials.menu_superior')

    {{-- MENU LATERAL --}}
    @include('partials.menu_lateral')


            @yield('content')


    @include('partials.js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript">
        $('#search select').select2({
            allowClear: true,
            placeholder: {
                id: "",
                text: 'Select value'
            }
        });
        $('#search select').change(function () {
            $('#search').submit();
        });
        $.fn.populateSelect = function (values) {
            var options = '';
            $.each(values, function (key, row) {
                options += '<option value="' + row.value + '">' + row.text + '</option>';
            });
            $(this).html(options);
        }
        $('#state_id').change(function () {
            $('#parish_id').empty().change();

            var state_id = $(this).val();

            if (state_id == '') {
                $('#municipality_id').empty().change();
            } else {
                $.getJSON('/municipalities/'+state_id, null, function (values) {
                    $('#municipality_id').populateSelect(values);
                });
            }
        });
        $('#municipality_id').change(function () {
            $('#parish_id').empty().change();

            var municipality_id = $(this).val();

            if (municipality_id == '') {
                $('#parish_id').empty().change();
            } else {
                $.getJSON('/parish/'+municipality_id, null, function (values) {
                    $('#parish_id').populateSelect(values);
                });
            }
        });
        $('#parish_id').change(function () {
            $('#sector_id').empty().change();
            var parish_id = $(this).val();

            if (parish_id == '') {
                $('#sector_id').empty().change();
            } else {
                $.getJSON('/sector/'+parish_id, null, function (values) {
                    $('#sector_id').populateSelect(values);
                });
            }
        });


    </script>
</body>
</html>
