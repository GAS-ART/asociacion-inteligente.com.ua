@section('popup')
<div id="lead" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup"><span></span><span></span></a>
         <div class="popup__row">
            <div class="popup__load">
               <img src="{{asset('img/icons/load.gif')}}" alt="">
            </div>
            <div class="popup__form">
               <div class="popup__title">
                  <h4>@lang('form.tittle')</h4>
                  <p>@lang('form.title_text')</p>
               </div>
               <div class="popup__text">
                  <form class="form @lang('language.current_lang')" id="bookingform" name="popupform" method="POST"
                     enctype="multipart/form-data" action="#" autocomplete="on">
                     @csrf
                     <div class="contacts-form__item data popup-data">
                        <input class="data__text-field" type="text" name="name" placeholder="@lang('form.name')">
                        <p class="name-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-phone">
                        <input class="phone" type="text" name="phone" placeholder="@lang('form.phone')">
                        <p class="phone-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-service">
                        <select class="select-form" name="service">
                           <option value=""></option>
                           <option value="finance">@lang('home.charity.finance')</option>
                           <option value="medical">@lang('home.charity.medical')</option>
                           <option value="food">@lang('home.charity.food')</option>
                           <option value="hygiene">@lang('home.charity.hygiene')</option>
                           <option value="clothes">@lang('home.charity.clothes')</option>
                           <option value="transport">@lang('home.charity.transport')</option>
                           <option value="housing">@lang('home.charity.housing')</option>
                           <option value="other">@lang('home.charity.other')</option>
                        </select>
                        <p class="service-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-text-area">
                        <textarea name="text" placeholder="@lang('form.text')"></textarea>
                     </div>
                     <div class="popup__button-form">
                        <button class="submit" type="submit">@lang('form.button')</button>
                     </div>
                  </form>
               </div>
               <div class="confirm">
                  <p>@lang('form.success')</p>
                  <div class="confirm-button">
                     ОК
                  </div>
               </div>
            </div>
            <div class="popup__image">
            </div>
         </div>
      </div>
   </div>
</div>

<div id="pay" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup"><span></span><span></span></a>
         <div class="popup__row">
            <div class="popup__form">
               <div class="popup__title">
                  <h4>@lang('form.pay.title')</h4>
               </div>
               <div class="popup__text">
                  <div class="popup__pay-way popup__paypal">
                     <a target="_blank" class="popup__pay-way-link"
                        href="https://www.sandbox.paypal.com/donate/?hosted_button_id=E62LK6H8NWVM8"></a>
                     <div class="popup__pay-img">
                        <img src="{{ asset('img/icons/paypal.jpg') }}" alt="">
                     </div>
                     <div class="popup__pay-text">PayPal</div>
                     <div></div>
                  </div>
                  <div class="popup__pay-way popup__card">
                     <a target="_blank" class="popup__pay-way-link"
                        href="https://buy.stripe.com/5kAcO63UJdFUf9C5kk"></a>
                     <div class="popup__pay-img">
                        <img src="{{ asset('img/icons/card.jpg') }}" alt="">
                     </div>
                     <div class="popup__pay-text">Credit Card</div>
                     <div></div>
                  </div>
                  <p class="popup__tesxt-aditional">@lang('form.pay.title_text')</p>
                  <div class="popup__bank">@lang('form.pay.bank')</div>
                  <div class="popup__copy-btn copy-text @lang('language.current_lang')">@lang('form.pay.copy')
                  </div>
               </div>
               <div class="confirm">
                  <p>@lang('form.success')</p>
                  <div class="confirm-button">
                     ОК
                  </div>
               </div>
            </div>
            <button class="popup__image popup__pay">
            </button>
         </div>
      </div>
   </div>
</div>