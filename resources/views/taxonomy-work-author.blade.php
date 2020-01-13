@extends('layouts.app')

@section('content')
  <h2>{{ pods_field_display('work-author', get_the_ID(), 'author_name') }} </h2>
  @if (!have_posts())
    No content to display yet.
  @endif

  @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
