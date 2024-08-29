@extends('shop::base')

@section('aimeos_header')
	<?= $aiheader['locale/select'] ?? '' ?>
	<?= $aiheader['basket/mini'] ?? '' ?>
	<?= $aiheader['catalog/search'] ?? '' ?>
	<?= $aiheader['catalog/tree'] ?? '' ?>
	<?= $aiheader['catalog/home'] ?? '' ?>
	<?= $aiheader['cms/page'] ?? '' ?>
	<style>
		/* Popup container */
.popup {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
}

/* Popup content */
.popup-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 400px;
    text-align: center;
}

/* Close button */
.close-btn {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close-btn:hover,
.close-btn:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

	</style>
@stop

@section('aimeos_head_basket')
	<?= $aibody['basket/mini'] ?? '' ?>
@stop

@section('aimeos_head_nav')
	<?= $aibody['catalog/tree'] ?? '' ?>
@stop

@section('aimeos_head_locale')
	<?= $aibody['locale/select'] ?? '' ?>
@stop

@section('aimeos_head_search')
	<?= $aibody['catalog/search'] ?? '' ?>
@stop

@section('aimeos_body')
<!-- Popup Form -->
<div id="shopPopup" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h2>Select Shop</h2>
        <form onsubmit="redirectOnShop(event)" method="POST"> 
            @csrf
            <label for="shopSelect">Shop Name:</label>
            <select id="shopSelect" name="shopName" required>
				@foreach($shops as $shop)
                        <option value="{{ $shop->code }}">{{ $shop->label }}</option>
                    @endforeach
            </select>
            <button type="submit">Select</button>
        </form>
    </div>
</div>
	<?= $aibody['catalog/home'] ?? '' ?>
	<?= $aibody['cms/page'] ?? '' ?>
@stop
@section('aimeos_scripts')
	<script>
        function redirectOnShop(event){
            event.preventDefault();

            const selectedShop=document.getElementById('shopSelect').value;
            // console.log(selectedShop);

            let redirectUrl='';
            if(selectedShop==='default'){
                redirectUrl='{{url('/')}}';
            }
            else{
                redirectUrl = '{{ url('/') }}/' + selectedShop + '/shop'; 
            }           
            // else if(selectedShop==='isl'){
            //     redirectUrl='{{url('/isl/shop')}}';
            // }
            sessionStorage.setItem('shopSelected', 'true');
            window.location.href=redirectUrl;
            closePopup();
        }
        function openPopup(){
            if (!sessionStorage.getItem('shopSelected')) {
            document.getElementById('shopPopup').style.display='block';
            }
        }
		function closePopup(){
            document.getElementById('shopPopup').style.display='none';
        }
        window.onload= function(){
            openPopup();
        }
	</script>
@stop
