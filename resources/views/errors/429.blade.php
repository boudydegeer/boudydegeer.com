@extends('errors.layout')

@section('label', 'status 429 &middot; throttled')
@section('code', '429')
@section('slug', 'too many requests — slow down')
@section('message', "You're sending requests too quickly. Wait a moment and try again.")
