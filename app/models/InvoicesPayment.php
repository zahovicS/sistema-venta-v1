<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class InvoicesPayment extends Model
{
    protected $table = 'invoices_payments';

    public function invoice(): HasOne
    {
        return $this->hasOne(Invoice::class, 'id', 'invoice_id');
    }
}
