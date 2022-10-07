@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('content')
<section class="help-baner _baner">
    <div class="_baner__container">
        <div class="_baner__body">
            <h1 class="_baner__title">@lang('help.title')</h1>
        </div>
    </div>
</section>
<section class="help">
    <div class="help__container">
        <div class="help__content-above-img">
            <div class="help__title">@lang('help.help.title')</div>
            <div class="help__item">
                <div class="help__text">
                    <p>@lang('help.help.text_1')</p>
                    <p>@lang('help.help.text_2')</p>
                </div>
                <button class="help__btn">@lang('help.btn')</button>
            </div>
            
        </div>
        <div class="help__img">
            <img src="{{asset('/img/help/help.jpg')}}" alt="">
        </div>
        <div class="help__content-below-img">
            <p>@lang('help.help.text_3')</p>
            <p>@lang('help.help.text_4')</p>
        </div>
    </div>
</section>

<section class="help-icons">
    <div class="help-icons__container">
        <div class="help-icons__body">
            <div class="help-icons__icon">
                <div class="help-icons__img _icon_help-1"></div>
                <div class="help-icons__text">@lang('help.icons.text_1')</div>
            </div>
            <div class="help-icons__icon">
                <div class="help-icons__img _icon_help-2"></div>
                <div class="help-icons__text">@lang('help.icons.text_2')</div>
            </div>
            <div class="help-icons__icon">
                <div class="help-icons__img _icon_help-3"></div>
                <div class="help-icons__text">@lang('help.icons.text_3')</div>
            </div>
            <div class="help-icons__icon">
                <div class="help-icons__img _icon_help-4"></div>
                <div class="help-icons__text">@lang('help.icons.text_4')</div>
            </div>
            <div class="help-icons__icon">
                <div class="help-icons__img _icon_help-5"></div>
                <div class="help-icons__text">@lang('help.icons.text_5')</div>
            </div>
            <div class="help-icons__icon">
                <div class="help-icons__img _icon_help-6"></div>
                <div class="help-icons__text">@lang('help.icons.text_6')</div>
            </div>
            <div class="help-icons__icon">
                <div class="help-icons__img _icon_help-7"></div>
                <div class="help-icons__text">@lang('help.icons.text_7')</div>
            </div>
        </div>
    </div>
    
</section>
<section class="help-form">
    <div class="help-form__container">
        <div class="help-form__title">@lang('help.form.title')</div>
        <form id="helpform" class="help-form__form @lang('language.current_lang')" name="helpform" action="#" method="POST" autocomplete="on" >
            @csrf
            <div class="help-form__body">
                <div class="help-form__item">
                    <input class="help-form__input" type="text" name="name" placeholder="@lang('help.form.name')">
                    <p class="name-error error"></p>
                </div>
                <div class="help-form__item">
                    <input class="help-form__input" type="text" name="contact" placeholder="@lang('help.form.contacts')">
                    <p class="contact-error error"></p>
                </div>
                <div class="help-form__item">
                    <textarea class="help-form__textarea" name="info" placeholder="@lang('help.form.info')"></textarea>
                </div>
                <div class="help-form__item">
                    <textarea class="help-form__textarea" name="help" placeholder="@lang('help.form.help')"></textarea>
                </div>
            </div>
            <button type="submit" class="help-form__btn">@lang('help.btn')</button>
        </form>
    </div>
    
</section>
@endsection