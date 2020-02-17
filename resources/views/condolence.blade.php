@extends('layouts.app')
@section('content')
@if($tipo == 'persona')
    @include('partials/condolence/form_person')
@else
    @include('partials/condolence/form_pet')
@endif
@include('partials/condolence/scripts')
@endsection