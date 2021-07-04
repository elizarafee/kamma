<?php

namespace App\Http\Controllers;

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
        return view('mails.index');
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
        print_r($request->all());
    }
}
