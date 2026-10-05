@extends('layouts.app')

@section('content')
<div class="container narrow">
    <h1>Sample Details</h1>

    <div class="card details">
        <p><strong>First Name:</strong> {{ $sample->first_name }}</p>
        <p><strong>Last Name:</strong> {{ $sample->last_name }}</p>
        <p><strong>Email:</strong> {{ $sample->email }}</p>
        <p><strong>Enrolled Date:</strong> {{ $sample->enrolled_date }}</p>
    </div>

    <div class="buttons">
        <a href="{{ route('samples.edit', $sample) }}" class="btn btn-green">Edit</a>
        <a href="{{ route('samples.index') }}" class="btn btn-gray">Back to list</a>
    </div>
</div>
@endsection