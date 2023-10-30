
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<div class="container-fluid mt-5"  >
<form class="row g-3" action="{{'users.update', $funcionario->id}}" method="put">
 @csrf
  @method("put")
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Primeiro nome</label>
    <input type="text" name="nome"   value="{{$funcionario->nome}}" class="form-control is-valid" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"  required>
    {{-- <div class="valid-feedback">
   Parece bom!
    </div> --}}
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Sobrenome</label>
    <input type="text" name="sobrenome"value="{{$funcionario->sobrenome}}"   class="form-control is-valid" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback"  required>
    {{-- <div class="valid-feedback">
 Parece bom!
    </div> --}}
  </div>
  <div class="col-md-4">
    <label for="validationServerUsername" class="form-label">E-mail
</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input type="text" name="Email"value="{{$funcionario->Email}}"  class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
      <div id="validationServerUsernameFeedback" class="invalid-feedback">
    Escolha um Email usuário.

      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Função</label>
    <input type="text" name="funcao" value="{{$funcionario->funcao}}"  class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
    <div id="validationServer03Feedback" class="invalid-feedback">
     Forneça um Função válido.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationServer05" class="form-label">RG</label>
    <input type="text" name="rg" value="{{$funcionario->rg}}"  class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
     Forneça um CEP válido.
    </div>
  </div>

  <div class="col-md-3">
    <label for="validationServer05" class="form-label">Telefone</label>
    <input type="text" name="telefone" value="{{$funcionario->telefone}}"  class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
     Forneça um CEP válido.
    </div>
  </div>

 

   <div class="col-md-4">
    <label for="validationServer02" class="form-label">CPF</label>
    <input type="text" name="cpf" value="{{$funcionario->cpf}}"  class="form-control is-valid" id="validationServer02" value="Otto" required>
    <div class="valid-feedback">
 Parece bom!
    </div>
  </div>

    <div class="col-md-3">
    <label for="validationServer05" class="form-label">Numero da carteira de trablho</label>
    <input type="text" name="numeroDacateiiraDeTrabalho" value="{{$funcionario->numeroDacateiiraDeTrabalho}}"  class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
    <div id="validationServer05Feedback" class="invalid-feedback">
     Forneça um  numero válido.
    </div>
  </div>
 <div class="col-md-3">
    <label for="validationServer04" class="form-label">Turno de trabalho</label>
    <select name="turno" value="{{$funcionario->turno}}" class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Escolher...</option>
    		<option value="Tarde">Tarde</option>
		<option value="Noite">Noite</option>
		
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
    Forneça uma cidade válida.
    </div>
  </div>





  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
 Concorde com os termos e condições
      </label>
    
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-success" type="submit" style="ont-family: sans-serif;">Salvar alteração </button>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" 
crossorigin="anonymous"></script>
