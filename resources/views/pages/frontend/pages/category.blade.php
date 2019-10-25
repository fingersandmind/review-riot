@extends('layouts.frontend.master')

@push('additionalCSS')
<style>
.card .card-header {
    padding: 1.5rem 1.25rem 0 1.25rem;
    background: #f4f5fb;
    border-bottom: 0;
}
.card .card-header .card-title {
    margin-bottom: .7rem;
    font-size: 1rem;
    font-weight: 700;
    line-height: 100%;
}
.card .card-header .card-sub-title {
    margin-bottom: 0;
    font-size: .8rem;
    color: #828c94;
    line-height: 170%;
}
.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.card .card-link {
    color: #4472ab;
    font-size: .8rem;
}
body {
    margin: 0;
    padding: 0;
    font: normal .875rem 'Ubuntu', 'Roboto Slab', sans-serif;
    color: #2e323c;
    background: linear-gradient(-155deg, #0d0d0d 15%, #1a1a1a 50%, #0d0d0d 85%);
    min-height: 100%;
    position: relative;
    background-attachment: fixed;
    background-size: cover;
    background-image: none;
}
</style>
@endpush

@section('content')
    <div class="container">
        <div class="row pb-5 pt-5">
            <div class="col-xl-12 pb-5">
                <span>{{ $articles->count() }} result(s) found.</span>
            </div>
            @if(!empty($articles))
                @foreach($articles as $article)
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 pb-5">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">{{ $article->title }}</div>
                                <div class="card-sub-title">{{ $article->user->name }}</div>
                            </div>
                            <div class="card-body">
                                <p class="card-text pb-4">{{ str_limit(strip_tags($article->body), $limit = 200, $end = '...') }}</p>
                                <a href="{{ route('article.show', $article->slug) }}" class="card-link">View</a>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            @endif
        </div>
        {{ $articles->links() }}
    </div>

@endsection