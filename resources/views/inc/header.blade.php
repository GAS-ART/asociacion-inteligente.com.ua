@section('header')
<header class="header">
   <div class="header__wraper">
      <div class="header__container">
         <div class="header__logo">
            <a href="{{ route('home.lang', ['locale' => __('language.current_lang')]) }}">
               <img src="{{ asset('img/logo.jpg') }}" alt="logo">
            </a>
         </div>
         <div class="header__options">
            <div class="header__menu burger">
               <nav class="menu">
                  <ul class="menu__list">
                     <li class="menu__item">
                        <a href="#" class="menu__link">
                           @lang('header.menu.about')
                        </a>
                     </li>
                     <li class="menu__item">
                        <a href="#" class="menu__link">
                           @lang('header.menu.services')
                        </a>
                     </li>
                     <li class="menu__item">
                        <a href="#" class="menu__link">
                           @lang('header.menu.poster')
                        </a>
                     </li>
                     <li class="menu__item">
                        <a href="#" class="menu__link">
                           @lang('header.menu.news')
                        </a>
                     </li>
                     <li class="menu__item">
                        <a href="#" class="menu__link">
                           @lang('header.menu.help')
                        </a>
                     </li>
                     <li class="menu__item">
                        <a href="#" class="menu__link">
                           @lang('header.menu.contact')
                        </a>
                     </li>
                     <li class="menu__item">
                        <a href="https://m.facebook.com/108464355155037/" class="menu__link">
                           <svg xmlns="http://www.w3.org/2000/svg" data-name="Ebene 1" width="40" height="40"
                              viewBox="0 0 1024 1024">
                              <path fill="#1877f2"
                                 d="M1024,512C1024,229.23016,794.76978,0,512,0S0,229.23016,0,512c0,255.554,187.231,467.37012,432,505.77777V660H302V512H432V399.2C432,270.87982,508.43854,200,625.38922,200,681.40765,200,740,210,740,210V336H675.43713C611.83508,336,592,375.46667,592,415.95728V512H734L711.3,660H592v357.77777C836.769,979.37012,1024,767.554,1024,512Z" />
                              <path fill="#fff"
                                 d="M711.3,660,734,512H592V415.95728C592,375.46667,611.83508,336,675.43713,336H740V210s-58.59235-10-114.61078-10C508.43854,200,432,270.87982,432,399.2V512H302V660H432v357.77777a517.39619,517.39619,0,0,0,160,0V660Z" />
                           </svg>
                        </a>
                        <a href="https://www.instagram.com/inteli.gente.ua/" class="menu__link">
                           <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 102 102">
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
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="icon-menu">
               <span></span>
            </div>
            <div class="header__actions">
               <div class="header__language language language-btn">
                  <div class="language__select">
                     <a class="language__link" href="{{ route('locale', __('language.current_lang')) }}">
                        <div class="language__text">@lang('language.current_lang')</div>
                     </a>
                  </div>
                  <div class="language__select">
                     <a class="language__link" href="{{ route('locale', __('language.set_lang')) }}">
                        <div class="language__text">@lang('language.set_lang')</div>
                     </a>
                  </div>
               </div>
               <button data-popup-id="pay" class="header__donate link-on-popup">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                     <path
                        d="M8 2L5 1.5L3 2.5L1 4L0.5 6.5L1 9L2.5 11.5L9 18L10 18.5L11 18L17.5 12L19.5 8.5V5.5L17 2.5L14.5 1.5L12.5 2.5L10.5 4.5H9.5L9 4L8 2Z"
                        fill="#111111" />
                     <path
                        d="M10 18.8873C9.71527 18.8873 9.44077 18.7842 9.22684 18.5968C8.41888 17.8903 7.63992 17.2264 6.95267 16.6408L6.94916 16.6377C4.93423 14.9207 3.19427 13.4378 1.98364 11.9771C0.630341 10.3441 0 8.79578 0 7.10434C0 5.46097 0.563507 3.94485 1.58661 2.83508C2.62192 1.71219 4.04251 1.09375 5.58716 1.09375C6.74164 1.09375 7.79892 1.45874 8.72955 2.1785C9.19922 2.54181 9.62494 2.98645 10 3.5051C10.3752 2.98645 10.8008 2.54181 11.2706 2.1785C12.2012 1.45874 13.2585 1.09375 14.413 1.09375C15.9575 1.09375 17.3782 1.71219 18.4135 2.83508C19.4366 3.94485 20 5.46097 20 7.10434C20 8.79578 19.3698 10.3441 18.0165 11.9769C16.8059 13.4378 15.0661 14.9205 13.0515 16.6374C12.363 17.224 11.5828 17.8889 10.773 18.5971C10.5592 18.7842 10.2846 18.8873 10 18.8873ZM5.58716 2.26532C4.37363 2.26532 3.25882 2.74963 2.44781 3.62915C1.62476 4.52194 1.17142 5.75607 1.17142 7.10434C1.17142 8.52692 1.70013 9.79919 2.88559 11.2296C4.03137 12.6122 5.73563 14.0645 7.70889 15.7462L7.71255 15.7492C8.4024 16.3371 9.18442 17.0036 9.99832 17.7153C10.8171 17.0023 11.6003 16.3347 12.2916 15.7458C14.2647 14.0642 15.9688 12.6122 17.1146 11.2296C18.2999 9.79919 18.8286 8.52692 18.8286 7.10434C18.8286 5.75607 18.3752 4.52194 17.5522 3.62915C16.7413 2.74963 15.6264 2.26532 14.413 2.26532C13.524 2.26532 12.7078 2.54791 11.9872 3.10516C11.3449 3.60199 10.8975 4.23004 10.6352 4.66949C10.5003 4.89548 10.2629 5.03036 10 5.03036C9.73709 5.03036 9.49966 4.89548 9.36478 4.66949C9.10263 4.23004 8.65524 3.60199 8.01285 3.10516C7.29218 2.54791 6.47598 2.26532 5.58716 2.26532Z"
                        fill="#111111" />
                  </svg><span class="donate">@lang('header.donate')</span>
               </button>
            </div>
         </div>
      </div>
   </div>
</header>