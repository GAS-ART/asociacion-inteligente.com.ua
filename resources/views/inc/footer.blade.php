@section('footer')
<footer class="footer">
   <div class="footer__container">
      <div class="footer__body">
         <div class="footer__logo footer__row">
            <a href="#">
               <img src="{{ asset('img/logo.jpg') }}" alt="">
            </a>
            <div class="footer__text">@lang('footer.text')</div>
            <div class="footer__social">
               <div class="footer__facebook">
                  <a class="footer__facebook-link" target="_blank" href="https://m.facebook.com/108464355155037/">
                     <svg xmlns="http://www.w3.org/2000/svg" data-name="Ebene 1" width="30" height="30"
                        viewBox="0 0 1024 1024">
                        <path fill="#1877f2"
                           d="M1024,512C1024,229.23016,794.76978,0,512,0S0,229.23016,0,512c0,255.554,187.231,467.37012,432,505.77777V660H302V512H432V399.2C432,270.87982,508.43854,200,625.38922,200,681.40765,200,740,210,740,210V336H675.43713C611.83508,336,592,375.46667,592,415.95728V512H734L711.3,660H592v357.77777C836.769,979.37012,1024,767.554,1024,512Z" />
                        <path fill="#fff"
                           d="M711.3,660,734,512H592V415.95728C592,375.46667,611.83508,336,675.43713,336H740V210s-58.59235-10-114.61078-10C508.43854,200,432,270.87982,432,399.2V512H302V660H432v357.77777a517.39619,517.39619,0,0,0,160,0V660Z" />
                     </svg>
                  </a>
               </div>
               <div class="footer__instagram">
                  <a class="footer__instagram-link" target="_blank" href="https://www.instagram.com/inteli.gente.ua/">
                     <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 102 102">
                        <defs>
                           <radialGradient id="a" cx="6.601" cy="99.766" r="129.502" gradientUnits="userSpaceOnUse">
                              <stop offset=".09" stop-color="#fa8f21" />
                              <stop offset=".78" stop-color="#d82d7e" />
                           </radialGradient>
                           <radialGradient id="b" cx="70.652" cy="96.49" r="113.963" gradientUnits="userSpaceOnUse">
                              <stop offset=".64" stop-color="#8c3aaa" stop-opacity="0" />
                              <stop offset="1" stop-color="#8c3aaa" />
                           </radialGradient>
                        </defs>
                        <path fill="url(#a)"
                           d="M25.865,101.639A34.341,34.341,0,0,1,14.312,99.5a19.329,19.329,0,0,1-7.154-4.653A19.181,19.181,0,0,1,2.5,87.694,34.341,34.341,0,0,1,.364,76.142C.061,69.584,0,67.617,0,51s.067-18.577.361-25.14A34.534,34.534,0,0,1,2.5,14.312,19.4,19.4,0,0,1,7.154,7.154,19.206,19.206,0,0,1,14.309,2.5,34.341,34.341,0,0,1,25.862.361C32.422.061,34.392,0,51,0s18.577.067,25.14.361A34.534,34.534,0,0,1,87.691,2.5a19.254,19.254,0,0,1,7.154,4.653A19.267,19.267,0,0,1,99.5,14.309a34.341,34.341,0,0,1,2.14,11.553c.3,6.563.361,8.528.361,25.14s-.061,18.577-.361,25.14A34.5,34.5,0,0,1,99.5,87.694,20.6,20.6,0,0,1,87.691,99.5a34.342,34.342,0,0,1-11.553,2.14c-6.557.3-8.528.361-25.14.361s-18.577-.058-25.134-.361"
                           data-name="Path 16" />
                        <path fill="url(#b)"
                           d="M25.865,101.639A34.341,34.341,0,0,1,14.312,99.5a19.329,19.329,0,0,1-7.154-4.653A19.181,19.181,0,0,1,2.5,87.694,34.341,34.341,0,0,1,.364,76.142C.061,69.584,0,67.617,0,51s.067-18.577.361-25.14A34.534,34.534,0,0,1,2.5,14.312,19.4,19.4,0,0,1,7.154,7.154,19.206,19.206,0,0,1,14.309,2.5,34.341,34.341,0,0,1,25.862.361C32.422.061,34.392,0,51,0s18.577.067,25.14.361A34.534,34.534,0,0,1,87.691,2.5a19.254,19.254,0,0,1,7.154,4.653A19.267,19.267,0,0,1,99.5,14.309a34.341,34.341,0,0,1,2.14,11.553c.3,6.563.361,8.528.361,25.14s-.061,18.577-.361,25.14A34.5,34.5,0,0,1,99.5,87.694,20.6,20.6,0,0,1,87.691,99.5a34.342,34.342,0,0,1-11.553,2.14c-6.557.3-8.528.361-25.14.361s-18.577-.058-25.134-.361"
                           data-name="Path 17" />
                        <path fill="#fff"
                           d="M461.114,477.413a12.631,12.631,0,1,1,12.629,12.632,12.631,12.631,0,0,1-12.629-12.632m-6.829,0a19.458,19.458,0,1,0,19.458-19.458,19.457,19.457,0,0,0-19.458,19.458m35.139-20.229a4.547,4.547,0,1,0,4.549-4.545h0a4.549,4.549,0,0,0-4.547,4.545m-30.99,51.074a20.943,20.943,0,0,1-7.037-1.3,12.547,12.547,0,0,1-7.193-7.19,20.923,20.923,0,0,1-1.3-7.037c-.184-3.994-.22-5.194-.22-15.313s.04-11.316.22-15.314a21.082,21.082,0,0,1,1.3-7.037,12.54,12.54,0,0,1,7.193-7.193,20.924,20.924,0,0,1,7.037-1.3c3.994-.184,5.194-.22,15.309-.22s11.316.039,15.314.221a21.082,21.082,0,0,1,7.037,1.3,12.541,12.541,0,0,1,7.193,7.193,20.926,20.926,0,0,1,1.3,7.037c.184,4,.22,5.194.22,15.314s-.037,11.316-.22,15.314a21.023,21.023,0,0,1-1.3,7.037,12.547,12.547,0,0,1-7.193,7.19,20.925,20.925,0,0,1-7.037,1.3c-3.994.184-5.194.22-15.314.22s-11.316-.037-15.309-.22m-.314-68.509a27.786,27.786,0,0,0-9.2,1.76,19.373,19.373,0,0,0-11.083,11.083,27.794,27.794,0,0,0-1.76,9.2c-.187,4.04-.229,5.332-.229,15.623s.043,11.582.229,15.623a27.793,27.793,0,0,0,1.76,9.2,19.374,19.374,0,0,0,11.083,11.083,27.813,27.813,0,0,0,9.2,1.76c4.042.184,5.332.229,15.623.229s11.582-.043,15.623-.229a27.8,27.8,0,0,0,9.2-1.76,19.374,19.374,0,0,0,11.083-11.083,27.716,27.716,0,0,0,1.76-9.2c.184-4.043.226-5.332.226-15.623s-.043-11.582-.226-15.623a27.786,27.786,0,0,0-1.76-9.2,19.379,19.379,0,0,0-11.08-11.083,27.748,27.748,0,0,0-9.2-1.76c-4.041-.185-5.332-.229-15.621-.229s-11.583.043-15.626.229"
                           data-name="Path 18" transform="translate(-422.637 -426.196)" />
                     </svg>
                  </a>
               </div>
            </div>
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
                     <a href="{{ route('contacts.lang', ['locale' => __('language.current_lang')]) }}"
                        class="menu-footer__link">
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
      </div>
      <div class="footer__copiright">
         <p class="footer__developed">@lang('footer.copiright.developed')</p>
         <p class="footer__rights">@lang('footer.copiright.rights')</p>
      </div>
   </div>
</footer>