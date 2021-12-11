@if (Auth::user() -> is_favorites($micropost->id))
        {!! Form::open(['route' => ['favorites.unfavorite',$micropost->id],'method' => 'delete']) !!}
            {!! Form::submit("UnFav", ['class' => "btn btn btn-secondary btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.favorite',$micropost->id]]) !!}
            {!! Form::submit('Fav', ['class' => "btn btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
@endif