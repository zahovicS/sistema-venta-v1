<?php

namespace App\Controllers\Categories;

use App\Controllers\Controller;
use App\Services\Categories\CategoryService;
use Exception;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct()
    {
        parent::__construct();
        $this->categoryService = new CategoryService();
    }

    public function index()
    {
        render('category');
    }

    public function get_total_categories()
    {
        try {
            $total_categories = $this->categoryService->total_categories();
            return response()->json(["status" => "success", "total_categories" => $total_categories]);
        } catch (Exception $exception) {
            return response()->json(["status" => "error", "message" => $exception->getMessage()], 500);
        }
    }
}
