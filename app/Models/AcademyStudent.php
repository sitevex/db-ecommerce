<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyStudent extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academy_students';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'birth_date',
        'phone',
        'address',
        'profile_picture'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courses()
    {
        return $this->belongsToMany(AcademyCourse::class, 'academy_enrollments', 'student_id', 'course_id');
    }

    public function reviews()
    {
        return $this->hasMany(AcademyCourseReview::class, 'student_id');
    }
}
