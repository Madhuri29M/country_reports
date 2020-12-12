<?php

namespace App\Http\Requests\Validations;

use App\Http\Requests\Request;

class CountryReportRequest extends Request
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'country_id'       => 'required|min:3|max:99',
            'country_name'     => 'required|min:3|max:99',
            'country_language' => 'required|min:3|max:99',
            'cpt1_id'          => 'required|min:3|max:99',
            'cpt1_title'       => 'required|min:3|max:99',
            'cpt1_data'        => 'required|min:3|max:99',
            'cpt1_sec1_id'     => 'required|min:3|max:99',
            'cpt1_sec1_title'  => 'required|min:3|max:99',
            'cpt1_sec1_data'   => 'required|min:3|max:99',
            'cpt1_sec2_id'     => 'required|min:3|max:99',
            'cpt1_sec2_title'  => 'required|min:3|max:99',
            'cpt1_sec2_data'   => 'required|min:3|max:99',
            'cpt2_id'          => 'required|min:3|max:99',
            'cpt2_title'       => 'required|min:3|max:99',
            'cpt2_data'        => 'required|min:3|max:99',
            'cpt2_sec1_id'     => 'required|min:3|max:99',
            'cpt2_sec1_title'  => 'required|min:3|max:99',
            'cpt2_sec1_data'   => 'required|min:3|max:99',
            'cpt2_sec2_id'     => 'required|min:3|max:99',
            'cpt2_sec2_title'  => 'required|min:3|max:99',
            'cpt2_sec2_data'   => 'required|min:3|max:99',
            'cpt2_sec3_id'     => 'required|min:3|max:99',
            'cpt2_sec3_title'  => 'required|min:3|max:99',
            'cpt2_sec3_data'   => 'required|min:3|max:99'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'country_id.min' => 'The country id must be at least 3 characters.',
            'country_id.max' => 'The country id must be at least 3 characters.',
            'country_name.min' => 'The country name must be at least 3 characters.',
            'country_name.max' => 'The country name must be at least 3 characters.',
            'country_language.min' => 'The country language must be at least 3 characters.',
            'country_language.max' => 'The country language must be at least 3 characters.',
            'cpt1_id.min' => 'The chapter id must be at least 3 characters.',
            'cpt1_id.max' => 'The chapter id may not be greater than 99 characters.',
            'cpt1_title.min' => 'The chapter title must be at least 3 characters.',
            'cpt1_title.max' => 'The chapter title may not be greater than 99 characters.',
            'cpt1_data.min' => 'The chapter data must be at least 3 characters.',
            'cpt1_data.max' => 'The chapter data may not be greater than 99 characters.',
            'cpt1_sec1_id.min' => 'The section id must be at least 3 characters.',
            'cpt1_sec1_id.max' => 'The section id may not be greater than 99 characters.',
            'cpt1_sec1_title.min' => 'The section title must be at least 3 characters.',
            'cpt1_sec1_title.max' => 'The section title may not be greater than 99 characters.',
            'cpt1_sec1_data.min' => 'The section data must be at least 3 characters.',
            'cpt1_sec1_data.max' => 'The section data may not be greater than 99 characters.',
            'cpt1_sec2_id.min' => 'The section id must be at least 3 characters.',
            'cpt1_sec2_id.max' => 'The section id may not be greater than 99 characters.',
            'cpt1_sec2_title.min' => 'The section title must be at least 3 characters.',
            'cpt1_sec2_title.max' => 'The section title may not be greater than 99 characters.',
            'cpt1_sec2_data.min' => 'The section data must be at least 3 characters.',
            'cpt1_sec2_data.max' => 'The section data may not be greater than 99 characters.',
            'cpt2_id.min' => 'The chapter id must be at least 3 characters.',
            'cpt2_id.max' => 'The chapter id may not be greater than 99 characters.',
            'cpt2_title.min' => 'The chapter title must be at least 3 characters.',
            'cpt2_title.max' => 'The chapter title may not be greater than 99 characters.',
            'cpt2_data.min' => 'The chapter data must be at least 3 characters.',
            'cpt2_data.max' => 'The chapter data may not be greater than 99 characters.',
            'cpt2_sec1_id.min' => 'The section id must be at least 3 characters.',
            'cpt2_sec1_id.max' => 'The section id may not be greater than 99 characters.',
            'cpt2_sec1_title.min' => 'The section title must be at least 3 characters.',
            'cpt2_sec1_title.max' => 'The section title may not be greater than 99 characters.',
            'cpt2_sec1_data.min' => 'The section data must be at least 3 characters.',
            'cpt2_sec1_data.max' => 'The section data may not be greater than 99 characters.',
            'cpt2_sec2_id.min' => 'The section id must be at least 3 characters.',
            'cpt2_sec2_id.max' => 'The section id may not be greater than 99 characters.',
            'cpt2_sec2_title.min' => 'The section title must be at least 3 characters.',
            'cpt2_sec2_title.max' => 'The section title may not be greater than 99 characters.',
            'cpt2_sec2_data.min' => 'The section data must be at least 3 characters.',
            'cpt2_sec2_data.max' => 'The section data may not be greater than 99 characters.',
            'cpt2_sec3_id.min' => 'The section id must be at least 3 characters.',
            'cpt2_sec3_id.max' => 'The section id may not be greater than 99 characters.',
            'cpt2_sec3_title.min' => 'The section title must be at least 3 characters.',
            'cpt2_sec3_title.max' => 'The section title may not be greater than 99 characters.',
            'cpt2_sec3_data.min' => 'The section data must be at least 3 characters.',
            'cpt2_sec3_data.max' => 'The section data may not be greater than 99 characters.',
        ];
    }
}
