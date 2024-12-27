<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademyCourseSchedule extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'academy_course_schedules';

    protected $fillable = [
        'course_id', 'city_id', 'start_date', 'end_date', 'start_time', 
        'end_time', 'location', 'max_students', 'status'
    ];

    public function course()
    {
        return $this->belongsTo(AcademyCourse::class, 'course_id');
    }

}
