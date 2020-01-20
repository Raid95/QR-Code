@extends('layouts.app')
@section('content')

<body>
<div class="container">

    <div class="text-right">
        <a href="/user/create" class="btn btn-sm btn-success push-5-r push-10" type="button"><i class="fa fa-eye"></i> Add New Guest</a>
            </div>

	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center text-muted">Guest Invitation List</h2>
      <p class="text-center text-muted">( Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua )</p>
  
      <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Position</th>
                <th>Last Name</th>
                <th>Guest Number</th>
                <th colspan="3">Action</th>
         <!-- <th scope="col-2">Mise à jour</th>
        <th scope="col-2">Supprimer</th> -->
            </tr>
        </thead>
        <tbody>
  	    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->position}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->visitor_number}}</td>
            <td><button class="btn btn-outline-primary" a href="user/{{ $user->id }}">View</button></td> 
            <td><button class="btn btn-outline-primary" a href="user/{{$user->id}}/edit">Edit</button></td> 
            <td><form action="{{route('user.destroy',$user->id) }}" method="POST"onsubmit="return confirm('Are You Sure ?')";> <button  type="submit" class="btn btn-outline-danger button "> <span class="visible content">X</span><span class="hidden content"><i class="fa fa close"></i></span>
                  {{ csrf_field() }}
				       {{ method_field('DELETE') }}
            </button>
          </form></td> 
         
      
    </tr>
  	@endforeach
  </tbody>
</table>
		</div>
    </div>
</div>
@endsection

