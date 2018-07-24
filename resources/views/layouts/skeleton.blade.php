<!DOCTYPE html>
<html lang="en">


@include('layouts.head')

<body>

@include ('layouts.navbar')

@yield('featued')

{{--Page Content--}}
<div class="container">

@yield ('content')


@yield('products')



@yield('references')



</div>
{{-- /container--}}
@include ('layouts.footer')