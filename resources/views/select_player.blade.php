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

			<div class="panel-body">
				<fieldset>
					<legend>Please select the player(s) you would like to add to the dashboard</legend>
					<input type="radio" name="action" id="player" value="player"/><label for="player">
						Select Player</label>
			</div>
		</div>
	</div>
</div>
@endsection