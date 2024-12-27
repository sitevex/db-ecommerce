<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyInstructor extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academy_instructors';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'bio',
        'expertise',
        'social_links',
        'profile_picture'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function courses()
    {
        return $this->belongsToMany(AcademyCourse::class, 'academy_course_instructor', 'instructor_id', 'course_id');
    }
}
