@php
    $setting = DB::table('settings')->first();  
@endphp

<base href="../">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="./images/favicon.png">
<!-- Page Title  -->
<title>{{$setting->title1}} | {{$setting->name1}}</title>
<!-- StyleSheets  -->
<link rel="stylesheet" href="{{asset('backend/assets/css/dashlite.css?ver=3.0.0')}}">
<link id="skin-default" rel="stylesheet" href="{{asset('backend/assets/css/theme.css?ver=3.0.0')}}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>