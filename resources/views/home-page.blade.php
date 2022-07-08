@extends('layouts.base')

@section('page-title')
    Home Page | DC Comics
@endsection

@section('page-content')
    <main>
        <section class="comics">
            <div class="container">
                <div class="row gy-5">
                    @foreach ($comics as $comic)
                    <div class="col-2">
                        <x-card :image="$comic['thumb']" :title="$comic['series']"/>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection