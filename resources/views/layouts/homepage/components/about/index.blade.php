@extends('layouts.homepage.master');
@section('content_ubrand')
    @include('layouts.homepage.components.about.banner')
    @include('layouts.homepage.components.about.about-business')
    @include('layouts.homepage.components.about.why-us')
    @include('layouts.homepage.components.about.blog')
    @include('layouts.homepage.components.home.testimonial')
@endsection
