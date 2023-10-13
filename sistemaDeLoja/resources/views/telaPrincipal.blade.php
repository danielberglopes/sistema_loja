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
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
@endsection
@section('content')




<div class="container text-center" style="margin-top: -10rem;">
  <div class="row gy-6">
    <div class="col-6">
      <div id="bloco" class="p-3" >Total de quartos</div>
    </div>
    <div class="col-6">
      <div id="bloco" class="p-3">Total de quartos Ocupados</div>
    </div>
    <div class="col-6">
      <div id="bloco" class="p-3" style="margin-top: 4rem; ">Total de quartos disponível</div>
    </div>
    <div class="col-6">
      <div  id="bloco" class="p-3" style="margin-top: 4rem;">Total de quartos reservador</div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
 crossorigin="anonymous"></script>
@endsection