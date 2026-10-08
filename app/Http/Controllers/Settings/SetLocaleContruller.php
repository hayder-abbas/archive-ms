<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class SetLocaleContruller extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $request->user()->update(['locale' => $request->string('locale')]);
        return back();
    }
}
