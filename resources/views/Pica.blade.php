@extends('layouts.app')

@section('content')
<div class="container pt-5 d-flex justify-content-center  ">
    
   <form action="pica/insert"  method="POST" class="d-flex w-50 flex-column border rounded  pt-5  " style="background-color: #A7ADC6;">
               
                {{ csrf_field() }}
                <div class=" w-100 d-flex justify-content-around mb-3">
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <label  class=" "for="PicaName"> <span class="align-center">Naziv</span></label>
                    </div>
                    
                    <div class="col-8   d-flex justify-content-start">
                        <input class="col-7 form-control" type="text" name="PicaName"  placeholder="Naziv Pice">
                    </div>
            
                </div>

            
                <div class=" w-100 d-flex justify-content-around mb-3">
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <label  class=" "for="Cena"> <span class="align-center">Cena</span></label>
                    </div>
                
                    <div class="col-8   d-flex justify-content-start">
                        <input class="col-7 form-control" type="number" name="Cena"  placeholder="Cena Pice">
                    </div>
            
                </div>
                <div class=" w-100 d-flex justify-content-around mb-3">
                     <div class="col-4 d-flex justify-content-end align-items-center">
                        <label  class=" "for="Poreklo"> <span class="align-center">Poreklo</span></label>
                    </div>
              
                    <div class="col-8    d-flex justify-content-start">
                            <div class=" col-7 p-0">
                             <select name="Poreklo" class="form-control">
                                 <option>1</option>
                             </select>
                            </div>
                    </div>
                </div>
                <div class=" w-100 d-flex justify-content-around mb-3">
                     <div class="col-4 d-flex justify-content-end align-items-center">
                        <label  class=" "for="Poreklo"> <span class="align-center">Ocena</span></label>
                    </div>
              
                    <div class="col-8    d-flex justify-content-start">
                            <div class="dropdown col-7 p-0">
                                <select name="Ocena" class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
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