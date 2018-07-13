<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'User Level:') !!}
    <p>{!! $user->role['name'] !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Joined:') !!}
    <p>{!! $user->created_at->format('D d, m, Y h:i') !!}</p>
</div>

@if($user->id == Auth::user()->id || Auth::user()->role_id < 3)
    <div class="clearfix"></div>
    <h3 class="text-center">Transactions With this User</h3>
    @include('transactions.table')
@endif

@if($user->id == Auth::user()->id || Auth::user()->role_id < 3)
    <div class="clearfix"></div>
    <h3 class="text-center">Qrcodes With this User</h3>
    @include('qrcodes.table')
@endif