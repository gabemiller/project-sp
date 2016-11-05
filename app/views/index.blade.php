@extends('_frontend.master')
@section('content')
    <div class="container-flex">
        <div id="hirek" class="article-list">
            @if(count($articles))
                @foreach($articles as $article)
                    <article class="article-list__item">
                        @if(count($article->gallery) && count($article->gallery->pictures))
                            <div class="article-list__item__image"
                                 style="background-image: url('{{$article->gallery->pictures[0]->picture_path}}')"></div>
                        @endif
                        <header>
                            <h2>{{HTML::linkRoute('hirek.show',$article->title,array('id'=>$article->id,'title'=>\Str::slug($article->title)))}}</h2>
                        </header>
                        <section class="article-list__item__content">
                            <p>{{$article->getParragraph()}}</p>
                            {{HTML::linkRoute('hirek.show','Bővebben',array('id'=>$article->id,'title'=>\Str::slug($article->title)),array('class'=>'articles-item__button'))}}
                        </section>
                        <footer>
                            <p class="article-list__item__info">{{$article->getCreatedAt()}}</p>
                        </footer>
                    </article>
                @endforeach

                <div class="article-list__pagination">
                    {{$articles->links()}}
                </div>
            @else
                @for($i=0; $i<10; $i++)
                    <article class="article-item">
                        <div class="card card--with-hover">
                            <header class="article-item__header">
                                <div class="article-item__background" style="background-image: url('https://source.unsplash.com/category/nature/300x300')" >
                                </div>
                                <h1 class="article-item__title article-item__title--has-bg"><a href="#">Solum subsidere et circumfuso timebat</a></h1>
                                <span class="article-item__info article-item__info--has-bg">2016. szeptember 30., péntek 13:21</span>
                            </header>
                            <section class="article-item__content">
                                <p>Totidem naturae sidera reparabat reparabat austro. Cura solidumque aurea liberioris recessit agitabilis di erat: quinta. Freta partim pluvialibus tollere mundo. Illis siccis! Orba distinxit fecit habitandae cesserunt vos arce adspirate orba phoebe?</p>
                            </section>
                            <footer class="article-item__footer">
                                <a class="btn btn--green" href="#">Elolvasom</a>
                                <ul class="article-item__tags">
                                    <li><a href="#">kategória</a></li>
                                    <li><a href="#">kategória</a></li>
                                    <li><a href="#">kategória</a></li>
                                    <li><a href="#">kategória</a></li>
                                    <li><a href="#">kategória</a></li>
                                    <li><a href="#">kategória</a></li>
                                    <li><a href="#">kategória</a></li>
                                    <li><a href="#">kategória</a></li>
                                </ul>
                            </footer>
                        </div>
                    </article>
                @endfor
                <div class="article-list__empty hidden">
                    <p>Jelenleg nincs megjelenítendő hír!</p>
                </div>
            @endif
        </div>
    </div>
@stop