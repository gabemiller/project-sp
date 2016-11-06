@extends('_frontend.master')
@section('header')
    <div class="container-flex">
        <section class="main-header__content">
            <h1>Dicsőség Jézus Krisztusnak!</h1>
            <p>
                Üdvözöljük a Sajószentpéteri Görög Katolikus Egyházközség megújult weboldalán.
                Kellemes időtöltést kívánunk.
            </p>
            <a class="btn btn--default" href="#tartalom">Körülnézek</a>
        </section>
    </div>
    <span class="main-header__arrow animated bounce"></span>
@stop
@section('content')
    <div class="container-flex">
        <div class="article-list">
            @if(count($articles))
                @foreach($articles as $article)
                    <article class="article-item">
                        <div class="card card--with-hover">
                            <header class="article-item__header">
                                @if(count($article->gallery) && count($article->gallery->pictures))
                                    <div class="article-item__background"
                                         style="background-image: url('{{$article->gallery->pictures[0]->picture_path}}')"></div>
                                @endif
                                <h1 class="article-item__title @if(count($article->gallery) && count($article->gallery->pictures)) article-item__title--has-bg @endif">{{HTML::linkRoute('hirek.show',$article->title,array('id'=>$article->id,'title'=>\Str::slug($article->title)))}}</h1>
                                <span class="article-item__info @if(count($article->gallery) && count($article->gallery->pictures)) article-item__info--has-bg @endif">{{$article->getCreatedAt()}}</span>
                            </header>
                            <section class="article-item__content">
                                <p>{{$article->getParragraph()}}</p>

                            </section>
                            <footer  class="article-item__footer">
                                {{HTML::linkRoute('hirek.show','Elolvasom',array('id'=>$article->id,'title'=>\Str::slug($article->title)),array('class'=>'btn btn--green'))}}
                                @if(sizeof($article->tagNames()) > 0)
                                    <ul class="article-item__tags">
                                        @foreach(\Divide\Helper\Tag::getTagByName($article->tagNames()) as $tag)
                                            <li>{{HTML::linkRoute('hirek.tag',$tag->name,array('id'=>$tag->id,'tagSlug'=>\Str::slug($tag->slug)))}}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </footer>
                        </div>
                    </article>
                @endforeach

                <div class="article-list__pagination">
                    {{$articles->links()}}
                </div>
            @else
                <div class="article-list__empty">
                    <p>Jelenleg nincs megjelenítendő hír!</p>
                </div>
            @endif
        </div>
    </div>
@stop