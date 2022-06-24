@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center ">



@foreach ($drzave as $drzava)

        <div class="d-flex flex-column  border justify-content-center align-items-center my-4 w-50  ">
            <div>
                <h4>{{$drzava->Naziv}}</h4>
            </div>
        
        

        </div>
       
@endforeach
   
</div>
@endsection