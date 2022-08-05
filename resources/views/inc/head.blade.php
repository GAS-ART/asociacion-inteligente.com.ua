@section('head')
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png')}} ">

   <title>@yield('title')</title>
   <meta name="description" content="@yield('description')">

   <meta property="og:url" content="@yield('ogUrl')" />
   <meta property="og:type" content="website" />
   <meta property="og:title" content="@yield('ogTitle')" />
   <meta property="og:description" content="@yield('ogDescription')" />
   <meta property="og:site_name" content="artgas.pro" />
   <meta property="og:image" content="" />

 <!--  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" /> -->
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> 

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Montserrat&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="{{asset('css/style.css') . '?_v=8' }}"> 

   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <script src="{{asset('js/app.js') . '?_v=1' }}"></script>
</head>