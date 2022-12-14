<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTripRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //return newly created trip
            'trip_name' => 'required|string|max:255',
            'trip_destination' => 'required|string|max:255',
            'trip_start_date' => 'required|date',
            'trip_end_date' => 'required|date',
            'planner_name' => 'string|max:255',
            'destination_google_map_url' => 'string|max:255',

        ];
    }
}
