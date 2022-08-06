<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class tester
 * @package App\Models
 * @version July 3, 2022, 2:31 pm +07
 *
 * @property string $fieldq
 * @property integer $field2
 */
class tester extends Model
{
    use SoftDeletes;


    public $table = 'tbl_testing';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'fieldq',
        'field2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fieldq' => 'string',
        'field2' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
