<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Grade
 *
 * @property $id
 * @property $user_id
 * @property $subject
 * @property $trimester
 * @property $exam
 * @property $grade
 * @property $schoolYear
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grade extends Model
{
    use HasFactory;

    static $rules = [
		'user_id' => 'required',
    'grade' => 'required',
		'subject' => 'required',
		'trimester' => 'required',
		'exam' => 'required',
		'schoolYear' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','subject','trimester','exam','grade','schoolYear'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
