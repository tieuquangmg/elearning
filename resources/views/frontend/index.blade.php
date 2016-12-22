@extends('frontend._layout.outline')
@section('container')
    @include('frontend._module.header')
    @include('frontend._module.nav')
    <!-- Services Section -->
    @include('frontend._module.services')

    <!-- Portfolio Grid Section -->
    @include('frontend._module.portfolio')

    @include('frontend._module.news')

    <!-- About Section -->
    @include('frontend._module.about')

    <!-- Team Section -->
    @include('frontend._module.team')

    <!-- Clients Aside -->
    @include('frontend._module.clients')

    <!-- Contact Section -->
    @include('frontend._module.contact')

    @include('frontend._module.footer')
    <!-- Portfolio Modals -->
    @include('frontend._modal.portfolio')
@endsection