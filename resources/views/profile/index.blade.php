@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img class="w-100 rounded-circle" src="{{ $user->profile->profileImage() }}" alt="{{ $user->username }}'s profile picture"/>
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-3">
                <div class="h4">{{ $user->username }}</div>

                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
            </div>

            @can('update', $user->profile)
                <a href="{{ route('post.create') }}">Add new Post</a>
            @endcan
        </div>

        @can('update', $user->profile)
            <a href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
        @endcan

        <div class="d-flex">
          <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
          <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
          <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="{{ $user->profile->url }}" target="_BLANK">{{ $user->profile->url }}</a></div>
    </div>
  </div>
  <div class="row pt-5">
    @foreach ($user->posts as $post)
        <div class="col-4">
            <a href="{{ route('post.show', $post->id) }}">
                <img class="w-100" src="/storage/{{ $post->image }}"/>
            </a>
        </div>
    @endforeach
  </div>
</div>
@endsection
