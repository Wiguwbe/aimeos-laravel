@extends('shop::base')

@section('aimeos_header')
     <?= $aiheader['checkout/confirm'] ?>
@stop

@section('aimeos_body')
	<div style="padding: 2%">
    <?= $aibody['checkout/confirm'] ?>
    </div>
@stop
