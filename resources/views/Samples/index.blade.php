@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Samples</h1>
        <a href="{{ route('samples.create') }}" class="btn">+ Add Sample</a>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Enrolled Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($samples as $sample)
                    <tr>
                        <td>{{ $sample->id }}</td>
                        <td>{{ $sample->first_name }}</td>
                        <td>{{ $sample->last_name }}</td>
                        <td>{{ $sample->email }}</td>
                        <td>{{ $sample->enrolled_date }}</td>
                        <td class="actions">
                            <a href="{{ route('samples.show', $sample) }}" class="btn btn-small btn-gray">View</a>
                            <a href="{{ route('samples.edit', $sample) }}" class="btn btn-small btn-green">Edit</a>
                            <form action="{{ route('samples.destroy', $sample) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-small btn-red"
                                    onclick="return confirm('Delete this record?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="empty">No records yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection