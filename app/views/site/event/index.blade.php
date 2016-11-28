@extends('_frontend.master')
@section('content')
    <div class="container-flex">
        <div class="article-list">
            @if(count($events))
                @foreach($events as $event)
                    <article class="article-item">
                        <div class="card card--with-hover">
                            <header class="article-item__header">
                                @if(count($event->gallery) && count($event->gallery->pictures))
                                    <div class="article-item__background"
                                         style="background-image: url('{{$event->gallery->pictures[0]->picture_path}}')"></div>
                                @endif
                                <h1 class="article-item__title @if(count($event->gallery) && count($event->gallery->pictures)) article-item__title--has-bg @endif">{{HTML::linkRoute('hirek.show',$event->title,array('id'=>$event->id,'title'=>\Str::slug($event->title)))}}</h1>
                                <span class="article-item__info @if(count($event->gallery) && count($event->gallery->pictures)) article-item__info--has-bg @endif">{{$event->getStartAt()}} - {{$event->getEndAt()}}</span>
                            </header>
                            <section class="article-item__content">
                                <p>{{$event->getParragraph()}}</p>

                            </section>
                            <footer  class="article-item__footer">
                                {{HTML::linkRoute('hirek.show','Elolvasom',array('id'=>$event->id,'title'=>\Str::slug($event->title)),array('class'=>'btn btn--green'))}}
                                @if(sizeof($event->tagNames()) > 0)
                                    <ul class="article-item__tags">
                                        @foreach(\Divide\Helper\Tag::getTagByName($event->tagNames()) as $tag)
                                            <li>{{HTML::linkRoute('hirek.tag',$tag->name,array('id'=>$tag->id,'tagSlug'=>\Str::slug($tag->slug)))}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </footer>
                        </div>
                    </article>
                @endforeach

                <div class="article-list__pagination">
                    {{$events->links()}}
                </div>
            @else
                <div class="article-list__empty">
                    <p>Jelenleg nincs megjelenítendő esemény!</p>
                </div>
            @endif
        </div>
    </div>
@stop