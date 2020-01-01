@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{ $post->image }}"/>
        </div>
        <div class="col-3">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img class="w-100 rounded-circle" src="{{ $post->user->profile->profileImage() }}" alt="{{ $post->user->profile->username}}'s profile picture" style="max-width: 40px">
                </div>
                <div>
                    <div style="font-weight: bold">
                        <span style="font-weight: bold">
                            <a href="{{ route('profile.show', $post->user->id) }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span>
                        <a href="#" class="pl-3">Follow</a>
                    </div>
                </div>
            </div>
            <hr/>

            <p>
                <span style="font-weight: bold">
                    <a href="{{ route('profile.show', $post->user->id) }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span> {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection
