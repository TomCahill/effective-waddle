@extends('layouts.app')

@section('content')
<div class="container">
  <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="row">
      <div class="col-8 offset-2">
        <div class="form-group row">
          <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>

          <div class="col-md-6">
            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

            @error('caption')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
          <div class="col-md-6">
            <input type="file" class="form-control-file" name="image" id="image">

            @error('image')
              {{-- <span class="invalid-feedback" role="alert"> --}}
                  <strong>{{ $message }}</strong>
              {{-- </span> --}}
            @enderror
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              {{ __('Add New Post') }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection
