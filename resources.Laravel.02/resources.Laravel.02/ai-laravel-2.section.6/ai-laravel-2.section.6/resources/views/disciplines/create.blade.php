@extends('layouts.main')

@section('header-title', 'New Discipline')

@section('main')
    <form method="POST" action="{{ route('disciplines.store') }}">
        @csrf
        @include('disciplines.shared.fields')
        <div class="flex mt-6">
            <x-button element="submit" type="dark" text="Save new disipline" class="uppercase"/>
        </div>
    </form>
@endsection
