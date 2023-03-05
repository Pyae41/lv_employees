@extends('layouts.app')

@section('content')
    @auth
        <h3 class="mt-3">View Branch</h3>

        <a href="{{ route('branch.index') }}" class="btn btn-dark">Back</a>

        <div class="card p-5 w-50 mx-auto mt-3">
            <div class="card-title text-center">
                <h3>Branch: {{ $branch->branch_name }}</h3>
            </div>
        </div>
    @endauth
@endsection
