<?php

namespace App\Http\Controllers;


use App\Models\MailLog;
use App\Mail\ShareDeal;
use Illuminate\Support\Facades\Mail;
use \App\Http\Requests\SendMailRequest;

class MailController extends Controller
{
    /**
     * Display a listing of emails.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mails = MailLog::orderBy('created_at', 'desc')->get();
        return view('mails.index', ['mails' => $mails]);
    }

    /**
     * Show the form for sending email.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mails.create');
    }

    /**
     * Store a newly sent email into storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SendMailRequest $request)
    {
        try {
            $mail_data = array(
                'sender_name' => $request->get('name'),
                'receiver_name' => $request->get('friend_name'),
                'receiver_email' => $request->get('friend_email'),
                'email_message' => 'Dummy text for the deal ...',
                'created_at' => date('Y-m-d H:i:s')
            );

            // store the email info 
            $email = MailLog::create($mail_data);

            //send the email
            Mail::to($request->get('friend_email'))->send(new ShareDeal($email));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send the email - (' . $e->getMessage() . ')');
        }

        return redirect('/emails')->with('success', 'Email successfully sent to ' . $request->get('friend_name'));
    }
}
