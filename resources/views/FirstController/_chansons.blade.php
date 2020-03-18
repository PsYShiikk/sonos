<div class="music_all">
    @foreach($chansons as $c)

        <div class="musicbox">
            <div class="img_music">
                <div class="overlaymusic chanson" data-img="{{$c->coverurl}}" data-file="{{$c->url}}" data-author="{{$c->utilisateur->username}}" data-id="{{$c->user_id}}" data-name="{{$c->nom}}">
                    <div class="playbutton">
                        <img src="/images/icones/play.png" alt="playbutton">
                    </div>
                </div>
                <img src="{{$c->coverurl}}">
            </div>
            <a href="#" class="chanson" data-img="{{$c->coverurl}}" data-file="{{$c->url}}" data-author="{{$c->utilisateur->username}}" data-id="{{$c->user_id}}" data-name="{{$c->nom}}">{{$c->nom}}</a>
            <a href="/utilisateur/{{$c->user_id}}"><span>@</span>{{$c->utilisateur->username}}</a>
        </div>

    @endforeach
</div>
