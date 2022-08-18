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
            <div class="item-concert-img__img"><img src="{{asset('img/poster/concert.jpg')}}" alt="ponamarev"></div>
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
                  <div data-link="https://buy.stripe.com/8wM5lEgHvgS68Le9AE" data-pay="stripe"
                     class="concert-ways-pay__credit-card credit-card _payment-method">
                     <input checked type="radio" value="creditCard" name="radioBtn">
                     <div class="credit-card__img"><img src="{{asset('img/icons/card.jpg')}}" alt=""></div>
                     <div class="credit-card__text">Credit Card</div>
                  </div>
                  <div data-link="#" data-pay="paypal" class="concert-ways-pay__paypal paypal _payment-method">
                     <input type="radio" value="paypal" name="radioBtn">
                     <div class="paypal__img"><img src="{{asset('img/icons/paypal.jpg')}}" alt=""></div>
                     <div class="paypal__text">PayPal</div>
                  </div>
               </div>
            </div>
            <div class="item-concert-description__link"><a target="_blank"
                  href="https://buy.stripe.com/8wM5lEgHvgS68Le9AE">@lang('ponomariov.buy_link')
                  <form class="paypal-btn" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                     <input type="hidden" name="cmd" value="_s-xclick">
                     <input type="hidden" name="hosted_button_id" value="CPCHZ7LNN8TW8">
                     <input class="paypal-img" type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                     <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form>
               </a></div>
         </div>
      </div>
   </div>
</section>
@endsection