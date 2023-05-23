<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Cadastro de usuário</title>
</head>
<style>
    .container {
        height:100vh; 
    }
</style>
<body>
    <!--
    <script>
        $(document).ready(function() {
            var counter = 1;

            function addinput() {

                if(counter < 10){
                    var newInput = `
                                <form method='GET' action="valida.php">
                                    <div class="form-group" >
                                    <label for="Nome">Insira o nome do Aluno</label>
                                    <input type="text"  class="form-control" name="Nome" autocomplete="off" maxlength="60" placeholder="Nome do aluno">
                                </div>
                            <div class="form-group">
                                    <label for="Nota">Insira a nota do aluno:</label>
                                    <input type="number" class="form-control" name="Nota" autocomplete="off" maxlength="10" placeholder="Nota do aluno">
                            </div>
                                <input type="submit" value="enviar" class="primary">

                                </form>
                            </div>`;
                    $('#input-container').append(newInput);
                    counter++; }}});
    </script>
      -->


    <main>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Formulário de preenchimento de notas dos alunos - 2023</h4>
                    </div>
                </div>    
                    <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col">
                            <label for="Nome">Nome Aluno</label>
                            <input type="text" class="form-control"name="nome" placeholder="Nome Aluno">
                            </div>
                            <div class="col">
                            <label for="Nota">Nota Aluno</label>
                            <input type="number" class="form-control" name="nota" placeholder="Nota do Aluno">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-success">Enviar Dados</button>
                                <button type="reset" class="btn btn-warning">Apagar Dados</button>
                                </div>
                        </div>
                        
                        </form>
                    </div>
                </div>

            </div>
        <form>

        </form>
        
        </div>
    </main>
</body>

</html>