<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerUpdateLog extends Model
{
    use HasFactory;

    protected $table = 'customer_update_logs';

    protected $fillable = [
        'customer_id',
        'updated_at',
        'updated_by',
        'changed_fields',
    ];

    protected $casts = [
        'changed_fields' => 'json',
    ];

    /**
     * Relación con el modelo Customer.
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Relación con el modelo User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
    
}
