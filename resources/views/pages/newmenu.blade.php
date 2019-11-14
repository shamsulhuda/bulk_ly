@extends('layouts.app')

@section('content')


<div class="container-fluid app-body settings-page">
	<h3>Buffer Post Info</h3>
	<div class="feedback_from">
		<div class="row">
			<div class="col-sm-4">
				<input type="text" name="search" id="search" class="form-control" placeholder="search">
			</div>
		</div>
		<table class="table">
			<thead>
			<tr>
				<th scope="col">Group name</th>
				<th scope="col">Group type</th>
				<th scope="col">Users</th>
				<th scope="col">Posts text</th>
				<th scope="col">Time</th>
			</tr>
			</thead>
			<tbody>
			@foreach($bufferposting as $key=>$bufferpost)
			<tr>
				<td>{{$bufferpost->groupInfo->name}}</td>
				<td>{{$bufferpost->groupInfo->type}}</td>
				<td><img src="{{$bufferpost->accountInfo->avatar}}" alt="users" style="width: 50px; height: auto;"></td>
				<td>{{str_limit($bufferpost->post_text, 20)}}</td>
				<td>{{date($bufferpost->sent_at)}}</td>
			</tr>
			@endforeach

			</tbody>

		</table>
			<span>{{$bufferposting->links()}}</span>
	
	</div>

</div>
@endsection
