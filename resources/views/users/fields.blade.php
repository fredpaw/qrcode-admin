<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

@if(Auth::user()->role_id < 3)
<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'User Level:') !!}
    {!! Form::select('role_id', [ 1 => 'Admin', 2 => 'Moderator', 3 => 'Webmaster', 4 => 'Buyers'], null, ['class' => 'form-control']) !!}
</div>
@endif

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
