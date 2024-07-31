<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Faculty') }}
    </x-slot>

    <div class="p-6">
        <form action="{{ route('faculties.update', $faculty->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="lecturer_code">Lecturer Code</label>
                <input type="text" name="lecturer_code" class="form-control" value="{{ $faculty->lecturer_code }}" required>
            </div>
            <div class="form-group">
                <label for="lecturer_name">Lecturer Name</label>
                <input type="text" name="lecturer_name" class="form-control" value="{{ $faculty->lecturer_name }}" required>
            </div>
            <div class="form-group">
                <label for="study_program">Study Program</label>
                <input type="text" name="study_program" class="form-control" value="{{ $faculty->study_program }}" required>
            </div>
            <div class="form-group">
                <label for="campus_base">Campus Base</label>
                <input type="text" name="campus_base" class="form-control" value="{{ $faculty->campus_base }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>
