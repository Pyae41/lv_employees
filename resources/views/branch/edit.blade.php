@extends('layouts.app')

@section('content')
    @auth
        <h3 class="mt-3">Edit branch</h3>

        <a href="{{ route('branch.index') }}" class="btn btn-dark">Back</a>

        <div class="card p-3 w-50 mx-auto mt-3">
            <div class="card-content">
                <form action="{{ route('branch.update',$branch->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Branch Name</label>
                        <input type="text" name="branch_name" id=""
                            class="form-control @if ($errors->has('name')) border border-danger @endif"
                            placeholder="Enter Employee Name" value="{{ $branch->branch_name }}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success w-100">Edit</button>
                </form>
            </div>
        </div>
    @endauth
@endsection
