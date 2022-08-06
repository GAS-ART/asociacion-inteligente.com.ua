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