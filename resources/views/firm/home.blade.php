@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Available Tokens</span>
                    <span class="info-box-number">{{ Auth::user()->tokens_available }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
