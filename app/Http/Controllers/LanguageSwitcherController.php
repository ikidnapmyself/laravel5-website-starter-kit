<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageSwitcherController extends Controller
{
    /**
     * Language switcher
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {
        $request->session()->put('locale', $request->get('locale'));
        return redirect()->back();
    }
}