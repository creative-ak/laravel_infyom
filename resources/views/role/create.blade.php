@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-sm-12">
    	{{ Form::open(array('route'=>'role.store')) }}

			<div class="form-group row">
	    		{!! Form::label('role', 'Enter Role',['class'=>'control-label']) !!}
	    		{!! Form::text('role', null,['class' => 'form-control', 'placeholder'=>'Name']) !!}
			</div>

			<!-- Submit Field -->
			<div class="form-group col-sm-12">
			    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
			    <a href="{!! url('/home') !!}" class="btn btn-default">Cancel</a>
			</div>
    	{{ Form::close() }}
    </div>
</div>
@endsection