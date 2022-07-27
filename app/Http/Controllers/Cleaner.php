<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class Cleaner extends Controller
{
    public function cleaner()
    {
        return view('cleaner');
    }

    public function viewclear()
    {
        Artisan::call('view:clear');
        return redirect('/cleaner');
    }

    public function routeclear()
    {
        Artisan::call('route:clear');
        return redirect('/cleaner');
    }

    public function configclear()
    {
        Artisan::call('config:clear');
        return redirect('/cleaner');
    }

    public function cacheclear()
    {
        Artisan::call('cache:clear');
        return redirect('/cleaner');
    }

    public function clearall()
    {
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        return redirect('/cleaner');
    }
}
