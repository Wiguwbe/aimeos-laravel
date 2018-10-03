@extends('shop::base')

@section('aimeos_styles')
<style>
	.second_header {
		background-color: #414244;
	}
	
	.catalog-list {
		margin-bottom: 30px;
	}
</style>

<!-- <?= \Request::session()->get('aimeos/basket/locale'); ?> -->
@stop

@section('aimeos_header')
    <?= $aiheader['basket/mini'] ?>
    <?= $aiheader['catalog/filter'] ?>
    <?php // $aiheader['catalog/stage'] ?>
    <?= $aiheader['catalog/lists'] ?>
@stop

@section('aimeos_head')
    <?= $aibody['basket/mini'] ?>
@stop

@section('aimeos_nav')
    <?= $aibody['catalog/filter'] ?>
@stop

@section('aimeos_stage')
    <?php // $aibody['catalog/stage'] ?>
@stop

@section('aimeos_body')
     <?= $aibody['catalog/lists'] ?>
@stop
