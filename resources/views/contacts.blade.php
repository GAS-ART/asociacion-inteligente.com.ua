@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))


@section('content')
<section class="contacts-baner">
   <div class="contacts-baner__container">
      <div class="contacts-baner__body">
         <h1 class="contacts-baner__title">@lang('contacts.title')</h1>
         <p class="contacts-baner__text">@lang('contacts.text')</p>
      </div>
   </div>
</section>
<section class="question">
   <div class="question__container">
      <div class="question__body">
         <div class="footer__contacts contacts-footer footer__row">
            <div class="contacts-footer__address">
               @lang('footer.contacts.address')
            </div>
            <div class="contacts-footer__phone">
               <div class="contacts-footer__phone-item">
                  <a href="tel:%2B380698560864">@lang('footer.contacts.phone')</a>
                  <a href="tel:%2B380698560864">@lang('footer.contacts.phone_1')</a>
                  @lang('footer.contacts.phone_2')</a>
                  <div class="contacts-footer__email">
                     @lang('footer.contacts.email')</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer__donate donate-footer footer__row">
            <div class="donate-footer__title">
               @lang('footer.donate.title')
            </div>
            <ul class="donate-footer__list">
               <li class="donate-footer__item">
                  <a class="donate-footer__link" target="_blank"
                     href="https://www.sandbox.paypal.com/donate/?hosted_button_id=E62LK6H8NWVM8">
                     <div class="donate-footer__img">
                        <img src="{{ asset('img/icons/paypal.jpg') }}" alt="">
                     </div>
                     <div class="donate-footer__text">@lang('footer.donate.paypal')</div>
                  </a>
               </li>
               <!--<li class="donate-footer__item">
                  <div class="donate-footer__img">
                     <img src="{{ asset('img/icons/bitcoin.jpg') }}" alt="">
                  </div>
                  <a href="#" class="donate-footer__link">@lang('footer.donate.crypto')</a>
               </li> -->
               <li class="donate-footer__item">
                  <a target="_blank" class="donate-footer__link" href="https://buy.stripe.com/5kAcO63UJdFUf9C5kk">
                     <div class="donate-footer__img">
                        <img src="{{ asset('img/icons/card.jpg') }}" alt="">
                     </div>
                     <div class="donate-footer__text">@lang('footer.donate.card')</div>
                  </a>
               </li>
            </ul>
         </div>
         <div class="question__form form-question">
            <div class="form-question__title">
               @lang('contacts.question')
            </div>
            <form id="questionForm" name="question-form" method="POST"
               class="form-question__form @lang('language.current_lang')" action="#" autocomplete="on">
               @csrf
               <div class="form-question__contacts">
                  <div class="question-form__item">
                     <input class="question-form__text-field" type="text" name="name" placeholder="@lang('form.name')">
                     <p class="name-error error"></p>
                  </div>
                  <div class="question-form__item">
                     <input class="question-form__phone" type="text" name="phone" placeholder="@lang('form.phone')">
                     <p class="phone-error error"></p>
                  </div>
               </div>
               <div class="form-question__item">
                  <textarea class="form-question__text" name="text" placeholder="@lang('form.text')"></textarea>
               </div>
               <div class="popup__button-form">
                  <button class="submit" type="submit">@lang('form.qustion.btn')</button>
               </div>
            </form>
         </div>
      </div>
   </div>

</section>
<section class="map">
   <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2966.4453099843804!2d2.8093533156837327!3d41.96924796768376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x68f4e5820387210!2zNDHCsDU4JzA5LjMiTiAywrA0OCc0MS42IkU!5e0!3m2!1sru!2sua!4v1660313040061!5m2!1sru!2sua"
      style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection