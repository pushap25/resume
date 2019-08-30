<?php

namespace App\Http\Controllers\Front;

use App\Models\Contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'name'      =>  'required',
            'email'     =>  'required|email',
            'subject'   =>  'required',
            'message'   =>  'required'
        // ],[
        //     'name.required'         =>  trans('validation.name:required'),
        //     'email.required'        =>  trans('validation.email:required'),
        //     'subject.required'      =>  trans('validation.subject:required'),
        //     'message.required'      =>  trans('validation.message:required')
        ]);

        if($validator->fails()) {
            return response()->json([
                'result'=>'error',
                'message'=>'Please fill above fields first.',
                'errors'=>$validator->errors()
            ]);
        } else {

            $contacts = $request->all();
        // $errors = [];
        // foreach ($contacts as $key => $value) {
        //     if(is_null($value))
        //         array_push($errors, $key);
        // }
        // if(!count($errors)) {
            $message = new Contacts();
            $message->name = $contacts['name'];
            $message->email = $contacts['email'];
            $message->subject = $contacts['subject'];
            $message->message = $contacts['message'];
            $message->save();

            // Mail Myself
            $to_name = env('EMAIL_USERNAME','Pushap Saini');
            $to_email = 'sainipushapal@gmail.com';
            $data = array(  'uname'=> $to_name,
                            'umessage'=> 'You have got a new message. Please find the details below:',
                            'name'=>$message->name,
                            'email'=>$message->email,
                            'subject'=>$message->subject,
                            'qmessage'=>$message->message
                        );

            \Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                        ->subject("Someone's Knocking on your website!!!");
                $message->from(env('MAIL_USERNAME','livedisqus2@gmail.com'),env('EMAIL_USERNAME','Pushap Saini'));
            });

            // Mail Visitor
            $to_name = $message->name;
            $to_email = $message->email;
            $data = array(  'uname'=> $to_name,
                            'umessage'=> 'Thank You for connecting with me. Your message is on its way. I will surely get back to you soon. Please find your message details below:',
                            'name'=>$message->name,
                            'email'=>$message->email,
                            'subject'=>$message->subject,
                            'qmessage'=>$message->message
                        );
            \Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                        ->subject('Thank You for Connecting With Me');
                $message->from(env('MAIL_USERNAME','livedisqus2@gmail.com'),env('EMAIL_USERNAME','Pushap Saini'));
            });

            return response()->json(['result'=>'success','message'=>'Message Sent Successfully!!!','errors'=>'']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contacts)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contacts)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contacts)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contacts)
    {
        return 'destroy';
    }
}
