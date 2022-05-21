@extends('layout')
@section('title', __('tittles.home.title'))
@section('description', __('tittles.home.description'))
@section('ogTitle', __('tittles.home.ogTitle'))
@section('ogDescription', __('tittles.home.ogDescription'))
@section('ogUrl', __('tittles.home.ogUrl'))


@section('content')


<div class="test__container">

   <div class="test-text _icon-finance"> @lang('portfolio.test') </div>
   <br>
   <?php echo URL::previous(); ?>
</div>

@endsection