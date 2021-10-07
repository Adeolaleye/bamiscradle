<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Pickup;
use App\Mail\bamiEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image as Image;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|min:11',
            'dob' => 'required|string|max:100',
            'gender' => 'required|string|max:20',
            'email' => 'required|string',
            'age' => 'required|string|max:100',
            'p_name' => 'required|string|min:10',
            'address' => 'required|string',
            'place_of_work' => 'required|string',
            'place_of_work_address' => 'required|string',
            'service' => 'required|max:100',
            'disability' => 'required|string|max:20',
            'who_to_call_name' => 'required|string|min:10',
            'who_to_call_phone' => 'required|string|min:11',
            // 'who_to_call_email' => 'required|max:250',
            'who_to_call_address' => 'required|max:250',
            'pickup_name_1' => 'nullable|max:20',
            'pickup_phone_1' => 'nullable|max:500',
            'pickup_email_1' => 'nullable|max:500',
            'pickup_address_1' => 'nullable',
            'pickup_picture_1' => 'nullable',
            'pickup_name_2' => 'nullable|max:20',
            'pickup_phone_2' => 'nullable|max:500',
            'pickup_email_2' => 'nullable|max:50',
            'pickup_address_2' => 'nullable',
            'pickup_picture_2' => 'nullable|max:250',
        ]);
        //dd($request->service);
        if(request()->has('pickup_picture_1')){
        $pickup_picture_1 = time() . '-' .$request['pickup_picture_1']->getClientOriginalName();
        $image = Image::make($request['pickup_picture_1'])->resize(300, 300);
        $image->save('pictures/'.$pickup_picture_1);
        }
        if(request()->has('pickup_picture_2')){
        $pickup_picture_2 = time() . '-' .$request['pickup_picture_2']->getClientOriginalName();
        $image = Image::make($request['pickup_picture_2'])->resize(300, 300);
        $image->save('pictures/'.$pickup_picture_2);
        }
       
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'email' => $request->email,
            'age' => $request->age,
            'p_name' => $request->p_name,
            'address' => $request->address,
            'place_of_work' => $request->place_of_work,
            'place_of_work_address' => $request->place_of_work_address,
            'service' => implode(",",$request->service),
            'specify_dis' => isset($request->specify_dis) ? $request->specify_dis: 'None',
            'disability' => $request->disability,
            'who_to_call_name' => $request->who_to_call_name,
            'who_to_call_phone' => $request->who_to_call_phone,
            'who_to_call_email' => isset($request->who_to_call_email) ? $request->who_to_call_email: 'N/A',
            'who_to_call_address' => $request->who_to_call_address,
        ]);

        $pickup = Pickup::create([
            'user_id' => $user->id,
            'pickup_name_1' => isset($request->pickup_name_1) ? $request->pickup_name_1: 'N/A',
            'pickup_phone_1' => isset($request->pickup_phone_1) ? $request->pickup_phone_1: 'N/A',
            'pickup_email_1' => isset($request->pickup_email_1) ? $request->pickup_email_1: 'N/A',
            'pickup_address_1' => isset($request->pickup_address_1) ? $request->pickup_address_1: 'N/A',
            'pickup_picture_1' => isset($pickup_picture_1) ? 'pictures/'.$pickup_picture_1: null,
            'pickup_name_2' => isset($request->pickup_name_2) ? $request->pickup_name_2: 'N/A',
            'pickup_phone_2' => isset($request->pickup_phone_2) ? $request->pickup_phone_2: 'N/A',
            'pickup_email_2' => isset($request->pickup_email_2) ? $request->pickup_email_2: 'N/A',
            'pickup_address_2' => isset($request->pickup_address_2) ? $request->pickup_address_2: 'N/A',
            'pickup_picture_2' => isset($pickup_picture_2) ? 'pictures/'.$pickup_picture_2: null,
        ]);
        $pick = Pickup::with('user')->where('user_id',$user->id)->first();
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'email' => $request->email,
            'age' => $request->age,
            'p_name' => $request->p_name,
            'address' => $request->address,
            'place_of_work' => $request->place_of_work,
            'place_of_work_address' => $request->place_of_work_address,
            'service' => implode(",",$request->service),
            'specify_dis' => $user->specify_dis,
            'who_to_call_name' => $request->who_to_call_name,
            'who_to_call_phone' => $request->who_to_call_phone,
            'who_to_call_email' => $user->who_to_call_email,
            'who_to_call_address' => $request->who_to_call_address,
            'subject'=> 'New Applicant',
            'type'=> 'new applicant',
            'user_id' => $user->id,
            'pickup_name_1' => $pick->pickup_name_1,
            'pickup_phone_1' => $pick->pickup_phone_1,
            'pickup_email_1' => $pick->pickup_email_1,
            'pickup_address_1' => $pick->pickup_address_1,
            'pickup_picture_1' => !is_null($pick->pickup_picture_1) ? public_path() . '/'. $pick->pickup_picture_1 : null,
            'pickup_picture_2' => !is_null($pick->pickup_picture_2) ? public_path() . '/'. $pick->pickup_picture_2 : null,
            'pickup_name_2' => $pick->pickup_name_2,
            'pickup_phone_2' => $pick->pickup_phone_2,
            'pickup_email_2' => $pick->pickup_email_2,
            'pickup_address_2' => $pick->pickup_address_2,
            'date'=>Carbon::now(),
        ];
        // dd($data);
         Mail::to('theconsode@gmail.com')->send(new bamiEmail($data));

        $data['subject'] = 'Application Recieved';
        $data['type'] = 'application recieved';
        // $data = [
            // 'name' => $request->name,
            // 'phone' => $request->phone,
            // 'dob' => $request->dob,
            // 'gender' => $request->gender,
            // 'email' => $request->email,
            // 'age' => $request->age,
            // 'p_name' => $request->p_name,
            // 'address' => $request->address,
            // 'place_of_work' => $request->place_of_work,
            // 'place_of_work_address' => $request->place_of_work_address,
            // 'service' => implode(",",$request->service),
            // 'specify_dis' => $user->specify_dis,
            // 'who_to_call_name' => $request->who_to_call_name,
            // 'who_to_call_phone' => $request->who_to_call_phone,
            // 'who_to_call_email' => $user->who_to_call_email,
            // 'who_to_call_address' => $request->who_to_call_address,
            // 'user_id' => $user->id,
            // 'pickup_name_1' => $pick->pickup_name_1,
            // 'pickup_phone_1' => $pick->pickup_phone_1,
            // 'pickup_email_1' => $pick->pickup_email_1,
            // 'pickup_address_1' => $pick->pickup_address_1,
            // 'pickup_picture_1' => $pick->pickup_picture_1,
            // 'pickup_picture_2' => $pick->pickup_picture_2,
            // 'pickup_name_2' => $pick->pickup_name_2,
            // 'pickup_phone_2' => $pick->pickup_phone_2,
            // 'pickup_email_2' => $pick->pickup_email_2,
            // 'pickup_address_2' => $pick->pickup_address_2,
            // 'subject'=> 'Application Recieved',
            // 'type'=> 'application recieved',
            // 'date'=>Carbon::now(),
        // ];
        // dd($data);
        Mail::to($request->email)->send(new bamiEmail($data));
        
        return back()->with('message', 'Application Submited Successfully.');
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
