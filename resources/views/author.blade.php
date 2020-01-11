@extends('layouts.app')
@php
    global $wp_query;
    $curauth = $wp_query->get_queried_object();
@endphp

@section('content')
    @if (!have_posts())
        <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
    @endif

    <div class="description">
        {!! $curauth->description !!}
    </div>

    @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
    @endwhile

    {!! get_the_posts_navigation() !!}
@endsection
