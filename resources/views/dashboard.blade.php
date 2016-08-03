@extends('layouts.app')

@section('content')
<div class="container">
	<!--<a href="/userlist/create" class="btn btn-success">Add Player</a>-->
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel-body">
				Name: {{Auth::user()->name}}
			</div>

			<div class="panel-body">
				Age: {{Auth::user()->name}}
			</div>

			<div class="panel-body">
				<!--Retrieve player-x's list of scorecards, select the most recent one, extract course name from it-->
			</div>

			<div class="panel-body">
				<!--Retrieve player-x's list of scorecards, select the most recent one, extract total score from it-->
			</div>

			<div = class="panel-body">
				<a href="{{url('/.../...')}">Add Player</a>
			</div>
		</div>
	</div>
</div>
@endsection