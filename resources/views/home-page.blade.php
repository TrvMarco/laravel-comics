@extends('layouts.base')

@section('page-title')
    Home Page | DC Comics
@endsection

@section('page-content')
    <main>
        <div class="container">
            <div class="row gy-5">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="comic-card text-uppercase">
                        <div class="comic-img pb-3">
                            <img src="{{$comic['thumb']}}" alt="">
                        </div>
                        <h6>{{$comic['series']}}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection