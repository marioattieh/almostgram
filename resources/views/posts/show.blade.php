@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center">
            <div class="post_show">
                <img src="/storage/{{ $post->image }}" alt="">
                <div class="username_caption">
                    <div>
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle">
                        <h3>
                            <strong>
                                <a style="text-decoration: none" class="text-dark"
                                    href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                            </strong>
                        </h3>
                        <div class="follow"><a href="#">Follow</a></div>
                    </div>
                    <br />
                    <p>
                        <strong>
                            <a class="text-dark"
                                href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                        </strong>
                        :&nbsp;{{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
