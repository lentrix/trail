<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function landing() {
        return inertia('Landing');
    }

    public function guidelines() {
        return inertia('Guidelines');
    }

    public function prizes() {
        return inertia('Prizes');
    }

    public function registration() {
        return inertia('Registration');
    }

    public function participation() {
        return inertia('Participation');
    }
}
