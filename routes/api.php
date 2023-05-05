<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/remove', function (Request $request) {
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('public');

        $process = new Process([config('app.python.path'), public_path('python.py'), Storage::path($path)]);
        $process->run();

        // error handling
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $replaced = str_replace("\n", "", $process->getOutput());

        auth()->user()->conversions()->create([
            'image' => $path,
            'no_bg_image' => $replaced
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Background removed successfully.',
            'url' => asset($replaced)
        ], 200);
    }

    return response()->json([
        'status' => 'error',
        'message' => 'Image not found',
    ], 400);
})->middleware('auth:sanctum');
