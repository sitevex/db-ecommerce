<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * Relación con los registros de actualizaciones.
     */
    public function updateLogs()
    {
        return $this->hasMany(CustomerUpdateLog::class);
    }

    /**
     * Relación con las aceptaciones de términos.
     */
    public function termsAcceptances()
    {
        return $this->hasMany(TermsAcceptance::class);
    }

}
