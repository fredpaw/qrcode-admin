<div class="col-md-6">
    <!-- Product Name Field -->
    <div class="form-group">
        <h3>
            {!! $qrcode->product_name !!}<br>
            @if($qrcode->company_name)
                <small>By {!! $qrcode->company_name !!}</small>
            @endif
        </h3>
    </div>

    <!-- Amount Field -->
    <div class="form-group">
        <h4>Amount: ${!! $qrcode->amount !!}</h4>
    </div>

    <!-- Product Url Field -->
    <div class="form-group">
        {!! Form::label('product_url', 'Product Url:') !!}
        <p>
            <a href="{!! $qrcode->product_url !!}" target="_blank">
                {!! $qrcode->product_url !!}
            </a>
        </p>
    </div>

    @if($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
        <hr/>
        <!-- User Id Field -->
        <div class="form-group">
            {!! Form::label('user_id', 'User Name:') !!}
            <p>{!! $qrcode->user['name'] !!}</p>
        </div>

        <!-- Website Field -->
        <div class="form-group">
            {!! Form::label('website', 'Website:') !!}
            <p>{!! $qrcode->website !!}</p>
        </div>

        <!-- Callback Url Field -->
        <div class="form-group">
            {!! Form::label('callback_url', 'Callback Url:') !!}
            <p>{!! $qrcode->callback_url !!}</p>
        </div>

        <!-- Status Field -->
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            <p>
                @if($qrcode->status)
                    Active
                @else
                    Inactive
                @endif
            </p>
        </div>

        <!-- Created At Field -->
        <div class="form-group">
            {!! Form::label('created_at', 'Created At:') !!}
            <p>{!! $qrcode->created_at !!}</p>
        </div>

        <!-- Updated At Field -->
        <div class="form-group">
            {!! Form::label('updated_at', 'Updated At:') !!}
            <p>{!! $qrcode->updated_at !!}</p>
        </div>
    @endif
</div>
<div class="col-md-4">
    <!-- Qrcode Path Field -->
    <div class="form-group">
        {!! Form::label('qrcode_path', 'Scan QRcode and Pay With Our App:') !!}
        <p>
            <img src="{{ asset($qrcode->qrcode_path) }}" />
        </p>
    </div>
</div>

@if($qrcode->user_id == Auth::user()->id || Auth::user()->role_id < 3)
    <div class="clearfix"></div>
    <h3 class="text-center">Transactions done on this QRCode</h3>
    @include('transactions.table')
@endif
