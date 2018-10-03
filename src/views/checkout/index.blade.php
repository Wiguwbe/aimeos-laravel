@extends('shop::base')

@section('aimeos_header')
     <?= $aiheader['checkout/standard'] ?>
@stop

@section('aimeos_body')
	<div style="padding: 2%">
    <?= $aibody['checkout/standard'] ?>
    </div>
@stop
