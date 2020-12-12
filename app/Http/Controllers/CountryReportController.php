<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryReport;
use App\Http\Requests\Validations\CountryReportRequest;
use Validator;
use DB;

class CountryReportController extends Controller
{
	/**
     * Show Country Report Form
     */
    public function index(Request $request)
    {
        return view('country_reports.create');
    }

    /**
     * Store Country Report
     */
    public function store(CountryReportRequest $request)
    {
    	try
    	{
    		//section1 of chapter1
    		$cpt1_sec1 = [
    			'id' => $request->cpt1_sec1_id,
    			'title' => $request->cpt1_sec1_title,
    			'data' => $request->cpt1_sec1_data
    		];
    		//section2 of chapter1
    		$cpt1_sec2 = [
    			'id' => $request->cpt1_sec2_id,
    			'title' => $request->cpt1_sec2_title,
    			'data' => $request->cpt1_sec2_data
    		];

    		//chapter1
    		$chapter1 = [
    			'id'       => $request->cpt1_id,
    			'title'    => $request->cpt1_title,
    			'data'     => $request->cpt1_data,
    			'sections' => ['1' => $cpt1_sec1, '2' => $cpt1_sec2]
    		];

    		//section1 of chapter2
    		$cpt2_sec1 = [
    			'id'    => $request->cpt2_sec1_id,
    			'title' => $request->cpt2_sec1_title,
    			'data'  => $request->cpt2_sec1_data
    		];
    		//section1 of chapter2
    		$cpt2_sec2 = [
    			'id'    => $request->cpt2_sec2_id,
    			'title' => $request->cpt2_sec2_title,
    			'data'  => $request->cpt2_sec2_data
    		];
    		//section1 of chapter2
    		$cpt2_sec3 = [
    			'id'    => $request->cpt2_sec3_id,
    			'title' => $request->cpt2_sec3_title,
    			'data'  => $request->cpt2_sec3_data
    		];

    		//chapter2
    		$chapter2 = [
    			'id'       => $request->cpt2_id,
    			'title'    => $request->cpt2_title,
    			'data'     => $request->cpt2_data,
    			'sections' => ['1' => $cpt2_sec1, '2' => $cpt2_sec2, '3' => $cpt2_sec3]
    		];

    		// data
	        $data = [
	        	'country_id' => $request->country_id,
	        	'country_name' => $request->country_name,
	        	'country_language' => $request->country_language,
	        	'chapters' => ['1' => $chapter1, '2' => $chapter2]
	        ];
	        DB::beginTransaction();
	        $country_report = CountryReport::create(['data' => json_encode($data)]);

	        if($country_report) {
	        	DB::commit();
	           return redirect()->route('country_reports.index')->with('success','Country report data has been added successfully');
	        } else {
	        	DB::rollback();
	            return redirect()->route('country_reports.index')->with('error','Country report data could not be aded. Please try again.');
	        }
		} catch(\Exception $e) {
    		return redirect()->back()->with('error','Something went wrong. Please try again.');
    	}
    }
}
