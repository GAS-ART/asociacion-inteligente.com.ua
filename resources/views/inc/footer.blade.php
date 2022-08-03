@section('footer')
<footer class="footer">
   <div class="footer__container">
      <div class="footer__logo footer__row">
         <a href="#">
            <img src="{{ asset('img/logo.jpg') }}" alt="">
         </a>
         <div class="footer__text"><!--lang('footer.text')--></div>
      </div>
      <div class="footer__menu footer__row">
         <nav class="menu-footer">
            <ul class="footer__menu-list">
               <li class="menu-footer__item">
                  <a href="#" class="menu-footer__link">
                     @lang('footer.menu.about')
                  </a>
               </li>
               <li class="menu-footer__item">
                  <a href="#" class="menu-footer__link">
                     @lang('footer.menu.services')
                  </a>
               </li>
               <li class="menu-footer__item">
                  <a href="#" class="menu-footer__link">
                     @lang('footer.menu.poster')
                  </a>
               </li>
               <li class="menu-footer__item">
                  <a href="#" class="menu-footer__link">
                     @lang('footer.menu.news')
                  </a>
               </li>
               <li class="menu-footer__item">
                  <a href="#" class="menu-footer__link">
                     @lang('footer.menu.help')
                  </a>
               </li>
               <li class="menu-footer__item">
                  <a href="#" class="menu-footer__link">
                     @lang('footer.menu.contact')
                  </a>
               </li>
            </ul>
         </nav>
      </div>
      <div class="footer__contacts contacts-footer footer__row">
         <div class="contacts-footer__address">
            @lang('footer.contacts.address')
         </div>
         <div class="contacts-footer__phone">
         <p>@lang('footer.contacts.phone_title')</p>
         <div class="contacts-footer__phone-item"><span>
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
               <div class="donate-footer__img">
                  <img src="{{ asset('img/icons/paypal.jpg') }}" alt="">
               </div>
               <a href="#" class="donate-footer__link">@lang('footer.donate.paypal')</a>
            </li>
            <!--<li class="donate-footer__item">
               <div class="donate-footer__img">
                  <img src="{{ asset('img/icons/bitcoin.jpg') }}" alt="">
               </div>
               <a href="#" class="donate-footer__link">@lang('footer.donate.crypto')</a>
            </li> -->
            <li class="donate-footer__item">
               <div class="donate-footer__img">
                  <img src="{{ asset('img/icons/card.jpg') }}" alt="">
               </div>
               <a href="#" class="donate-footer__link">@lang('footer.donate.card')</a>
            </li>
         </ul>
      </div>
   </div>
</footer>