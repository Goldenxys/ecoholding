<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }

    public function presentation()
    {
        return view('frontend.presentation');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function prestigeImmobilier()
    {
        return view('frontend.prestige_immobilier');
    }

    public function translogistique()
    {
        return view('frontend.translogistique');
    }

    public function visionValeurs()
    {
        return view('frontend.vision_valeurs');
    }

    public function equipe()
    {
        return view('frontend.equipe');
    }

    public function regimeFiscal()
    {
        return view('frontend.regime_fiscal');
    }
}
