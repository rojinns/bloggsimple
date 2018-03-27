

<div class="form-group">

	{!! Form::label('name','Name:') !!}
	{!! Form::text('name', null, ['class'=>'form-control'] ) !!}

</div>	

<div class="form-group">

	{!! Form::label('body','Body:') !!}
	{!! Form::textarea('body', null, ['class'=> 'form-control'] ) !!}

</div>	

<div class="form-group">

	{!! Form::label('Published_at','Published On:') !!}
	{!! Form::input('date', 'published_at', date('Y-m-d'), ['class'=>'form-control'] ) !!}

</div>	


<div class="form-group">


	{!! Form::submit($submitbuttonname, ['class'=> 'btn btn-primary form-control'] ) !!}

</div>	



