<x-app-layout>
    <x-slot name="header">
        {{ __('Faculty Details') }}
    </x-slot>

    <div class="p-6">
        <p><strong>Lecturer Code:</strong> {{ $faculty->lecturer_code }}</p>
        <p><strong>Lecturer Name:</strong> {{ $faculty->lecturer_name }}</p>
        <p><strong>Study Program:</strong> {{ $faculty->study_program }}</p>
        <p><strong>Campus Base:</strong> {{ $faculty->campus_base }}</p>
        <a href="{{ route('faculties.index') }}" class="btn btn-primary">Back to List</a>
    </div>
</x-app-layout>
