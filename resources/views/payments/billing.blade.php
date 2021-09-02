@extends('layouts.app')
@section('title', 'Page Title')

@section('Styles')
@endsection


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{$payLink}}
                        <a class="btn btn-primary" href="{{$payLink}}">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('Scripts')
@endsection