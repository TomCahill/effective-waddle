@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3 p-5">
      <img class="rounded-circle" src="https://scontent-lhr3-1.cdninstagram.com/v/t51.2885-19/s150x150/49332649_2224289937827922_3001674968690851840_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com&oh=5e381dd9c1c6d1516b50d8d5fafc56fe&oe=5E6D9D61" alt="tomdotcahill's profile picture"/>
    </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="{{ route('post.create') }}">Add new Post</a>
        </div>
        <div class="d-flex">
          <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
          <div class="pr-5"><strong>52</strong> followers</div>
          <div class="pr-5"><strong>42</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="{{ $user->profile->url }}" target="_BLANK">{{ $user->profile->url }}</a></div>
    </div>
  </div>
  <div class="row pt-5">
    @foreach ($user->posts as $post)
        <div class="col-4">
            <img class="w-100" src="/storage/{{ $post->image }}"/>
        </div>
    @endforeach
  </div>
</div>
@endsection
