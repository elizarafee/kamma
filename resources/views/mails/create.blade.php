@extends('layouts.app')

@section('content')

<div class="mail-sending-form">
    <h1 class="heading">Send to a friend</h1>
    <h2 class="sub-heading">Share this great deal with friends!</h2>

    @if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
    @endif

    <form action="/emails" method="post">
        @csrf
        <div class="form-input">
            <label for="name" class="@error('name') invalid @enderror">Your name <span>*</span></label>
            <input type="text" id="name" name="name" value="" />
            @error('name')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-input">
            <label for="friend_name" class="@error('friend_name') invalid @enderror">Friend's name <span>*</span></label>
            <input type="text" id="friend_name" name="friend_name" value="" />
            @error('friend_name')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-input">
            <label for="friend_email" class="@error('friend_email') invalid @enderror">Friend's email <span>*</span></label>
            <input type="text" id="friend_email" name="friend_email" value="" />
            @error('friend_email')
            <div class="error">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
            </svg>
            Submit
        </button>
    </form>
</div>

@endsection