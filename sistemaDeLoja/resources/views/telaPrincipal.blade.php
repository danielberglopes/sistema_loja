@extends('layouts.main')

@section('css')
<style>
    #bloco{

        background-color: #e9ecef;
		-webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
		-moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.77);
		box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.77);
        margin: 5rem;  height: 16rem;   
	}

  @media only screen and (max-width: 700px) {
  .tylo {
   
    display: block;
  }
  .vp{
    display: block;
  }


  @media (max-width: 1091px) {
	.tvb{
   width: 100%;
	}

}
  }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
@endsection
@section('content')
<br> <br> <br> <br> <br>


<div class="container overflow-hidden text-center">
  <div class="row gy-5">
    <div class="col-6">
      <div class="p-3" style="background-color: #0d6efdbf;    color: #fff;    font-size: 131%;">Total de quartos
            
      <h2>60</h2></div>
    </div>
    <div class="col-6">
      <div class="p-3" style="background-color: #f500009c;    color: #fff;    font-size: 131%;">Total de quartos Ocupados
      
      <h2>10</h2>
      
      </div>
    </div>
    <div class="col-6">
      <div class="p-3" style="background-color: #198754;    color: #fff;    font-size: 131%;">Total de quartos disponível
      <h2>44</h2></div>
    </div>
    <div class="col-6">
      <div class="p-3"style="background-color: #ffc107b8;    color: #fff;    font-size: 131%;">Total de quartos reservador
      <h2>6</h2></div>
    </div> 




    <div class="col-6">
      <div class="p-3"style="background-color: #000000;    color: #fff;    font-size: 131%;">Total de funcionários
      <h2>{{ $total }}</h2></div>
    </div> 




    <div class="col-6">
      <div class="p-3"style="      ">
      <h2></h2></div>
    </div> 
  </div>
</div>

<div class="container text-center vp" style="margin-top: -10rem;    color: #fff;     font-size: 131%;
">
  <div class="row gy-5 tylo">
    <div class="col-6">

<div class="container text-center " style="  color: #fff;     font-size: 131%;
">
  <div class="row gy-6 tvb">

  </div>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
 crossorigin="anonymous"></script>
@endsection