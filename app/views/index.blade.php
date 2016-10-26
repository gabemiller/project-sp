@extends('_frontend.master')
@section('content')
    <div class="main__welcome">
        <a href="http://www.adhatvonal.hu/?cgen=szervezet-adatlap&id=1196"></a>
    </div>
    <div class="articles">
        @if(count($articles))
            @foreach($articles as $article)
                <article class="articles-item">
                    @if(count($article->gallery) && count($article->gallery->pictures))
                        <div class="articles-item__image"
                             style="background-image: url('{{$article->gallery->pictures[0]->picture_path}}')"></div>
                    @endif
                    <header>
                        <h2 class="articles-item__title">{{HTML::linkRoute('hirek.show',$article->title,array('id'=>$article->id,'title'=>\Str::slug($article->title)))}}</h2>
                    </header>
                    <section>
                        <p class="articles-item__content">{{$article->getParragraph()}}</p>
                        {{HTML::linkRoute('hirek.show','Bővebben',array('id'=>$article->id,'title'=>\Str::slug($article->title)),array('class'=>'articles-item__button'))}}
                    </section>
                    <footer>
                        <p class="articles-item__info">{{$article->getCreatedAt()}}</p>
                    </footer>
                </article>
            @endforeach

            <div class="articles-pagination">
                {{$articles->links()}}
            </div>
        @else
            <div class="articles-empty">
                <p>Jelenleg nincs megjelenítendő hír!</p>
            </div>
        @endif
    </div>
@stop