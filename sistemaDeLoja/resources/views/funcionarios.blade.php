@extends('layouts.main')

@section('css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection
@section('content')
<h2 style="font-family: monospace;  font-size: 200%;">Controle de funcionários(a)</h2>

<br><br><br>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a href="/criarFuncionario">
  <button type="button" class="btn " style="background-color: #e33535f2; color: #fff;
">adicionar novo funcionario</button>
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     
    
      </ul>
      <form class="d-flex" role="search " method="GET" action="{{route('produtos.search')}}" class="d-flex formPesquisar">
        <input class="form-control me-2" name="nome" type="search" placeholder="Pesquisa..." aria-label="Search">
        <button class="btn btn btn-success" type="submit">Pesquisa</button>
      </form>
    </div>
  </div>
</nav>



<table class="table table-bordered border-primary">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Funcao</th>
        
          <th>CPF</th>
          <th>Turno</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      @foreach($funcionario as $funcionarios)
      <tr style="font-size: 93%;">
      <th>{{ $funcionarios->nome }}</th>
      <td>{{ $funcionarios->funcao }}</td>
      <td>{{ $funcionarios->cpf }}</td>
      <td>{{ $funcionarios->turno }}</td>
      


      
  



<th style="display: flex;">
  <a href="{{route('users.edit',  $funcionarios)}}">
<img style="height: 30px;" src="img\editar.png" alt="">
</a>
  <div>
       
        <form action="{{ route('items.destroy', $funcionarios) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este item?')" style="margin-left: 1rem; height: 30px; background-color: #fff;    border: 1px solid #fff;">
            
            <img style="height: 30px;" src="img\lixo.png" alt="">
            </button>
        </form>
    </div>


</th>
    </tr>

      @endforeach
      </tbody>
    </table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item {{ $funcionario->currentPage() == 1 ? 'disabled' : '' }}">
      <a class="page-link" href="{{ $funcionario->previousPageUrl() }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $funcionario->lastPage(); $i++)
      <li class="page-item {{ $i == $funcionario->currentPage() ? 'active' : '' }}">
        <a class="page-link" href="{{ $funcionario->url($i) }}">{{ $i }}</a>
      </li>
    @endfor
    <li class="page-item {{ $funcionario->currentPage() == $funcionario->lastPage() ? 'disabled' : '' }}">
      <a class="page-link" href="{{ $funcionario->nextPageUrl() }}">Next</a>
    </li>
  </ul>
</nav>










<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
@endsection