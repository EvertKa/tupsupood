<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ShopController extends Controller
{
    return Inertia::render('Shop/index', [
        'products' => Product::paginate(12),
    ]);
}
