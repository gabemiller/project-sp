@extends('_frontend.master')
@section('content')
    <div class="container-flex">
        <section class="page">
            <header class="page__header">
                <h1>{{$event->title}}</h1>
            </header>
            <section class="page__content">
                {{$event->content}}
            </section>
            @if(count($event->gallery)!=0 && count($event->gallery->pictures)!=0)
                <section class="page__gallery">
                    <div class="page__carousel owl-carousel owl-theme">
                        @foreach($event->gallery->pictures as $picture)
                            <a href="{{URL::to($picture->picture_path)}}" data-title="{{$picture->name}}" data-lightbox="{{$event->gallery->name}}">
                                <img class="img-responsive" src="{{URL::to($picture->thumbnail_path)}}" alt="{{$picture->name}}"
                                     title="{{$event->gallery->name}}"/>
                            </a>
                        @endforeach
                    </div>
                </section>
            @endif
        </section>
    </div>
@stop