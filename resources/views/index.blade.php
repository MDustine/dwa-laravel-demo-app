@extends('layouts.app')

@section('content')
<div class="container center">
    <h1>Welcome!</h1>
    <a href="{{ route('samples.index') }}" class="btn">Manage Samples</a>
</div>
@endsection