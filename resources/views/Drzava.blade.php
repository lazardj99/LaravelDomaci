@extends('layouts.app')

@section('content')
<div class="container pt-5 d-flex justify-content-center  ">
    
   <form action="drzava/insert"  method="POST" class="d-flex w-50 flex-column border rounded  pt-5  " style="background-color: #A7ADC6;">
               
                {{ csrf_field() }}
                <div class=" w-100 d-flex justify-content-around mb-3">
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <label  class=" "for="Naziv"> <span class="align-center">Naziv</span></label>
                    </div>
                    
                    <div class="col-8   d-flex justify-content-start">
                        <input class="col-7 form-control" type="text" name="Naziv"  placeholder="Naziv Drzave">
                    </div>
            
                </div>

            
                <div class=" w-100 d-flex justify-content-end mb-3">
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <label  class=" "for="Cena"> <span class="align-center"></span></label>
                    </div>
                
                    <div class="col-8   d-flex justify-content-start">
                         <button type="submit" class="btn btn-dark col-7">Save</button>
                    </div>
          
            
                </div>
               

   </form>
</div>
@endsection