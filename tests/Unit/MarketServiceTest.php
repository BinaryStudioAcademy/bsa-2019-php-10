<?php

namespace Tests\Unit;

use App\Entities\Product;
use App\Repositories\ProductRepository;
use App\Services\MarketService;
use App\User;
use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MarketServiceTest extends TestCase
{
    private $unregisteredUser;
    private $productRepository;

    private $marketService;

//    /**
//     * A basic unit test example.
//     *
//     * @return void
//     */
//    public function testBasicTest()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }

    public function setUp(): void
    {
        parent::setUp();

        $this->unregisteredUser = new User([
            'name'      => 'admin',
            'email'     => 'admin@example.com',
            'password'  => 'some_secure_password'
        ]);
        $this->productRepository = $this->createMock(ProductRepository::class);
        $this->marketService = new MarketService($this->productRepository);
    }

    public function testStoreProduct()
    {
        $request = $this->createMock(Request::class);
        $request->method('getName')->willReturn('Test');
        $request->method('getPrice')->willReturn('9.99');

        $product = $this->marketService->storeProduct($request);

        $this->assertInstanceOf(Product::class, $product);
    }

//    protected function getProductListTest()
//    {
//
//    }
}
