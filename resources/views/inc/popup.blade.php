@section('popup')
<div id="lead" class="popup">
   <div class="popup__send-load">
      <div class="popup__loading">
         Loading<span></span>
      </div>

   </div>
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup"><span></span><span></span></a>
         <div class="popup__row">
            <div class="popup__form">
               <div class="popup__title">
                  <h4>@lang('header.popup.title')</h4>
               </div>
               <div class="popup__text">
                  <form class="form @lang('language.current_lang')" id="bookingform" name="popupform" method="POST"
                     enctype="multipart/form-data" autocomplete="on" action="{{route('contactForm')}}">
                     @csrf
                     <div class="contacts-form__item data popup-data">
                        <input class="data__text-field" type="text" name="name"
                           placeholder="@lang('header.popup.name')">
                        <p class="name-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-phone">
                        <input class="phone" type="text" name="phone" placeholder="@lang('header.popup.phone')">
                        <p class="phone-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-email">
                        <input class="email" type="text" name="email" placeholder="@lang('header.popup.email')">
                        <p class="email-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-text-area">
                        <textarea name="text" placeholder="@lang('header.popup.message')"></textarea>
                        <p class="text-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-download">
                        <div class="file">
                           <input id="fileImage" type="file" name="filename" class="popup-file">
                           <div class="file-button">@lang('header.popup.file')</div>
                           <p class="file-error error"></p>
                        </div>
                        <div class="loading-preview">
                           <div class="popup__loading">
                              <p>Loading</p><span></span>
                           </div>
                           <div id="filePreview" class="preview-file"></div>
                        </div>

                     </div>
                     <div class="confirm__button">
                        <button class="submit" type="submit">@lang('header.popup.send')</button>
                     </div>
                  </form>
               </div>
               <div class="success">
                  @lang('header.popup.success')
                  <div class="popup__button">
                     ОК
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>