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
           <!-- <a href="#" class="baner__donate-button">
               <img src="{{ asset('img/icons/bitcoin.jpg') }}" alt="">
               <span>@lang('home.baner.crypto')</span>
            </a> -->
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
<section class="help">
   <div class="help__container">
      <h2 class="help__title">@lang('home.help.title')</h2>
      <div class="help__body">
         <div class="help__item item-help">
            <div class="item-help__img">
               <img src="{{ asset('img/home/help/1.jpg') }}" alt="">
            </div>
            <h3 class="item-help__title">@lang('home.help.item_1')</h3>
            <a href="#" class="item-help__link">@lang('home.help.link')</a>
         </div>

         <div class="help__item item-help">
            <div class="item-help__img">
               <img src="{{ asset('img/home/help/2.jpg') }}" alt="">
            </div>
            <h3 class="item-help__title">@lang('home.help.item_2')</h3>
            <a href="#" class="item-help__link">@lang('home.help.link')</a>
         </div>

         <div class="help__item item-help">
            <div class="item-help__img">
               <img src="{{ asset('img/home/help/3.jpg') }}" alt="">
            </div>
            <h3 class="item-help__title">@lang('home.help.item_3')</h3>
            <a href="#" class="item-help__link">@lang('home.help.link')</a>
         </div>

         <div class="help__item item-help">
            <div class="item-help__img">
               <img src="{{ asset('img/home/help/4.jpg') }}" alt="">
            </div>
            <h3 class="item-help__title">@lang('home.help.item_4')</h3>
            <a href="#" class="item-help__link">@lang('home.help.link')</a>
         </div>

         <div class="help__item item-help">
            <div class="item-help__img">
               <img src="{{ asset('img/home/help/5.jpg') }}" alt="">
            </div>
            <h3 class="item-help__title">@lang('home.help.item_5')</h3>
            <a href="#" class="item-help__link">@lang('home.help.link')</a>
         </div>

         <div class="help__item item-help">
            <div class="item-help__img">
               <img src="{{ asset('img/home/help/6.jpg') }}" alt="">
            </div>
            <h3 class="item-help__title">@lang('home.help.item_6')</h3>
            <a href="#" class="item-help__link">@lang('home.help.link')</a>
         </div>
      </div>
   </div>
</section>
<section class="questions">
   <div class="questions__container">
      <div class="questions__body">
         <div class="questions__text text-questions">
            <h2 class="text-questions__title">@lang('home.questions.title')</h2>
            <div class="text-questions__text">
               @lang('home.questions.text')
            </div>
         </div>
         <ul class="questions__list list-questions">
            <li class="list-questions__item">
               <div class="list-questions__item-row"><span>@lang('home.questions.question_1')</span><span
                     class="list-questions__item-btn"></span></div>
               <div class="list-questions__item-answer">@lang('home.questions.answer_1')</div>
            </li>
            <li class="list-questions__item">
               <div class="list-questions__item-row"><span>@lang('home.questions.question_2')</span><span
                     class="list-questions__item-btn"></span></div>
               <div class="list-questions__item-answer">@lang('home.questions.answer_2')</div>
            </li>
            <li class="list-questions__item">
               <div class="list-questions__item-row"><span>@lang('home.questions.question_3')</span><span
                     class="list-questions__item-btn"></span></div>
               <div class="list-questions__item-answer">@lang('home.questions.answer_3')</div>
            </li>
            <li class="list-questions__item">
               <div class="list-questions__item-row"><span>@lang('home.questions.question_4')</span><span
                     class="list-questions__item-btn"></span></div>
               <div class="list-questions__item-answer">@lang('home.questions.answer_4')</div>
            </li>
            <li class="list-questions__item">
               <div class="list-questions__item-row"><span>@lang('home.questions.question_5')</span><span
                     class="list-questions__item-btn"></span></div>
               <div class="list-questions__item-answer">@lang('home.questions.answer_5')</div>
            </li>
         </ul>
      </div>
   </div>
</section>
<section class="charity">
   <div class="charity__container">
      <div class="charity__body">
         <h2 class="charity__title">@lang('home.charity.title')</h2>
         <div class="charity__items">
            <a href="#" data-popup-id="lead" class="charity__item item-charity link-on-popup">
               <div class="item-charity__icon-body">
                  <div class="item-charity__icon _icon-finance"></div>
                  <div class="item-charity__icon-block"></div>
               </div>

               <h3 class="item-charity__title">@lang('home.charity.finance')</h3>
            </a>

            <a href="#" data-popup-id="lead" class="charity__item item-charity link-on-popup">
               <div class="item-charity__icon-body">
                  <div class="item-charity__icon _icon-medicines"></div>
                  <div class="item-charity__icon-block"></div>
               </div>
               <h3 class="item-charity__title">@lang('home.charity.medical')</h3>
            </a>

            <a href="#" data-popup-id="lead" class="charity__item item-charity link-on-popup">
               <div class="item-charity__icon-body">
                  <div class="item-charity__icon _icon-vegetables"></div>
                  <div class="item-charity__icon-block"></div>
               </div>
               <h3 class="item-charity__title">@lang('home.charity.food')</h3>
            </a>

            <a href="#" data-popup-id="lead" class="charity__item item-charity link-on-popup">
               <div class="item-charity__icon-body">
                  <div class="item-charity__icon _icon-hygiene"></div>
                  <div class="item-charity__icon-block"></div>
               </div>
               <h3 class="item-charity__title">@lang('home.charity.hygiene')</h3>
            </a>

            <a href="#" data-popup-id="lead" class="charity__item item-charity link-on-popup">
               <div class="item-charity__icon-body">
                  <div class="item-charity__icon _icon-clothes"></div>
                  <div class="item-charity__icon-block"></div>
               </div>
               <h3 class="item-charity__title">@lang('home.charity.clothes')</h3>
            </a>

            <a href="#" data-popup-id="lead" class="charity__item item-charity link-on-popup">
               <div class="item-charity__icon-body">
                  <div class="item-charity__icon _icon-car"></div>
                  <div class="item-charity__icon-block"></div>
               </div>
               <h3 class="item-charity__title">@lang('home.charity.transport')</h3>
            </a>

            <a href="#" data-popup-id="lead" class="charity__item item-charity link-on-popup">
               <div class="item-charity__icon-body">
                  <div class="item-charity__icon _icon-home"></div>
                  <div class="item-charity__icon-block"></div>
               </div>
               <h3 class="item-charity__title">@lang('home.charity.housing')</h3>
            </a>

            <a href="#" data-popup-id="lead" class="charity__item item-charity link-on-popup">
               <div class="item-charity__icon-body">
                  <div class="item-charity__icon _icon-another"></div>
                  <div class="item-charity__icon-block"></div>
               </div>
               <h3 class="item-charity__title">@lang('home.charity.other')</h3>
            </a>

         </div>
      </div>
   </div>
</section>
@endsection