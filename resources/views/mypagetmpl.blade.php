@extends('shop::base')

@section('aimeos_header')
	<?= $aiheader['locale/select'] ?? '' ?>
	<?= $aiheader['basket/mini'] ?? '' ?>
@stop

@section('aimeos_head_basket')
	<?= $aibody['basket/mini'] ?? '' ?>
@stop

@section('aimeos_head_locale')
	<?= $aibody['locale/select'] ?? '' ?>
@stop

@section('aimeos_body')
<?= $aibody['basket/main'] ?? '' ?>
<?= $aibody['basket/bulk'] ?? '' ?>
<?= $aibody['basket/related'] ?? '' ?>
@stop
@section('content')
<?= $aibody['locale/select'] ?? '' ?>
@stop


