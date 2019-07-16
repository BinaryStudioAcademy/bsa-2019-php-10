<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MarketService;

class MarketApiController extends Controller
{
    private $marketService;

    public function __construct(MarketService $marketService)
    {
        $this->marketService = $marketService;
    }

    public function showList() {
        // todo
    }

    public function store(Request $request) {
        // todo
    }

    public function showProduct(int $id) {
        // todo
    }

    public function delete(Request $request) {
        // todo
    }
}
