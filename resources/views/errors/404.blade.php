@if(Str::contains(url()->current(), '/ua'))
{{app()->setLocale('ua')}}
@endif
@if(Str::contains(url()->current(), '/en'))
{{app()->setLocale('en')}}
@endif
@if(Str::contains(url()->current(), '/ru'))
{{app()->setLocale('ru')}}
@endif
@if(!Str::contains(url()->current(), ['/ua', '/en' ,'/ru']))
<script>window.location = "<?php echo Str::of(url()->current())->substrReplace('/ua/',22,0) ?>";</script> <!-- проверить нужна ли "/" перед ua -->
{{app()->setLocale('ua')}}
@endif
@extends('layout')
@section('title', __('404.tittle'))
@section('description', __('404.text'))
@section('ogTitle', __('404.text'))
@section('ogDescription', __('404.tittle'))
@section('ogUrl', __(url()->current()))


@section('content')
<section class="page-404">
   <div class="page-404__container">
      <div class="page-404__body">
         <h1 class="page-404__tittle">@lang('404.tittle')</h1>
         <div class="page-404__text">
            <p>@lang('404.text')</p>
         </div>
         <div class="page-404__button">
            <a href="{{ route('home.lang', ['locale' => __('language.current_lang')]) }}" class="button button-404">@lang('404.link')</a>
         </div>
      </div>
   </div>
</section>
@endsection