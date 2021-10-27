@extends('layouts.main')

@section('content')
    <h1>Create account</h1>

    <form action="{{ route('auth.createAccount') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Create account</button>
    </form>
@endsection
