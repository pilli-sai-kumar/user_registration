<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "hello world";
    }

    public function form_submit(Request $request)
    {

        try {

            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'date_of_birth' => 'required',
                'medal' => 'required',
                't_shirt' => 'required',
                'country' => 'required',
                'emergency_number' => 'required',
            ], [
                'first_name.required' => 'Please enter first name.',
                'last_name.required' => 'Please enter last name.',
                'email.required' => 'Please enter email.',
                'email.email' => 'Please enter correct email.',
                'mobile.required' => 'Please enter mobile number.',
                'date_of_birth.required' => 'Please enter mobile number.',
                'medal.required' => 'Please select medal.',
                't_shirt.required' => 'Please select t-shirt.',
                'country.required' => 'Please select Country.',
                'emergency_number.required' => 'Please Enter Emergency Number.',

            ]);

            if ($validator->fails()) {

                $response = [
                    "status" => 400,
                    "message" => $validator->errors()->first(),
                    "error" => "true",
                    "data" => []
                ];
                return response()->json($response, 200);


            } else {

                $t_shirt = $request->t_shirt;
                if ($t_shirt == "yes") {
                    $t_shirt_size = $request->shirt_size;
                } else {
                    $t_shirt_size = null;
                }

                $data = [
                    'fname' => $request->first_name,
                    'lname' => $request->last_name,
                    'mobile' => $request->mobile,
                    'email' => $request->email,
                    'date_of_birth' => $request->date_of_birth,
                    'medal' => $request->medal,
                    't_shirt' => $request->t_shirt,
                    't_shirt_size' => $request->t_shirt_size,
                    'country' => $request->country,
                    'emergency_number' => $request->emergency_number,
                ];

                $insert_data = Register::insert($data);

                if ($insert_data) {
                    $response = [
                        "status" => 200,
                        "message" => "Registered successfully",
                        "error" => "false",
                        "data" => []
                    ];
                    return response()->json($response, 200);
                }

            }

        } catch (\Exception $th) {
            $response = [
                "status" => 500,
                "message" => $th->getMessage(),
                "error" => "true",
                "data" => []
            ];
            return response()->json($response, 500);

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
