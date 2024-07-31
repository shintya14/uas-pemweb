<x-app-layout>
    <x-slot name="header">
        {{ __('Tambah Dosen') }}
    </x-slot>

    <div class="p-6">
        <form action="{{ route('faculties.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="lecturer_code">Lecturer Code</label>
                <input type="text" name="lecturer_code" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lecturer_name">Lecturer Name</label>
                <input type="text" name="lecturer_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="study_program">Study Program</label>
                <input type="text" name="study_program" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="campus_base">Campus Base</label>
                <input type="text" name="campus_base" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-app-layout>
