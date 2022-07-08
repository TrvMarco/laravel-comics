@extends('layouts.base')

@section('page-title')
    Comics | DC Comics
@endsection

@section('page-content')
    <main>
        <section class="blue-bar"></section>
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-8">
                    <h1>{{$singleComic['title']}}</h1>
                    <div class="comic-price-aviab d-flex justify-content-between">
                        <div class="price-container d-flex justify-content-between">
                            <p>U.S. Price: {{$singleComic['price']}}</p><span>AVIABLE</span>
                        </div>  
                        <div class="check-avb">
                            Check Aviability
                        </div>
                    </div>
                    <p>{{$singleComic['description']}}</p>
                </div>
                <div class="col-4">
                    <h2>adv-placeholder</h2>
                </div>
            </div>
        </div>
        <section class="comic-specs">
            
        </section>
    </main>
@endsection