@extends('_frontend.master')
@section('breadcrumb')
{{-- HTML::decode(Breadcrumbs::render('hirek.show',$article)) --}}
@stop

@section('content')
    <article class="page">
        <header class="page__header">
            <h1>{{$article->title}}</h1>
        </header>
        <section class="page__content">
            {{$article->content}}
        </section>
    </article>
    @if(count($article->gallery)!=0 && count($article->gallery->pictures)!=0)
        <div class="page__gallery">
            <div class="page__carousel owl-carousel owl-theme">
                @foreach($article->gallery->pictures as $picture)
                    <a href="{{URL::to($picture->picture_path)}}" data-title="{{$picture->name}}" data-lightbox="{{$article->gallery->name}}">
                        <img class="img-responsive" src="{{URL::to($picture->thumbnail_path)}}" alt="{{$picture->name}}"
                             title="{{$article->gallery->name}}"/>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
@stop