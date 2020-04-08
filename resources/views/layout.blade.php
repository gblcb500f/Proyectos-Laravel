<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/date/bootstrap-datepicker3.standalone.min.css">
    <link rel="stylesheet" href="/css/dropzone.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href=" https://code.jquery.com/jquery-3.4.1.min.js " rel=" stylesheet " />
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

    
   <style>
        .active a{
    color:rgb(27, 3, 3);
    text-decoration: none;
}
    </style>
</head>
<body>
    @include('partials.nav')
    {{-- @include('partials.sesssion-status') --}}
    <div class="bg-secondary">
    @yield('content')
</div>
<script src="/js/dropzone.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="/js/date/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        $('#editorial').select2({
        ajax: {
            url: "{{ route('options') }}",
            type:'POST',
            dataType:'json'
        }
        });
    $('#provincia').select2();

   $('.datepicker').datepicker({
       timepicker:false,
       datepicker:true,
    format: 'mm/dd/yyyy',
    startDate: '-3d',
    weeks:true
});
});
</script>
</body>
</html>