@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-body">
            <form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <h1>Edit your profile</h1>
                <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>
                <div class="col-md-12">
                    <input id="title" type="text"
                        class="form-control 
                        @error('title') is-invalid @enderror" name="title"
                        value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
                <div class="col-md-12">
                    <input id="description" type="text"
                        class="form-control 
                        @error('description') is-invalid @enderror"
                        name="description" value="{{ old('description') ?? $user->profile->description }}"
                        autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="url" class="col-md-4 col-form-label">{{ __('URL') }}</label>
                <div class="col-md-6">
                    <input id="url" type="text"
                        class="form-control 
                        @error('url') is-invalid @enderror" name="url"
                        value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <label for="image" class="col-md-4 col-form-label">{{ __('Profile image') }}</label>
                <div class="col-md-6">
                    <input id="image" type="file"
                        class="form-control 
                        @error('image') is-invalid @enderror" name="image"
                        value="{{ old('image') }}" autocomplete="image" autofocus>

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <div class="row mb-0 mt-3">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Apply changes') }}
                            </button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
