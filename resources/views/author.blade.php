@extends('layouts.app')
@php
    global $wp_query;
    $curauth = $wp_query->get_queried_object();
@endphp

@section('content')
    <h2>{{ $curauth->display_name }}</h2>
    <div class="description">
        {!! $curauth->description !!}
    </div>

    @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
    @endwhile

    {!! get_the_posts_navigation() !!}
@endsection
