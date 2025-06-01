@extends('layouts.main_layout')
@section('content')

@if(!empty($MyName))
<p class="display-6 text-secondary text-center py-5">{{$MyName}}</p>
@endif

@endsection