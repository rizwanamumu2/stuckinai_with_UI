@extends('layouts.master')

@section('content')
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Search Result for '{{ $query }}'</h1>
    </div>
    <div class="container" style="margin-bottom:150px;margin-top:30px">

        @if(isset($searchResults))
            @if ($searchResults-> isEmpty())
                <h3>Sorry, no results found for the term <b>"{{ $query }}"</b>.</h2>
            @else
                <h3>There are {{ $searchResults->count() }} results for the term <b>"{{ $query }}"</b></h2>
                <hr />
                @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                    <h3>{{ ucwords($type) }}</h2>
                    @foreach($modelSearchResults as $searchResult)
                        <ul>
                                <a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a>
                        </ul>
                    @endforeach
                @endforeach
            @endif
        @endif
</div>
@endsection 

 