<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyCategory extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academy_categories';

    protected $fillable = ['name', 'slug', 'description', 'status'];

    public function courses()
    {
        return $this->hasMany(AcademyCourse::class, 'category_id');
    }
}
