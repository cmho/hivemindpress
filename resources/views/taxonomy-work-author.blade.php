@extends('layouts.app')

@section('content')
@php
    $author = pods_field('work-author', get_queried_object()->term_id, 'author_name', true);
    $website = pods_field('work-author', get_queried_object()->term_id, 'website', true);
    $bio = pods_field('work-author', get_queried_object()->term_id, 'bio', true);
    $itchio = pods_field('work-author', get_queried_object()->term_id, 'itchio', true);
    $twitter = pods_field('work-author', get_queried_object()->term_id, 'twitter', true);
    $insta = pods_field('work-author', get_queried_object()->term_id, 'instagram', true);
@endphp
  <h2>Work by {{ $author }}</h2>
    <div class="bio">
        {!! $bio !!}
    </div>
    <ul class="social">
        @if($website && $website != "")
            <li><a href="{{$website}}" rel="external" target="_blank"></a></li>
        @endif
    </ul>
  @if (!have_posts())
    No content to display yet.
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
