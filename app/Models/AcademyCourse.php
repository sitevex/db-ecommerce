<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyCourse extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academy_courses';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'level',
        'language',
        'is_free',
        'price',
        'discount',
        'modality',
        'location',
        'start_date',
        'end_date',
        'duration',
        'max_students',
        'publication_status',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(AcademyCategory::class, 'category_id');
    }

    public function instructors()
    {
        return $this->belongsToMany(AcademyInstructor::class, 'academy_course_instructor', 'course_id', 'instructor_id');
    }

    public function images()
    {
        return $this->hasMany(AcademyCourseImagen::class, 'course_id');
    }

    public function students()
    {
        return $this->belongsToMany(AcademyStudent::class, 'academy_enrollments', 'course_id', 'student_id');
    }

    public function schedules()
    {
        return $this->hasMany(AcademyCourseSchedule::class, 'course_id');
    }


    public function modules()
    {
        return $this->hasMany(AcademyModule::class, 'course_id');
    }

    public function lessons()
    {
        return $this->hasMany(AcademyLesson::class, 'course_id');
    }

    public function reviews()
    {
        return $this->hasMany(AcademyCourseReview::class, 'course_id');
    }
}
