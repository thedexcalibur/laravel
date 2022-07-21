<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Http\Requests\StoreKursusRequest;
use App\Http\Requests\UpdateKursusRequest;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKursusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKursusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function show(Kursus $kursus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function edit(Kursus $kursus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKursusRequest  $request
     * @param  \App\Models\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKursusRequest $request, Kursus $kursus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kursus $kursus)
    {
        //
    }
}
