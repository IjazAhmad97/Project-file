@extends('Auth.layout')
@section('title', 'View Page')

@section('content')
{{-- @include('welcome') --}}
<div class="container">
    <div class="card mt-5">
        <div class="card-header">Student Data</div>
        <div class="card-body">
            @foreach ($datas as $data)

            <h1><strong>Name : </strong>{{ $data->name }}</h1><br>
            <h1><strong>Class : </strong>{{ $data->class }}</h1>
            @endforeach
        </div>
    </div>
</div>

@endsection
