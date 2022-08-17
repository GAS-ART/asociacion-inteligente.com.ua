@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))


@section('content')
<section class="poster-baner _baner">
   <div class="_baner__container">
      <div class="_baner__body">
         <h1 class="_baner__title">@lang('poster.title')</h1>
         <p class="_baner__text">@lang('poster.text')</p>
      </div>
   </div>
</section>
<section class="poster">
   <div class="poster__container">
      <div class="poster__body">
         <div class="poster__item item-poster">
            <a class="item-poster__img" href="{{ route('poster.charity_dinner.lang', ['locale' => __('language.current_lang')]) }}"><img src="{{asset('img/poster/1.jpg')}}" alt="Charity Dinner"></a>
            <a class="item-poster__link" href="{{ route('poster.charity_dinner.lang', ['locale' => __('language.current_lang')]) }}">Купить билет</a>
         </div>
         <div class="poster__item item-poster">
            <a class="item-poster__img" href="{{ route('poster.concert_ponomariov_and_dzidzio.lang', ['locale' => __('language.current_lang')]) }}"><img src="{{asset('img/poster/concert.jpg')}}" alt="ponamarev"></a>
            <a class="item-poster__link" href="{{ route('poster.concert_ponomariov_and_dzidzio.lang', ['locale' => __('language.current_lang')]) }}">Купить билет</a>
         </div>
      </div>
   </div>
</section>
@endsection