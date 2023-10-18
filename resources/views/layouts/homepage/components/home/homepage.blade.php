@extends('layouts.homepage.master')

@section('content_ubrand')
    @include('layouts.homepage.components.home.banner')
    @include('layouts.homepage.components.home.information')
    @include('layouts.homepage.components.home.faq')
    @include('layouts.homepage.components.home.pricing')
    @include('layouts.homepage.components.home.album')
    @include('layouts.homepage.components.home.social')
@endsection
