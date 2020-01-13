@extends('layouts.app')

@section('content')
@php
    $author = pods_field('work-author', get_queried_object()->term_id, 'author_name', true);
    $website = pods_field('work-author', get_queried_object()->term_id, 'website', true);
    $itchio = pods_field('work-author', get_queried_object()->term_id, 'itchio', true);
@endphp
  <h2>{{ $author }}</h2>
  @if (!have_posts())
    No content to display yet.
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
