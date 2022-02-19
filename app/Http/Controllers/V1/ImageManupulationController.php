<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\ImageManupulation;
use App\Http\Requests\ResizeImageManupulationRequest;
use App\Http\Requests\UpdateImageManupulationRequest;

class ImageManupulationController extends Controller
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
     * @param Album $album
     * @return void
     */
    public function byAlbum( Album $album){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ResizeImageManupulationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function resize(ResizeImageManupulationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageManupulation  $imageManupulation
     * @return \Illuminate\Http\Response
     */
    public function show(ImageManupulation $imageManupulation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageManupulationRequest  $request
     * @param  \App\Models\ImageManupulation  $imageManupulation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageManupulationRequest $request, ImageManupulation $imageManupulation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageManupulation  $imageManupulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageManupulation $imageManupulation)
    {
        //
    }
}
