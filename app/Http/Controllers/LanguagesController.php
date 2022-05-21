<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use mysql_xdevapi\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class languagesController extends Controller
{

    public function changeLocale($locale) {

        $url = URL::previous();

        $languages = ['es','ru'];

        if(Str::contains($url, ['es','ru' ]) ){
            for ($i=0; $i < count($languages); $i++) {
                if (Str::contains($url, $languages[$i]) ) {
                    $url = str_replace($languages[$i], $locale, $url);
                    return redirect($url);
                }
            }
        } else if ( Str::contains($url, '/') ) {
            return redirect($url . $locale);
        }
    }
}
