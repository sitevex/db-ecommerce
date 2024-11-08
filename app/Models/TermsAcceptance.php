<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermsAcceptance extends Model
{
    use HasFactory;

    protected $table = 'terms_acceptances';

    protected $fillable = [
        'customer_id',
        'terms_version',
        'accepted_at',
        'term_accepted',
        'accepted_from',
    ];

    /**
     * Relación con el modelo Customer.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}
