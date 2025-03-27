<?php

use Illuminate\Support\Facades\Route;
use Picqer\Barcode\BarcodeGeneratorPNG;
use App\Models\Stock;

Route::get('/barcode/{barcode}', function ($barcode) {
    $generator = new BarcodeGeneratorPNG();
    $barcodeImage = $generator->getBarcode($barcode, $generator::TYPE_CODE_128, 4, 100); 

    return response($barcodeImage)
        ->header('Content-Type', 'image/png');
})->name('barcode.image');


