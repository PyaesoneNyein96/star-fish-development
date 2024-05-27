<?php

namespace App\Models;

use App\Events\CertificateEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;


    protected $fillable = [
        'student_id',
        'grade_id',
        'total_percentage',
        "pdf_path"
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            event(new CertificateEvent('certificates', $model->toArray()));
        });
    }
}
