<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeSliderImage extends Model
{
    public $table = 'home_slider_image';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'path',
        'status',
        'created_by'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'name' => 'required|max:255',
        'title' => 'required|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg',
    ];
}