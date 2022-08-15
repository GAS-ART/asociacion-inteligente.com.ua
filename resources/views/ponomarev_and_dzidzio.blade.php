@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))


@section('content')
<section class="concert">
   <div class="concert__container">
      <div class="concert__body">
         <div class="concert__item item-concert-img">
            <div class="item-concert-img__img"><img src="{{asset('img/poster/1.jpg')}}" alt="ponamarev"></div>
         </div>
         <div class="concert__item item-concert-description">
            <h1 class="item-concert-description__title">@lang('ponomariov.title')</h1>
            <div class="item-concert-description__text">@lang('ponomariov.text')</div>
            <div class="item-concert-description__time">@lang('ponomariov.time')</div>
            <div class="item-concert-description__place">@lang('ponomariov.place')</div>
            <div class="item-concert-description__price">@lang('ponomariov.price')</div>
            <div class="item-concert-description__ways-pay concert-ways-pay">
               <div class="concert-ways-pay__title">@lang('ponomariov.pay_method')</div>
               <div class="concert-ways-pay__way-pay">
                  <div data-link="https://buy.stripe.com/dR629sgHvatI3qUeUX"
                     class="concert-ways-pay__credit-card credit-card _payment-method">
                     <input checked type="radio" value="creditCard" name="radioBtn">
                     <div class="credit-card__img"><img src="{{asset('img/icons/card.jpg')}}" alt=""></div>
                     <div class="credit-card__text">Credit Card</div>
                  </div>
                  <div data-link="#" class="concert-ways-pay__paypal paypal _payment-method">
                     <input type="radio" value="paypal" name="radioBtn">
                     <div class="paypal__img"><img src="{{asset('img/icons/paypal.jpg')}}" alt=""></div>
                     <div class="paypal__text">PayPal</div>
                  </div>
               </div>
            </div>
            <div class="item-concert-description__link"><a target="_blank"
                  href="https://buy.stripe.com/dR629sgHvatI3qUeUX">@lang('ponomariov.buy_link')</a></div>
         </div>
      </div>
   </div>
</section>
@endsection