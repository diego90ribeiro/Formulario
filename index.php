<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario Signo</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
   integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
	 <div class="container">
     	
        <h2>Cadastro</h2>
        <span class="resultado"></span>
        <form action="" id="form" method="post" onSubmit="return salvar()">
        <div class="form-row">    
             <div class="form-group col-md-4">
                <label>Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group col-md-4">
                <label>Sobrenome:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label>Data de Nascimento:</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('00/00/0000')">
            </div>  
         </div>
            
         <div class="form-row">    
             <div class="form-group col-md-6">
                <label>E-mail:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Confirmar e-mail:</label>
                <input type="text" class="form-control">
            </div>     
            <div class="form-group col-md-6">
                <label>Senha:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Confirmar Senha:</label>
                <input type="text" class="form-control">
            </div>     
        </div>
        
        <div class="form-row">    
             <div class="form-group col-md-6">
                <label>Endereço:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Numero:</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('00000000')">
            </div> 
            <div class="form-group col-md-6">
                <label>Cidade:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Bairro:</label>
                <input type="text" class="form-control">
            </div>     
        </div>
        
          <div class="form-group">
    		<label for="exampleFormControlTextarea1">Observação:</label>
   			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
 		 </div>
         <input id="enviar" class="btn btn-info" type="submit" value="Enviar">
      </form>  
        
      </div>
 	
	
	
	
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--Função SALVAR AJAX-->
    <script>
	$(document).ready(() => {

        $('#enviar').on('click', () => {

          $('#toast-place').append(`
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
              <div class="toast-header">
                <strong class="mr-auto">Bootstrap</strong>
                <small>Toast</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="toast-body">
                Olá, eu sou uma notificação.
              </div>
            </div>
          `);

          $('.toast').toast('show');

          console.log('Show');

          $('.toast').on('hidden.bs.toast', e => {
            $(e.currentTarget).remove();
            console.log('Hide');
          });

        });

      });
    </script>     
  





</body>
</html>
