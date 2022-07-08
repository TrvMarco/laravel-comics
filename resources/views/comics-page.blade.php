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
                    <span>aaa</span>
                    <img src="{{ asset('img/adv.jpg') }}" alt="Adv">
                </div>
            </div>
        </div>
        <section class="comic-specs">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h4>Talent</h4>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                Art by:
                            </div>
                            <div class="col-8">
                                <p>
                                    @foreach ($singleComic['artists'] as $artist)
                                        {{$artist}},
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                Written by:
                            </div>
                            <div class="col-8">
                                <p>
                                    @foreach ($singleComic['writers'] as $writer)
                                    {{$writer}},
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-6">
                        <h4>Specs</h4>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                Series:
                            </div>
                            <div class="col-8 text-uppercase">
                                {{$singleComic['series']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                U.S Price:
                            </div>
                            <div class="col-8 text-uppercase">
                                {{$singleComic['price']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                On Sale Date:
                            </div>
                            <div class="col-8 text-uppercase">
                                {{$singleComic['sale_date']}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection