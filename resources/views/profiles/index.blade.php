@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="top_container">
            <div>
                <img src="{{ $user->profile->profileImage() }}" alt="Laravel image " class="rounded-circle"
                    style="width: 150px">
            </div>
            <div>
                <div class="username_add_settings">
                    <div class='username'>{{ $user->username }}</div>
                    @if (auth()->user() && auth()->user()->id != $user->id)
                        <follow-button user-id={{ $user->id }} follows={{ $follows }}></follow-button>
                    @endif
                    @can('update', $user->profile)
                        <button class="add">
                            <a href="/p/create" style="text-decoration: none" class="text-dark">Create post</a>
                        </button>
                        <button class="add">
                            <a href="/profile/{{ $user->id }}/edit" style="text-decoration: none" class="text-dark">Edit
                                profile</a>
                        </button>
                        <svg aria-label="Settings" class="settings " color="#262626" fill="#262626" height="24" role="img"
                            viewBox="0 0 24 24" width="24">
                            <circle cx="12" cy="12" fill="none" r="8.635" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2"></circle>
                            <path
                                d="M14.232 3.656a1.269 1.269 0 01-.796-.66L12.93 2h-1.86l-.505.996a1.269 1.269 0 01-.796.66m-.001 16.688a1.269 1.269 0 01.796.66l.505.996h1.862l.505-.996a1.269 1.269 0 01.796-.66M3.656 9.768a1.269 1.269 0 01-.66.796L2 11.07v1.862l.996.505a1.269 1.269 0 01.66.796m16.688-.001a1.269 1.269 0 01.66-.796L22 12.93v-1.86l-.996-.505a1.269 1.269 0 01-.66-.796M7.678 4.522a1.269 1.269 0 01-1.03.096l-1.06-.348L4.27 5.587l.348 1.062a1.269 1.269 0 01-.096 1.03m11.8 11.799a1.269 1.269 0 011.03-.096l1.06.348 1.318-1.317-.348-1.062a1.269 1.269 0 01.096-1.03m-14.956.001a1.269 1.269 0 01.096 1.03l-.348 1.06 1.317 1.318 1.062-.348a1.269 1.269 0 011.03.096m11.799-11.8a1.269 1.269 0 01-.096-1.03l.348-1.06-1.317-1.318-1.062.348a1.269 1.269 0 01-1.03-.096"
                                fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                    @endcan
                </div>
                <div class="posts_followers_following">
                    <div><strong>{{ $postCount }}</strong> posts</div>
                    <div><strong>{{ $followersCount }}</strong> followers</div>
                    <div><strong>{{ $followingCount }}</strong> following</div>
                </div>
                <div class="title_desc">
                    <div class="title">{{ $user->profile->title }}</div>
                    <div class="desc">{{ $user->profile->description }} <br>
                        <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="line"></div>
        <section class="posts_saved_tagged">
            <div class="posts selected">
                <svg aria-label="" class="_8-yf5 " color="#262626" fill="#262626" height="12" role="img"
                    viewBox="0 0 24 24" width="12">
                    <rect fill="none" height="18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="18" x="3" y="3"></rect>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        x1="9.015" x2="9.015" y1="3" y2="21"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        x1="14.985" x2="14.985" y1="3" y2="21"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        x1="21" x2="3" y1="9.015" y2="9.015"></line>
                    <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        x1="21" x2="3" y1="14.985" y2="14.985"></line>
                </svg>
                <div>POSTS</div>
            </div>
            <div class="saved">
                <svg aria-label="" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="12" role="img"
                    viewBox="0 0 24 24" width="12">
                    <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                </svg>
                <div>SAVED</div>
            </div>
            <div class="tagged">
                <svg aria-label="" class="_8-yf5 " color="#8e8e8e" fill="#8e8e8e" height="12" role="img"
                    viewBox="0 0 24 24" width="12">
                    <path
                        d="M10.201 3.797L12 1.997l1.799 1.8a1.59 1.59 0 001.124.465h5.259A1.818 1.818 0 0122 6.08v14.104a1.818 1.818 0 01-1.818 1.818H3.818A1.818 1.818 0 012 20.184V6.08a1.818 1.818 0 011.818-1.818h5.26a1.59 1.59 0 001.123-.465z"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    </path>
                    <path d="M18.598 22.002V21.4a3.949 3.949 0 00-3.948-3.949H9.495A3.949 3.949 0 005.546 21.4v.603"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    </path>
                    <circle cx="12.072" cy="11.075" fill="none" r="3.556" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"></circle>
                </svg>
                <div>TAGGED</div>
            </div>
        </section>
        <section class="photo_grid">
            @foreach ($user->posts as $post)
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="">
                </a>
            @endforeach
        </section>
    </div>
@endsection
