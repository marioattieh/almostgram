@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center2">
            @foreach ($posts as $post)
                <div class="post_show2">
                    <img src="/storage/{{ $post->image }}" alt="">
                    <div class="username_caption2">
                        <div>
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle">
                            <h3>
                                <strong>
                                    <a style="text-decoration: none" class="text-dark"
                                        href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                                </strong>
                            </h3>
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
            @endforeach
            <div>
                {{ $posts->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
