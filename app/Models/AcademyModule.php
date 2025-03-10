<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyModule extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academy_modules';

    protected $fillable = ['course_id', 'title', 'slug', 'order'];

    public function course()
    {
        return $this->belongsTo(AcademyCourse::class, 'course_id');
    }

    public function lessons()
    {
        return $this->hasMany(AcademyLesson::class, 'module_id');
    }
}
