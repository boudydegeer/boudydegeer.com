@extends('errors.layout')

@section('label', 'status 500 &middot; server error')
@section('code', '500')
@section('slug', 'internal server error')
@section('message', "Something broke on our end. The error has been logged and will get a look. Try again in a moment.")
