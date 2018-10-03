@extends('shop::base')

@section('aimeos_header')
    <?= $aiheader['basket/standard'] ?>
    <?= $aiheader['basket/related'] ?>
@stop

@section('aimeos_body')
	<div style="padding: 2%">
    <?= $aibody['basket/standard'] ?>
    <?= $aibody['basket/related'] ?>
   	</div>
@stop
