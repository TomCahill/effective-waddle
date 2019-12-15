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
            <a href="#">Add new Post</a>
        </div>
        <div class="d-flex">
          <div class="pr-5"><strong>7</strong> posts</div>
          <div class="pr-5"><strong>52</strong> followers</div>
          <div class="pr-5"><strong>42</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="{{ $user->profile->url }}" target="_BLANK">{{ $user->profile->url }}</a></div>
    </div>
  </div>
  <div class="row pt-5">
    <div class="col-4">
      <img class="w-100" src="https://scontent-lhr3-1.cdninstagram.com/v/t51.2885-15/e35/s320x320/73372152_439797423342328_2151910830441262964_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com&_nc_cat=104&_nc_ohc=WnC9O5VY95AAX-idB7M&oh=3e5d416977bed19384ef5e954c8408ea&oe=5E90ABB6"/>
    </div>
    <div class="col-4">
      <img class="w-100" src="https://scontent-lhr3-1.cdninstagram.com/v/t51.2885-15/e35/s320x320/70653142_2398427180211379_2316122313236691416_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com&_nc_cat=107&_nc_ohc=66p1Jgz79zUAX_6ISUq&oh=bde539d4521a3344c04c771b73d79840&oe=5E821624"/>
    </div>
    <div class="col-4">
      <img class="w-100" src="https://scontent-lhr3-1.cdninstagram.com/v/t51.2885-15/e35/s320x320/73372152_439797423342328_2151910830441262964_n.jpg?_nc_ht=scontent-lhr3-1.cdninstagram.com&_nc_cat=104&_nc_ohc=WnC9O5VY95AAX-idB7M&oh=3e5d416977bed19384ef5e954c8408ea&oe=5E90ABB6"/>"/>
    </div>
  </div>
</div>
@endsection
