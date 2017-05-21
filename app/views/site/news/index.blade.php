@extend('_frontend.master')
@section('page-title')
<h1>Szent Péteri Levelek</h1>
@stop
@section('sidebar')
@stop
@section('content')
<div class="container-flex">
    <div class="news-list">
        @foreach($documents as $doc)
            <article class="news-item">
                <div class="card card--with-hover">
                    <header class="news-item__header">
                        <div class="news-item__icon">
                            <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCAzMDkuMjY3IDMwOS4yNjciIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMwOS4yNjcgMzA5LjI2NzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCI+CjxnPgoJPHBhdGggc3R5bGU9ImZpbGw6I0UyNTc0QzsiIGQ9Ik0zOC42NTgsMGgxNjQuMjNsODcuMDQ5LDg2LjcxMXYyMDMuMjI3YzAsMTAuNjc5LTguNjU5LDE5LjMyOS0xOS4zMjksMTkuMzI5SDM4LjY1OCAgIGMtMTAuNjcsMC0xOS4zMjktOC42NS0xOS4zMjktMTkuMzI5VjE5LjMyOUMxOS4zMjksOC42NSwyNy45ODksMCwzOC42NTgsMHoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNCNTM2Mjk7IiBkPSJNMjg5LjY1OCw4Ni45ODFoLTY3LjM3MmMtMTAuNjcsMC0xOS4zMjktOC42NTktMTkuMzI5LTE5LjMyOVYwLjE5M0wyODkuNjU4LDg2Ljk4MXoiLz4KCTxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMjE3LjQzNCwxNDYuNTQ0YzMuMjM4LDAsNC44MjMtMi44MjIsNC44MjMtNS41NTdjMC0yLjgzMi0xLjY1My01LjU2Ny00LjgyMy01LjU2N2gtMTguNDQgICBjLTMuNjA1LDAtNS42MTUsMi45ODYtNS42MTUsNi4yODJ2NDUuMzE3YzAsNC4wNCwyLjMsNi4yODIsNS40MTIsNi4yODJjMy4wOTMsMCw1LjQwMy0yLjI0Miw1LjQwMy02LjI4MnYtMTIuNDM4aDExLjE1MyAgIGMzLjQ2LDAsNS4xOS0yLjgzMiw1LjE5LTUuNjQ0YzAtMi43NTQtMS43My01LjQ5LTUuMTktNS40OWgtMTEuMTUzdi0xNi45MDNDMjA0LjE5NCwxNDYuNTQ0LDIxNy40MzQsMTQ2LjU0NCwyMTcuNDM0LDE0Ni41NDR6ICAgIE0xNTUuMTA3LDEzNS40MmgtMTMuNDkyYy0zLjY2MywwLTYuMjYzLDIuNTEzLTYuMjYzLDYuMjQzdjQ1LjM5NWMwLDQuNjI5LDMuNzQsNi4wNzksNi40MTcsNi4wNzloMTQuMTU5ICAgYzE2Ljc1OCwwLDI3LjgyNC0xMS4wMjcsMjcuODI0LTI4LjA0N0MxODMuNzQzLDE0Ny4wOTUsMTczLjMyNSwxMzUuNDIsMTU1LjEwNywxMzUuNDJ6IE0xNTUuNzU1LDE4MS45NDZoLTguMjI1di0zNS4zMzRoNy40MTMgICBjMTEuMjIxLDAsMTYuMTAxLDcuNTI5LDE2LjEwMSwxNy45MThDMTcxLjA0NCwxNzQuMjUzLDE2Ni4yNSwxODEuOTQ2LDE1NS43NTUsMTgxLjk0NnogTTEwNi4zMywxMzUuNDJIOTIuOTY0ICAgYy0zLjc3OSwwLTUuODg2LDIuNDkzLTUuODg2LDYuMjgydjQ1LjMxN2MwLDQuMDQsMi40MTYsNi4yODIsNS42NjMsNi4yODJzNS42NjMtMi4yNDIsNS42NjMtNi4yODJ2LTEzLjIzMWg4LjM3OSAgIGMxMC4zNDEsMCwxOC44NzUtNy4zMjYsMTguODc1LTE5LjEwN0MxMjUuNjU5LDE0My4xNTIsMTE3LjQyNSwxMzUuNDIsMTA2LjMzLDEzNS40MnogTTEwNi4xMDgsMTYzLjE1OGgtNy43MDN2LTE3LjA5N2g3LjcwMyAgIGM0Ljc1NSwwLDcuNzgsMy43MTEsNy43OCw4LjU1M0MxMTMuODc4LDE1OS40NDcsMTEwLjg2MywxNjMuMTU4LDEwNi4xMDgsMTYzLjE1OHoiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                        </div>
                        <div class="news-item__title">
                            <h3 class="news-item__title-name">{{$doc->name}}</h3>
                            <div class="news-item__title-info">
                                <span class="glyphicon glyphicon-cloud-upload"></span> {{$doc->getCreatedAt()}}
                            </div>
                        </div>
                    </header>
                    <section class="news-item__content">
                        <p>{{$doc->description}}</p>
                    </section>
                    <footer class="news-item__footer">
                        {{HTML::decode(HTML::link($doc->path,'Letöltés',array('class'=>'btn btn--green','target'=>'_blank')))}}
                    </footer>
                </div>
            </article>
        @endforeach
            <section class="main-pagination news-list__pagination">
                {{$documents->links()}}
            </section>
    </div>
</div>
@stop