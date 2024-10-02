<?php

namespace App\Http\Controllers;
use Aimeos\Shop\Facades\Shop;

use Illuminate\Http\Request;

class ExampleController extends Controller {
    public function indexAction() {
        $name = 'basket/main';
        $params[ 'aiheader' ][ $name ] = Shop::get( $name )->header();
        $params[ 'aibody' ][ $name ] = Shop::get( $name )->body();

        // dd( $params );
        return \View::make( 'mypagetmpl', $params );
    }
}
