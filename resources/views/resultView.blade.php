@extends('layouts.app')

@section('content')
<div class="container pt-5 d-flex justify-content-center align-items-center flex-column  ">
    
@if($result)         
      <h1>Success</h1>       
@else
      <h1>Failed</h1>       
@endif
<a href="{{ url('home') }}" class="btn btn-primary my-4  w-50">Home</a>

</div>
@endsection