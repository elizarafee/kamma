@extends('layouts.app')

@section('content')

<div class="mail-log">
  <h1 class="title">Mail Log</h1>

  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif


  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Sender</th>
        <th>Receiver</th>
        <th>Receiver Email Adddress</th>
        <th>Sent At</th>
      </tr>
    </thead>
    <tbody>
      @foreach($mails as $mail) 
      <tr>
        <td>{{ $mail->id }}</td>
        <td>{{ $mail->sender_name }}</td>
        <td>{{ $mail->receiver_name }}</td>
        <td>{{ $mail->receiver_email }}</td>
        <td>{{ $mail->created_at }}</td>
      </tr>
      @endforeach 
    </tbody>
  </table>


  <a href="/emails/create" class="link">Send new email</a>

</div>
@endsection