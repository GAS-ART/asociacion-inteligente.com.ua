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
                <button class="help__btn _btn-help">@lang('help.btn')</button>
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
@endsection