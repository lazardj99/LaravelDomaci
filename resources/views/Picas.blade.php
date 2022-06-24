@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center ">
   

@foreach ($picas as $pica)

        <div class="d-flex flex-column  border justify-content-center align-items-center my-4 w-50  ">
            <div>
                <h4>{{$pica->naziv}}</h4>
            </div>
            <div class="d-flex   flex-column   py-1 px-4 w-100 justify-content-around align-items-start" style="background-color: #A7ADC6;">
                <p>Cena:   {{$pica->Cena}} </p>
                <p>Poreklo:   {{$pica->poreklo_id}}</p>
                <p>Ocena:   {{$pica->ocena}}</p>
            </div>
        

        </div>
       
@endforeach
   
</div>
@endsection