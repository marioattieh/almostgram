@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-body">
            <form method="POST" action="/p" enctype="multipart/form-data">
                @csrf
                <h1>Add new post</h1>
                <label for="caption" class="col-md-4 col-form-label">{{ __('Post caption') }}</label>
                <div class="col-md-12">
                    <input id="caption" type="text"
                        class="form-control 
                        @error('caption') is-invalid @enderror" name="caption"
                        value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="image" class="col-md-4 col-form-label">{{ __('Post image') }}</label>

                <div class="col-md-12">
                    <input type="file" class="form-control-file" name="image" id="image">
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-0 mt-3">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Post image') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
