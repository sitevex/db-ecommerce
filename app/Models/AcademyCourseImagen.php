<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyCourseImagen extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academy_course_imagens';

    protected $fillable = ['course_id', 'image_url', 'is_main'];

    public function course()
    {
        return $this->belongsTo(AcademyCourse::class, 'course_id');
    }
}
