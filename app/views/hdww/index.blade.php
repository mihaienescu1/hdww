@extends('hdww.layout')

@section('content')
	@parent
    
    @include('hdww.partials.nav-header')
    <div class="row clearfix">@include('hdww.partials.search-main')</div>
    <br />
    <h3>Most Recent</h3>
    <br />
    <div class="row clearfix">@include('hdww.partials.tabs')</div>
@stop