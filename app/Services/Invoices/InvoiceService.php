<?php

namespace App\Services\Invoices;

use App\Enums\Invoices\InvoiceStatusEnum;
use App\Models\Invoice;
use App\Models\InvoicesPayment;

class InvoiceService
{
    /**
     * Retorna el total de las ventas
     * @param int|null $store_id
     * @return float
     */

    public function total_sales(?int $store_id = null)
    {
        //todo: falta hacerlo con las otras monedas, solo tomaremos la primera 1 - soles
        $currency_id = 1;
        return InvoicesPayment::whereHas('invoice', function ($query) use ($store_id) {
                $query->when($store_id, function ($query2) use ($store_id) {
                    $query2->where('store_id', $store_id);
                })->where('status', InvoiceStatusEnum::ACTIVE);
            })
            ->where('currency_id', $currency_id)
            ->sum('total');
    }
}
