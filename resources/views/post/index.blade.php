@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            @foreach($posts as $post)
                <div class="row">
                    <div class="col">
                        <a href="{{ route('profile.show', $post->user->id) }}">
                            <img class="w-100" src="/storage/{{ $post->image }}"/>
                        </a>
                    </div>
                </div>
                <div class="row pt-2 pb-4">
                    <div class="col">
                        <p>
                            <span style="font-weight: bold">
                                <a href="{{ route('profile.show', $post->user->id) }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </span> {{ $post->caption }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
