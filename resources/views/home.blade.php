@extends('layout.app')

@section('content')
    @if (session('status'))
        <div class="w-8/12 bg-green-500 p-4 rounded-lg mb-6 text-white text-center">
            {{session('status')}}
        </div>
    @endif
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            Home
        </div>
    </div>
@endsection
