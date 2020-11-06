@extends('layouts.default')
@section('title', __('Contact Us') )
@section('content')
    <h1 class="h3 text-muted mb-3">{{__('Contact Us')}}</h1>
    <div class="card shadow border-0">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label>{{__('Name')}}</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{__('Email')}}</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{__('Subject')}}</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>{{__('Message')}}</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="button" class="btn btn-primary">{{__('Send')}}</button>
            </form>
        </div>
    </div>
@endsection