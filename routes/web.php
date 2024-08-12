<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ProfileController;
use App\Models\BackgroundImage;
use App\Models\Card;
use App\Models\Quotation;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/quote/{card}', function ($card) {
    $card = Card::where('uuid', $card)->first();

    if (!$card) {
        abort(404);
    }

    $bg_image = BackgroundImage::inRandomOrder()->get()->first();
    $quote = Quotation::inRandomOrder()->get()->first();
    return view('show-quote', compact('bg_image', 'quote'));
});

Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    // quotations

    Route::view('/quotations', 'admin.quotation.quotations')->name('admin.quotations');
    Route::view('/create-quotation', 'admin.quotation.create')->name('quotation.create');
    Route::view('/edit-quote/{id}', 'admin.quotation.edit')->name('quote.edit');

    //background Image
    Route::view('/background-image', 'admin.background-image.background-image')->name('background.image');
    Route::view('/add-image', 'admin.background-image.create')->name('add.image');
    Route::view('/edit-image/{id}', 'admin.background-image.edit')->name('image.edit');

    //update password
    Route::view('/update-password', 'admin.admin-update-password')->name('update.password');

    //cards
    Route::view('/cards', 'admin.cards.card')->name('cards');
    Route::view('/create-cards', 'admin.cards.create')->name('create.cards');
    Route::get('/export-cards', [CardController::class, 'exportCsv'])->name('cards.exportCsv');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
