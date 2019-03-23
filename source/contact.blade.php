@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
<h1>Contact</h1>

<p class="mb-8">
    If you want to work with me, or just to say hi, get in touch with me via <a href="https://twitter.com/helloImlearnrr">Twitter</a>
</p>
@stop
