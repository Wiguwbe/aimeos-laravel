@extends('shop::base')

@section('aimeos_styles')
	<style>
		.catalog-detail-basket .price-item .value {
			font-size: 16px;
			font-weight: bold;
			color: #1ACB9C;
		}
	</style>
@stop

@section('aimeos_scripts')
	@parent
    <script type="text/javascript" src="<?php echo asset('packages/aimeos/shop/themes/aimeos-detail.js'); ?>"></script>
@stop

@section('aimeos_header')
    <?= $aiheader['basket/mini'] ?>
    <?php // $aiheader['catalog/stage'] ?>
    <?= $aiheader['catalog/filter'] ?>
    <?= $aiheader['catalog/detail'] ?>
    <?= $aiheader['catalog/session'] ?>
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
    <?= $aibody['catalog/detail'] ?>
@stop

@section('aimeos_aside')
    <?= $aibody['catalog/session'] ?>
@stop
