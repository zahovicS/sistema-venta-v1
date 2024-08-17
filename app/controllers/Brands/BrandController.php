<?php

namespace App\Controllers\Brands;

use App\Controllers\Controller;
use App\Services\Brands\BrandService;
use Exception;
class BrandController extends Controller
{
    private BrandService $brandService;

    public function __construct()
    {
        parent::__construct();
        $this->brandService = new BrandService();
    }

    public function index()
    {
        render('brand');
    }

    public function get_total_brands()
    {
        try {
            $total_brands = $this->brandService->total_brands();
            return response()->json(["status" => "success", "total_brands" => $total_brands]);
        } catch (Exception $exception) {
            return response()->json(["status" => "error", "message" => $exception->getMessage()], 500);
        }
    }
}
