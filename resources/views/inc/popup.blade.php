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
                           <option value="Наружная Реклама">@lang('home.charity.finance')</option>
                           <option value="Полиграфия">@lang('home.charity.medical')</option>
                           <option value="Айдентика">@lang('home.charity.food')</option>
                           <option value="Смм">@lang('home.charity.hygiene')</option>
                           <option value="Создание Сайтов">@lang('home.charity.clothes')</option>
                           <option value="УФ печать">@lang('home.charity.transport')</option>
                           <option value="Печать на Одежде">@lang('home.charity.housing')</option>
                           <option value="Печать на Одежде">@lang('home.charity.other')</option>
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