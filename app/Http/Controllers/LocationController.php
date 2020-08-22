<?php

namespace App\Http\Controllers;

use App\Location;


class LocationController extends Controller
{
    public function index()
    {
        return jsend_success(['locations' => Location::with('imageurls')->get()]);
    }

    public function show(Location $location)
    {
        return jsend_success(['location' => $location->load('imageurls')]);
    }
}
