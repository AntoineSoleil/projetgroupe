@extends('backpack::layout')

@section('header')
    
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>

                <div class="box-body">{{ trans('backpack::base.logged_in') }}</div>
            </div>
        </div>
    </div>
@endsection
