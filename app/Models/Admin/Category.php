<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Admin\Post;

class Category extends Model
{
    use SoftDeletes;
    public const SUPPER_ADMIN = "supper-admin";
    public const GUEST = "guest";

    public $table = 'categories';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'navbar_status',
        'status',
        'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'id' => 'integer',
    //     'name' => 'string',
    //     'title' => 'string',
    //     'guard_name' => 'string'
    // ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:255|unique:categories,name',
        'slug' => 'required|max:255',
        'description' => 'required',
        // // 'image' => 'required|mimes:jpeg,jpg,png',
        // 'meta_title' => 'required|string',
        // 'meta_description' => 'required|string',
        // 'meta_keyword' => 'required|string',
        // 'navbar_status' => 'required|boolean',
        // 'status' => 'required|boolean',

    ];


    public function post()
    {
        return $this->hasMany(Post::class);
    }

    // protected $appends = array('permission_data', 'check_supper_admin');
    // public function getPermissionDataAttribute()
    // {
    //     return $this->permissions->pluck('id', 'id');
    // }

    // public function getCheckSupperAdminAttribute()
    // {
    //     return $this->name == Role::SUPPER_ADMIN;
    // }

}