@extends('errors.layout')

@section('label')
    status {{ $exception->getStatusCode() }} &middot; server error
@endsection

@section('code', $exception->getStatusCode())
@section('slug', 'server error')
@section('message', "Something broke on our end. Try again in a moment.")
