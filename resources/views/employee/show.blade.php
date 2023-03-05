@extends('layouts.app')

@section('content')
    @auth
        <h3 class="mt-3">View Employee</h3>

        <a href="{{ route('employee.index') }}" class="btn btn-dark">Back</a>

        <div class="card p-3 w-50 mx-auto mt-3">
            <div class="card-title">Employee Info</div>
            <div class="card-content">
                <div class="row">
                    <div class="col-6">
                        <h3>Name: {{ $employee->name }}</h3>
                    </div>
                    <div class="col-6">
                        <h3>Branch: {{ $employee->branch->branch_name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
