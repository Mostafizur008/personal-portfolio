@php
    $setting = DB::table('settings')->first();  
@endphp

<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<title>{{$setting->title}} | {{$setting->name}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="vCard & Resume Template" />
<meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio" />
<meta name="author" content="beshleyua" />

<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<link rel="stylesheet" href="{{asset('frontend/assets/css/css-basic.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/css-layout.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/css-blogs.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/css-ionicons.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/css-magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/css-animate.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/css-owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/css-gradient.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/new-skin-new-skin.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/demos-demo-1-colors.css')}}">

<link rel="shortcut icon" href="images/favicons/favicon.ico">

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125314689-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125314689-11');
</script>
