@extends('layouts.main')

@section('header-title', 'New Course')

@section('main')
    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        @include('courses.shared.fields')
        <div class="flex mt-6">
            <x-button element="submit" type="dark" text="Save new course" class="uppercase"/>
        </div>
    </form>
@endsection
