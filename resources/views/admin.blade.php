@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Welcome, {{ $user->name }}, to admin panel!</h1>
    </div>
</div>
@endsection
