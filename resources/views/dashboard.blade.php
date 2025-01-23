@extends('layout.app')

@section('page-title', 'Dashboard')
@section('breadcrumb')
    @include('components.breadcrumb', [
        "breadcrumblist" => [
            [
                "title" => "Data",
                "icon" => "bx-data"
            ],
            [
                "title" => "Reviewer",
            ],
        ]
    ])

@endsection

@section('content')
    
<div class="w-full">

</div>

@endsection