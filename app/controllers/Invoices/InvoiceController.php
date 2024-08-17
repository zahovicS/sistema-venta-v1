<?php

namespace App\Controllers\Invoices;

use App\Controllers\Controller;
use App\Services\Invoices\InvoiceService;

class InvoiceController extends Controller
{
    private InvoiceService $invoiceService;
    public function __construct(){
        parent::__construct();
        $this->invoiceService = new InvoiceService();
    }
    public function index()
    {
        render('invoice');
    }
    public function get_total_sales(){
        try {
            $store_id = $this->data["store_id"];
            $total_sales = $this->invoiceService->total_sales($store_id);
            return response()->json(["status" => "success", "total_sales" => $total_sales]);
        }catch (Exception $exception){
            return response()->json(["status" => "error", "message" => $exception->getMessage()], 500);
        }
    }
}
