<?php

namespace App\Http\Controllers;

use App\Mail\bamiEmail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|min:0',
            'phone' => 'required|min:1',
            'message' => 'required|min:0',
        ]);
        $data = [
            'name'=> $request->name,
            'phone'=> $request->phone,
            'subject'=> 'You Have A New Contact Message',
            'type'=> 'new message',
            'email'=> $request->email,
            'message'=>$request->message,
            'date'=>Carbon::now(),
        ];
        Mail::to('theconsode@gmail.com')->send(new bamiEmail($data));
        $name = explode(" ", $request->name);
        $data = [
            'name'=> $name[0] ?? $request->name,
            'subject'=> 'Contact Message Recieved',
            'type'=> 'message recieved',
            'email'=> $request->email,
            'date'=>Carbon::now(),
        ];
        Mail::to($request->email)->send(new bamiEmail($data));
        return back()->with('message', 'Message Sent Successfully!');
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
