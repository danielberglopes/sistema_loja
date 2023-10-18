@extends('layouts.main')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
@endsection
@section('content')
<h2 style="font-family: monospace;  font-size: 200%;">Cadastro novos  Quartos </h2>



<br><br><br>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a href="#">
  <button type="button" class="btn btn-secondary">adicionar novo funcionario</button>
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     
     
      
        
   
       
      </ul>
      <form class="d-flex" role="search " method="GET" action="" class="d-flex formPesquisar">
        <input class="form-control me-2" name="nome" type="search" placeholder="Pesquisa..." aria-label="Search">
        <button class="btn btn btn-success" type="submit">Pesquisa</button>
      </form>
    </div>
  </div>
</nav>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">tipo de quarto</th>
      <th scope="col">Numero</th>
      <th scope="col">numero de pessoas</th>
      <th scope="col">qual anda</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th >1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
    </tr>

  </tbody>
</table>


  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
crossorigin="anonymous"></script> 
@endsection