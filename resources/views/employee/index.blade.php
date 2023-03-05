@extends('layouts.app')

@section('content')
    @auth
        <a href="{{ route('employee.create') }}" class="btn btn-success mt-3">Create New Employee</a>

        <h3 class="mt-3">Employee</h3>

        <table class="table table-striped mt-3 text-center">
            <thead class="bg-black text-white">
                <th>Id</th>
                <th>Emplpyee Name</th>
                <th>Branch</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->branch->branch_name }}</td>
                        <td class="d-flex justify-content-center">
                            @can('isAdmin')
                                <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-warning text-white me-2">View</a>
                                <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-info text-white me-2">Edit</a>
                                <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger me-2">Delete</button>
                                </form>
                            @else
                                <a href="{{ route('employee.show', $employee->id) }}"
                                    class="btn btn-warning text-white me-2">View</a>
                                <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-info text-white me-2">Edit</a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endauth
@endsection
