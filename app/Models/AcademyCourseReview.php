<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyCourseReview extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academy_course_reviews';

    protected $fillable = ['student_id', 'course_id', 'rating', 'review'];

    public function student()
    {
        return $this->belongsTo(AcademyStudent::class, 'student_id');
    }

    public function course()
    {
        return $this->belongsTo(AcademyCourse::class, 'course_id');
    }
}
