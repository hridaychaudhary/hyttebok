<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Admin\HomeSliderImage;

class HomeSliderImageRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return HomeSliderImage::$rules;
    }
    // public function rules()
    // {
    //     $rules = HomeSliderImage::$rules;
    //     $id =  $this->route('homeSliderImage');
    //     $rules['image'] = $rules['image'] . ',' . $id;
    //     return $rules;
    // }
}
