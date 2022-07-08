@extends('layouts.base')

@section('page-title')
    Home Page | DC Comics
@endsection

@section('page-content')
    <main>
        <section class="comics">
            <div class="container">
                <div class="row gy-5">
                    @foreach ($comics as $id => $comic)
                    <div class="col-2">
                        <a class="text-decoration-none text-white" href="{{ route('fumetto', ['id' => $id]) }}"><x-card :image="$comic['thumb']" :title="$comic['series']"/></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection