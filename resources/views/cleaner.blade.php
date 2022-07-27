@extends('layouts.master')

@section('title')
    Cleaner
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Cleaner</li>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green" style="border-radius: 15px">
            <div class="inner">
                <h3>`</h3>
                <p>View Clear</p>
            </div>
            <div class="icon">
                <i class="fa fa-trash"></i>
            </div>
            <a href="{{ route('viewclear') }}" class="small-box-footer">Clean <i class="fa fa-trash"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green" style="border-radius: 15px">
            <div class="inner">
                <h3>`</h3>
                <p>Route Clear</p>
            </div>
            <div class="icon">
                <i class="fa fa-trash"></i>
            </div>
            <a href="{{ route('routeclear') }}" class="small-box-footer">Clean <i class="fa fa-trash"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green" style="border-radius: 15px">
            <div class="inner">
                <h3>`</h3>
                <p>Config Clear</p>
            </div>
            <div class="icon">
                <i class="fa fa-trash"></i>
            </div>
            <a href="{{ route('configclear') }}" class="small-box-footer">Clean <i class="fa fa-trash"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green" style="border-radius: 15px">
            <div class="inner">
                <h3>`</h3>
                <p>Cache Clear</p>
            </div>
            <div class="icon">
                <i class="fa fa-trash"></i>
            </div>
            <a href="{{ route('cacheclear') }}" class="small-box-footer">Clean <i class="fa fa-trash"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<div class="row" style="display: flex;justify-content: center;">
    <div class="col-lg-3 col-xs-12">
        <div class="small-box bg-orange" style="border-radius: 15px">
            <div class="inner">
                <h3>`</h3>
                <p>Clear All</p>
            </div>
            <div class="icon">
                <i class="fa fa-trash"></i>
            </div>
            <a href="{{ route('clearall') }}" class="small-box-footer">Clean <i class="fa fa-trash"></i></a>
        </div>
    </div>
</div>
@endsection