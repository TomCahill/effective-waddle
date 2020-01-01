@extends('layouts.app')

@section('content')
<div class="container">
  <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="row">
      <div class="col-8 offset-2">

        <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

          <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

            @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

            <div class="col-md-6">
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>

            <div class="col-md-6">
                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

                @error('url')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>
            <div class="col-md-6">
                <input type="file" class="form-control-file" name="image" id="image">

                @error('image')
                    <strong>{{ $message }}</strong>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              {{ __('Save Profile') }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
