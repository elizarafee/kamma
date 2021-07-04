@extends('layouts.app')

@section('content')


<div class="mail-sending-form">


<form action="/emails" method="post">
            @csrf
            <div>
                <label for="your_name" class="@error('your_name') invalid @enderror">Your name:</label><br>
                <input type="text" id="your_name" name="your_name" value=""><br>
                @error('your_name')
                <div class="error" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
            <div>
                <label for="friend_name" class="@error('friends_name') invalid @enderror">Friend's name:</label><br>
                <input type="text" id="friend_name" name="friend_name" value=""><br>
                @error('friends_name')
                <div class="error" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
            <div>
                <label for="friend_email" class="@error('friends_email') invalid @enderror">Friend's email:</label><br>
                <input type="email" id="friend_email" name="friend_email">
                @error('friends_email')<br>
                <div class="invalid-feedback alert alert-error" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @enderror
            </div>
            <input type="submit" value="Submit">
        </form>

</div>

@endsection