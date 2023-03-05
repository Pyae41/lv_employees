@extends('layouts.app')

@section('content')
    @auth
        <a href="{{ route('branch.create') }}" class="btn btn-success mt-3">Create New Branch</a>

        <h3 class="mt-3">Branches</h3>

        <table class="table table-striped mt-3 text-center">
            <thead class="bg-black text-white">
                <th>Id</th>
                <th>Branch Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($branches as $branch)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $branch->branch_name }}</td>
                        <td class="d-flex justify-content-center">
                            @can('isAdmin')
                                <a href="{{ route('branch.show', $branch->id) }}"
                                    class="btn btn-warning text-white me-2">View</a>
                                <a href="{{ route('branch.edit', $branch->id) }}" class="btn btn-info text-white me-2">Edit</a>
                                <form action="{{ route('branch.destroy', $branch->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger me-2">Delete</button>
                                </form>
                            @else
                                <a href="{{ route('branch.show', $branch->id) }}"
                                    class="btn btn-warning text-white me-2">View</a>
                                <a href="{{ route('branch.edit', $branch->id) }}" class="btn btn-info text-white me-2">Edit</a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endauth
@endsection
