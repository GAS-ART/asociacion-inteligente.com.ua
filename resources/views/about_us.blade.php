@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('content')

<section class="about-us-baner _baner about-us">
    <div class="_baner__container">
        <div class="_baner__body">
            <h1 class="_baner__title">@lang('about_us.title')</h1>
        </div>
    </div>
</section>
<section class="about-us-director">
    <div class="about-us-director__container">
        <div class="about-us-director__body">
            <div class="about-us-director__avatar">
                <div class="about-us-director__avatar--img">
                    <img src="{{asset('/img/about-us/director.jpg')}}" alt="">
                </div>
                <div class="about-us-director__avatar--name">
                    @lang('about_us.direcotor.name')
                </div>
            </div>
            <div class="about-us-director__content">
                <h2 class="about-us-director__content--title">@lang('about_us.direcotor.title')</h2>
                <p class="about-us-director__content--text">@lang('about_us.direcotor.text_1')</p>
                <p class="about-us-director__content--text">@lang('about_us.direcotor.text_2')</p>
                <h3 class="about-us-director__content--title-list">@lang('about_us.direcotor.title_list')</h3>
                <ul class="about-us-director__content--list">
                    <li class="about-us-director__content--list-item">@lang('about_us.direcotor.list_1')</li>
                    <li class="about-us-director__content--list-item">@lang('about_us.direcotor.list_2')</li>
                    <li class="about-us-director__content--list-item">@lang('about_us.direcotor.list_3')</li>
                    <li class="about-us-director__content--list-item">@lang('about_us.direcotor.list_4')</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="about-us-team">
    <div class="about-us-team__container">
        <h2 class="about-us-team__title">@lang('about_us.team.title')</h2>
        <p class="about-us-team__text">@lang('about_us.team.text')</p>
        <div class="about-us-team__img">
            <img src="{{asset('/img/about-us/team.jpg')}}" alt="">
        </div>

    </div>
</section>
<section class="about-us-achievments">
    <h2 class="about-us-achievments__title"></h2>
    <div class="about-us-achievments__container">
        <h2 class="about-us-achievments__title">@lang('about_us.achievments_title')</h2>
        <div class="about-us-achievments__gallery">
            <a class="about-us-achievments__galleri--link" href="{{asset('/img/about-us/1.jpg')}}">
                <img class="about-us-achievments__galleri--img" src="{{asset('/img/about-us/1.jpg')}}" alt="">
            </a>
            <a class="about-us-achievments__galleri--link" href="{{asset('/img/about-us/2.jpg')}}">
                <img class="about-us-achievments__galleri--img" src="{{asset('/img/about-us/2.jpg')}}" alt="">
            </a>
            <a class="about-us-achievments__galleri--link" href="{{asset('/img/about-us/3.jpg')}}">
                <img class="about-us-achievments__galleri--img" src="{{asset('/img/about-us/3.jpg')}}" alt="">
            </a>
            <a class="about-us-achievments__galleri--link" href="{{asset('/img/about-us/4.jpg')}}">
                <img class="about-us-achievments__galleri--img" src="{{asset('/img/about-us/4.jpg')}}" alt="">
            </a>
            <a class="about-us-achievments__galleri--link" href="{{asset('/img/about-us/5.jpg')}}">
                <img class="about-us-achievments__galleri--img" src="{{asset('/img/about-us/5.jpg')}}" alt="">
            </a>
        </div>
    </div>
</section>
@endsection