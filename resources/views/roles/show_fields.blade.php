
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $role->created_at->format('D d, m, Y') !!}</p>
</div>

<h3 class="text-center">Users belongs to this role</h3>
@include('users.table')