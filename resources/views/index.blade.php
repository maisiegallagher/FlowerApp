@extends('layouts.app')

@section('content')
    <div class="m-6 2xl:focus:text-black">
        Flowers
    </div>

    <div class="w-4/12">
        @if($flowers->count())
            @foreach ($flowers as $flower)
                <div class="p-2 m-2 bg-{{ strtolower($flower->color) }}-400 text-white">
                    {{ $flower->name }}
                </div>
            @endforeach
        @else
            <p>There are no flowers.</p>
        @endif
    </div>
@endsection
