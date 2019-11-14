@extends('layouts.app')
@section('content')
@include('partials/obituaries/breadcrumb')
@include('partials/obituaries/search')
@include('partials/obituaries/lista')
@endsection

@section('scripts')
@include('partials/obituaries/scripts')
@endsection

@section('header')
@include('partials/obituaries/header')
@endsection