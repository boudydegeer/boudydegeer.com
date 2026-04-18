@extends('errors.layout')

@section('label')
    status {{ $exception->getStatusCode() }} &middot; client error
@endsection

@section('code', $exception->getStatusCode())
@section('slug', 'client error')
@section('message', "The request couldn't be processed. Check the URL and try again.")
