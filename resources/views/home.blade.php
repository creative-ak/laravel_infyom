@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
        @include('flash::message')

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#createRole">Create Role</button>
	<!-- Modal -->
	  <div class="modal fade" id="createRole" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Create Role</h4>
	        </div>
	        {{ Form::open(array('route'=>'role.store')) }}
		        <div class="modal-body">
		          {!! Form::text('role', null,['class' => 'form-control', 'placeholder'=>'Name']) !!}
		        </div>
		        <div class="modal-footer">
		        	{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
	        {{ Form::close() }}
	      </div>
	      
	    </div>
	  </div>

    </div>
</div>
@endsection
