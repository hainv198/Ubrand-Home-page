@extends('layouts.homepage.master');
@section('content_ubrand')
    @include('layouts.homepage.components.communication.banner')
    @include('layouts.homepage.components.communication.digital')
    @include('layouts.homepage.components.communication.building')

    @include('layouts.homepage.components.communication.share')
    @include('layouts.homepage.components.home.partner')
    @include('layouts.homepage.components.home.contact')
    @include('layouts.homepage.components.home.questions')
@endsection
