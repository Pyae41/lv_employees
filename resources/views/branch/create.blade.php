@extends('layouts.app')

@section('content')
    @auth
        <h3 class="mt-3">Create Branch</h3>

        <a href="{{ route('branch.index') }}" class="btn btn-dark">Back</a>

        <div class="card p-3 w-50 mx-auto mt-3">
            <div class="card-content">
                <form action="{{ route('branch.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Branch Name</label>
                        <input type="text" name="branch_name" id=""
                            class="form-control @if ($errors->has('branch_name')) border border-danger @endif"
                            placeholder="Enter Branch Name" value="{{ old('branch_name') }}">
                        @if ($errors->has('branch_name'))
                            <small class="text-danger">{{ $errors->first('branch_name') }}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success w-100">Create</button>
                </form>
            </div>
        </div>
    @endauth
@endsection
