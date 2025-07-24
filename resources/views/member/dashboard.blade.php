@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Member Dashboard</h1>
    <p>Halo, {{ Auth::user()->name }}</p>
</div>
@endsection