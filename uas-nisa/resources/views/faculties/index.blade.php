<x-app-layout>
    <x-slot name="header">
        {{ __('Data Dosen Fakultas') }}
    </x-slot>

    <div class="p-6">
        <a href="{{ route('faculties.create') }}" class="btn btn-primary">Tambah Dosen</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Lecturer Code</th>
                    <th>Lecturer Name</th>
                    <th>Study Program</th>
                    <th>Campus Base</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faculties as $faculty)
                    <tr>
                        <td>{{ $faculty->lecturer_code }}</td>
                        <td>{{ $faculty->lecturer_name }}</td>
                        <td>{{ $faculty->study_program }}</td>
                        <td>{{ $faculty->campus_base }}</td>
                        <td>
                            <a href="{{ route('faculties.edit', $faculty->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('faculties.destroy', $faculty->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
