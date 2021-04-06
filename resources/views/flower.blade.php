@extends('layouts.app')

@section('content')
    <div class="m-6">
        <h1 class="mb-3">Flower Entry</h1>
        <form action="{{ route('flower') }}" method="post" class="w-4/12">
            @csrf
            <div class="m-3">
                <label for="name">Flower name: </label>
                <input type="text" name="name"
                       id="name"
                       placeholder="Enter a flower"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg">
            </div>

            <div class="m-3">
                <label for="color">Color: </label>
                <input type="text" name="color"
                       id="color"
                       placeholder="Enter a color"
                       class="bg-gray-100 border-2 w-full p-4 rounded-lg">
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded
                     font-medium w-full">Submit
                </button>
            </div>
        </form>
    </div>
@endsection
