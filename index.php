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

<body>
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
    <main>

        <div class="container">
            <h2>Preenchimento formulário de Aluno</h2>
            <p>para este formulário, será necessário informar ao menos 10 alunos!</p>

            <form method='GET' action="valida.php">
                <div class="form-group">
                    <label for="Nome">Insira o nome do Aluno</label>
                    <input type="text" class="form-control" name="Nome" autocomplete="off" maxlength="60" placeholder="Nome do aluno">
                </div>
                <div class="form-group">
                    <label for="Nota">Insira a nota do aluno:</label>
                    <input type="number" class="form-control" name="Nota" autocomplete="off" maxlength="10" placeholder="Nota do aluno">
                </div>
                <button type="submit" class="primary" id="add-btn">Enviar</button>

            </form>
        </div>
    </main>
</body>

</html>