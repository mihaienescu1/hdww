@extends('hdww.layout')

@section('content')
	@parent
    @include('hdww.partials.nav-header')
    
    {{ Datatable::table()
    ->addColumn('id', 'company_name')       // these are the column headings to be shown
    ->setUrl(URL::to('/api/companies'))   // this is the route where data will be retrieved
    ->render() }}
    
@stop