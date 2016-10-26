@extend('_frontend.master')
@section('content')
    <article class="page">
        <header class="page__header">
            <h1>{{$page->title}}</h1>
        </header>
        <section class="page__content">
            {{$page->content}}
        </section>
    </article>
    @if(count($page->gallery)!=0 && count($page->gallery->pictures)!=0)
        <div class="page__gallery">
            <div class="page__carousel owl-carousel">
                @foreach($page->gallery->pictures as $picture)
                    <div>
                        <a href="{{URL::to($picture->picture_path)}}" data-title="{{$picture->name}}" data-lightbox="{{$page->gallery->name}}">
                            <img class="img-responsive" src="{{URL::to($picture->thumbnail_path)}}" alt="{{$picture->name}}"
                                 title="{{$page->gallery->name}}"/>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@stop