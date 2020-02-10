@extends('layouts.app')
@section('content')
@include('partials/collaborators/breadcrumb')
@include('partials/collaborators/lista_tanatorios')
@endsection

@section('scripts')
@include('partials/collaborators/scripts')
@endsection

@section('header')
@include('partials/collaborators/header')
@endsection