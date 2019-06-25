<?php

namespace App\Http\Controllers;

use App\Services\MarketService;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $marketService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MarketService $marketService)
    {
        $this->middleware('auth');
        $this->marketService = $marketService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $products = $this->marketService->getProductsByUserId($user->id);

        return view('home', compact('products'));
    }
}
