@extends('layouts.app')

@section('content')

<div class="mail-log">
  <h1>Mail Log</h1>

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
      <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>


  <a href="/emails/create" class="link">Send new email</a>

</div>
@endsection