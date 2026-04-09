@extends('layouts.main')

@section('header-title', 'Update course "' . $course->name . '"')

@section('main')
    <form method="POST" action="{{ route('courses.update', ['course' => $course]) }}">
        @csrf
        @method('PUT')
        @include('courses.shared.fields')
        <div class="flex mt-6">
            <x-button element="submit" type="dark" text="Save" class="uppercase"/>
            <x-button element="a" type="light" text="Cancel" class="uppercase ms-4"
                        href="{{ url()->full() }}"/>
        </div>

    </form>
@endsection
