<!DOCTYPE html>
<html lang="@lang('language.current_lang')">
@include('inc.head')
<body id="body">
   <div class="wrapper">
      @include('inc.header')
         <main class="page">
            @yield('content')
         </main>
      @include('inc.footer')
      @include('inc.popup')
      @yield('popup_video')
   </div>
</body>

</html>