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
<section class="concert">
   <div class="concert__container">
      <div class="concert__body">
         <div class="concert__item item-concert">
            <a class="item-concert__img" href="#"><img src="{{asset('img/poster/1.jpg')}}" alt="ponamarev"></a>
            <a class="item-concert__link" href="#">Купить билет</a>
         </div>
         <div class="concert__item item-concert">
            <!--  <a class="item-concert__img" href="#"></a>
            <a class="item-concert__link" href="#"></a>-->
         </div>
      </div>
   </div>
</section>
@endsection