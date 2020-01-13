@extends('layouts.app')
@php
    $author = pods('work-author', get_queried_object()->term_id);
    print_r($author);
@endphp

@section('content')
  <h2>{{  }} </h2>
  @if (!have_posts())
    No content to display yet.
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
