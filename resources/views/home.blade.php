@extends('layout')
@section('title', __('tittles.home.title'))
@section('description', __('tittles.home.description'))
@section('ogTitle', __('tittles.home.ogTitle'))
@section('ogDescription', __('tittles.home.ogDescription'))
@section('ogUrl', __('tittles.home.ogUrl'))


@section('content')
<section class="baner">
   <div class="baner__container">
      <div class="baner__body">
         <h1 class="baner__title">@lang('home.baner.title')</h1>
         <div class="baner__donate">
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=ZLZQZQZQZQZQS"
               class="baner__donate-button">
               <img src="{{ asset('img/icons/paypal.jpg') }}" alt="">
               <span>@lang('home.baner.paypal')</span>
            </a>
            <a href="#" class="baner__donate-button">
               <img src="{{ asset('img/icons/bitcoin.jpg') }}" alt="">
               <span>@lang('home.baner.crypto')</span>
            </a>
            <a href="#" class="baner__donate-button">
               <img src="{{ asset('img/icons/card.jpg') }}" alt="">
               <span>@lang('home.baner.card')</span>
            </a>
         </div>
      </div>
   </div>
</section>
<section class="who">
   <div class="who__container">
      <div class="who__body">
         <h2 class="who__title">@lang('home.who.title')</h2>
         <div class="who__text">@lang('home.who.text')</div>
      </div>
   </div>
</section>
@endsection