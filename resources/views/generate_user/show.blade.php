@extends('layouts.app')
@section('content')
 
<body>
  <div class="container">
<h2>QR Code </h2> <br>
  <div class="row">
    <div class="col-md-4">
      
      <button class="btn btn-outline-primary" onclick="print()">Print QR Code</button>
      
      @if ($user->visitor_number)
      <div id="qrcode"> 
        <!-- generate QR code -->
        {!! QrCode::size(300)->generate($user->qrcode)!!}
       
       <br>
       <br>

       <h5>Guest Name :{{ $user->name }}</h5>
       <h5>Guest Position :{{$user->position}}</h5>
       <h5>Guest Last Name :{{$user->lastname}}</h5>

      </div>
      @else
      <p class="text-muted text-center"> You Admin .</p> <!-- admin tak perlu QR Code -->
      @endif           
   <span id="id_user" class="{{$user->id}}"></span>
   </div>
    </div>
</div>
</div>
</tbody>
    @endsection