
<div class="container d-flex flex-column justify-content-center align-items-center ">


@foreach ($users as $user)

        <div class="d-flex flex-column  border justify-content-center align-items-center my-4 w-50  ">
            <div>
                <h4> {{$user->name}}</h4>
            </div>
            <div class="d-flex   flex-column   py-1 px-4 w-100 justify-content-around align-items-start" style="background-color: #A7ADC6;">
                <p>Cena:  {{$user->email}}  </p>
                <p>Poreklo:  {{$user->username}}  </p>
                <p>Ocena:  {{$user->starost}}</p>
            </div>
        

        </div>
       
@endforeach
   
</div>
