<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyLesson extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academy_lessons';

    protected $fillable = ['course_id', 'title', 'slug', 'content', 'video_url', 'order'];

    public function course()
    {
        return $this->belongsTo(AcademyCourse::class, 'course_id');
    }

    public function module()
    {
        return $this->belongsTo(AcademyModule::class, 'module_id');
    }

}
