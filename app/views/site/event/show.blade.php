@extends('_frontend.master')
@section('content')
<div class="event">
    <h1>{{$event->title}}</h1>
    <p class="text-muted">Az esemény ideje: {{$event->getStartAt()}} - {{$event->getEndAt()}} </p>
    <div class="event-content">
        {{$event->content}}
    </div>
    @if(count($event->gallery)!=0 && count($event->gallery->pictures)!=0)
        <h4>Galéria</h4>

        <div class="event-gallery">
            <div class="event-carousel owl-carousel">
                @foreach($event->gallery->pictures as $picture)
                    <div>
                        <a href="{{URL::to($picture->picture_path)}}" title="{{$picture->name}}" data-gallery>
                            <img class="img-responsive" src="{{URL::to($picture->thumbnail_path)}}" alt="{{$picture->name}}"
                                 title="{{$picture->name}}"/>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
@stop