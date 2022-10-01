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

  @if(Request::is('ru/about-us', 'es/about-us'))
  <!-- lightgallery -->
  <link type="text/css" rel="stylesheet" href="{{asset('css/lightgallery.css')}}" />
  <!-- lightgallery plugins -->
  <link type="text/css" rel="stylesheet" href="{{asset('css/lg-zoom.css')}}"/>
  <link type="text/css" rel="stylesheet" href="{{asset('css/lg-thumbnail.css')}}" />
  @endif

   <link rel="stylesheet" href="{{asset('css/style.css') . '?_v=21' }}"> 

   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> -->
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   @if(Request::is('ru/about-us', 'es/about-us'))
   <script src="{{asset('js/lightgallery.min.js')}}"></script>
   @endif

   <script src="{{asset('js/app.js') . '?_v=8' }}"></script>

   <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2296708763813341');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2296708763813341&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>