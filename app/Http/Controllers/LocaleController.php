<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App; // Tambahkan ini
use Illuminate\Support\Facades\Session; // Tambahkan ini

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        if (in_array($locale, ['id', 'en'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }

        return back();
    }
}
