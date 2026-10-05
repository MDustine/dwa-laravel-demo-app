@extends('layouts.app')

@section('content')
<div class="container narrow">
    <h1>Add Sample</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="card">
        <form action="{{ route('samples.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="enrolled_date">Enrolled Date</label>
                <input type="date" id="enrolled_date" name="enrolled_date" value="{{ old('enrolled_date') }}">
            </div>

            <button type="submit" class="btn">Save</button>
            <a href="{{ route('samples.index') }}" class="btn btn-gray">Cancel</a>
        </form>
    </div>
</div>
@endsection