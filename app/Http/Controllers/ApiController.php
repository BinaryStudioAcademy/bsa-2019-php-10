<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\IMarketService as MarketService;

class ApiController extends Controller
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

    public function delete(int $id) {
        // todo
    }
}
