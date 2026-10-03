<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoxRequest;
use App\Http\Requests\UpdateBoxRequest;
use App\Models\Box;

class BoxController extends Controller
{
    public function index()
    {
        return inertia('boxes/index', [
            'boxes' => Box::all()->toResourceCollection()
        ]);
    }


    public function create()
    {
        //
    }


    public function store(StoreBoxRequest $request)
    {
        //
    }


    public function show(Box $box)
    {
        //
    }


    public function edit(Box $box)
    {
        //
    }


    public function update(UpdateBoxRequest $request, Box $box)
    {
        //
    }


    public function destroy(Box $box)
    {
        //
    }
}
