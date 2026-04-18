@extends('errors.layout')

@section('label', 'status 419 &middot; csrf expired')
@section('code', '419')
@section('slug', 'page expired — please refresh')
@section('message', "Your session token expired. Refresh the page and try again.")
