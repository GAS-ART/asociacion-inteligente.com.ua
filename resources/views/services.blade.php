@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('content')
<section class="services-baner _baner">
    <div class="_baner__container">
        <div class="_baner__body">
            <h1 class="_baner__title">@lang('services.title')</h1>
        </div>
    </div>
</section>
<section class="services-social">
    <div class="services-social__container">
    <h2>@lang('services.text')</h2>
        <h2 class="services-social__title">@lang('services.social.title')</h2>
        <div class="services-social__body">
            <div class="services-social__item">
                <div class="services-social__item--img">
                    <img src="{{asset('/img/services/social_1.jpg')}}" alt="">
                </div>
                <div class="services-social__item--title">@lang('services.social.1.title')</div>
                <ul class="services-social__item--list">
                    <li class="services-social__item--list-item">@lang('services.social.1.text_1')</li>
                    <li class="services-social__item--list-item">@lang('services.social.1.text_2')</li>
                    <li class="services-social__item--list-item">@lang('services.social.1.text_3')</li>
                </ul>
            </div>
            <div class="services-social__item">
                <div class="services-social__item--img">
                    <img src="{{asset('/img/services/social_2.jpg')}}" alt="">
                </div>
                <div class="services-social__item--title">@lang('services.social.2.title')</div>
                <ul class="services-social__item--list">
                    <li class="services-social__item--list-item">@lang('services.social.2.text_1')</li>
                    <li class="services-social__item--list-item">@lang('services.social.2.text_2')</li>
                    <li class="services-social__item--list-item">@lang('services.social.2.text_3')</li>
                </ul>
            </div>
            <div class="services-social__item">
                <div class="services-social__item--img">
                    <img src="{{asset('/img/services/social_3.jpg')}}" alt="">
                </div>
                <div class="services-social__item--title">@lang('services.social.3.title')</div>
                <ul class="services-social__item--list">
                    <li class="services-social__item--list-item">@lang('services.social.3.text_1')</li>
                    <li class="services-social__item--list-item">@lang('services.social.3.text_2')</li>
                    <li class="services-social__item--list-item">@lang('services.social.3.text_3')</li>
                </ul>
            </div>
            <div class="services-social__item">
                <div class="services-social__item--img">
                    <img src="{{asset('/img/services/social_4.jpg')}}" alt="">
                </div>
                <div class="services-social__item--title">@lang('services.social.4.title')</div>
                <ul class="services-social__item--list">
                    <li class="services-social__item--list-item">@lang('services.social.4.text_1')</li>
                    <li class="services-social__item--list-item">@lang('services.social.4.text_2')</li>
                    <li class="services-social__item--list-item">@lang('services.social.4.text_3')</li>
                    <li class="services-social__item--list-item">@lang('services.social.4.text_4')</li>
                    <li class="services-social__item--list-item">@lang('services.social.4.text_5')</li>
                </ul>
            </div>
        </div>
        <button data-popup-id="main" class="services-social__btn link-on-popup">@lang('services.button')</button>
    </div>
</section>
<section class="services-legal">
    <div class="services-legal__container">
        <div class="services-legal__body">
            <div class="services-legal__img">
                <img src="{{asset('/img/services/legal.jpg')}}" alt="">
            </div>
            <div class="services-legal__content">
                <div class="services-legal__title">@lang('services.legal.title')</div>
                <div class="services-legal__text">@lang('services.legal.text')</div>
                <div class="services-legal__list-title">@lang('services.legal.title_list')</div>
                <ul class="services-legal__list">
                    <li class="services-legal__list-item">@lang('services.legal.list_1')</li>
                    <li class="services-legal__list-item">@lang('services.legal.list_2')</li>
                    <li class="services-legal__list-item">@lang('services.legal.list_3')</li>
                    <li class="services-legal__list-item">@lang('services.legal.list_4')</li>
                    <li class="services-legal__list-item">@lang('services.legal.list_5')</li>
                    <li class="services-legal__list-item">@lang('services.legal.list_6')</li>
                    <li class="services-legal__list-item">@lang('services.legal.list_7')</li>
                </ul>
                <button data-popup-id="main" class="services-social__btn link-on-popup">@lang('services.button')</button>
            </div>

        </div>
    </div>

</section>
@endsection