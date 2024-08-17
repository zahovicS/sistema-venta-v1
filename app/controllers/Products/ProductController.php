<?php

namespace App\Controllers\Products;

use App\Controllers\Controller;
use App\Services\Products\ProductService;
use Exception;

class ProductController extends Controller
{
    private ProductService $productService;

    public function __construct()
    {
        parent::__construct();
        $this->productService = new ProductService();
    }

    public function index()
    {
        render('product');
    }

    public function get_total_products()
    {
        try {
            $total_products = $this->productService->total_products();
            return response()->json(["status" => "success", "total_products" => $total_products]);
        } catch (Exception $exception) {
            return response()->json(["status" => "error", "message" => $exception->getMessage()], 500);
        }
    }
}
