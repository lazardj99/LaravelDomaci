@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="d-flex flex-column my-4">
        <h3>All Data</h3>
        <div class="  d-flex flex-column align-items-center">
            <div  class=" d-flex flex-column align-items-center border border-dark rounded w-100">
                    <a href="{{ url('api/picas') }}" class="btn btn-dark my-4  w-50">All Picas</a>
                    <a href="{{ url('api/users') }}" class="btn btn-dark my-4  w-50">All Users</a>
                    <a href="{{ url('api/countries') }}" class="btn btn-dark my-4  w-50">All Countries</a>
                    <a href="{{ url('api/userpica') }}" class="btn btn-dark my-4  w-50">All Users Picas</a>
              
            </div>
  
        </div>
    </div>
    <div class="d-flex flex-column my-4">
        <div class="d-flex ">
                <h3>Spesific Data</h3>
              
               
            </form>
           
        </div>
   
        <div class="  d-flex flex-column align-items-center">
            <div  class=" d-flex flex-column align-items-center border border-dark rounded w-100">

                <form action="api/user/spesific" method="POST" class="w-100"> 
                     <div class="d-flex w-100 justify-content-center align-items-center">
                        <input type="number" placeholder="ID" name ="id"  class=" ml-3 form-control col-2">
                        <button type="submit" class="w-50 btn btn-success my-4  ">Spesific User</button>
                    </div>
                </form>

                <form action="api/pica/spesific" method="POST" class="w-100"> 
                     <div class="d-flex w-100  justify-content-center align-items-center">
                        <input type="number" placeholder="ID" name ="id"  class=" ml-3 form-control col-2">
                        <button type="submit" class="w-50 btn btn-success my-4  ">Spesific Pica</button>
                    </div>
                </form>
                <form action="api/drzava/spesific" method="POST" class="w-100"> 
                     <div class="d-flex w-100  justify-content-center align-items-center">
                        <input type="number" placeholder="ID" name ="id"  class=" ml-3 form-control col-2">
                        <button type="submit" class="w-50 btn btn-success my-4  ">Spesific Countrie</button>
                    </div>
                </form>

          
             


        
            </div>
    
        </div>
    </div>

    <div class="d-flex flex-column my-4">
        <h3>Insert Data</h3>
        <div class="  d-flex flex-column align-items-center">
            <div  class=" d-flex flex-column align-items-center border border-dark rounded w-100">
                <a href="{{ url('api/pica') }}" class="btn btn-primary my-4  w-50">Insert Pica</a>
                <a href="{{ url('api/drzava') }}" class="btn btn-primary my-4  w-50">Insert Drzava</a>
        
            </div>
    
        </div>
    </div>
</div>
@endsection
