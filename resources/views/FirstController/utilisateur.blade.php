@extends('layout.template')

@section('contenu')

    <div class="top_user_page">
        <div class="info_user">
            <img src="{{$utilisateur->avatar}}" alt="photo de {{$utilisateur->username}}" class="photo_de_profil">
            <span >{{$utilisateur->forename}} {{$utilisateur->lastname}}</span>
            <div><span>@</span>{{ $utilisateur->username }}</div>
            <div>
                <span class="stats_home">
                    {{$utilisateur->IlsMeSuivent()->count()}}
                    @if($utilisateur->IlsMeSuivent()->count() > 1)
                        followers
                    @else
                        follower
                    @endif
                </span>
                <span class="stats_home">
                    {{$utilisateur->jeLesSuit()->count()}}
                    @if($utilisateur->jeLesSuit()->count() > 1)
                        followings
                    @else
                        following
                    @endif
        </span></div>
        </div>
    </div>

    @auth
        @if(Auth::id() != $utilisateur->id)
            @if(Auth::user()->jeLesSuit->contains($utilisateur->id))
                <a href="/suivre/{{$utilisateur->id}}">Following</a>
            @else
                <a href="/suivre/{{$utilisateur->id}}">Follow</a>
            @endif
        @endif
    @endauth

    @if(Auth::id() == $utilisateur->id)
        //page pour moi
    @else
        <h2>His music</h2>
        @include('FirstController._chansons', ["chansons" => $utilisateur->chansons])
    @endif





@endsection
