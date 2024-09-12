<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <script src="/assets/scripts/script.js"></script>
    <link rel="shortcut icon" href="/assets/images/favicon-32x32.png" type="image/x-icon" />

    <title>Barril Fit</title>
</head>
<body>


   <!-- Estrutura principal do formulário -->
<div class="container-ficha">
    <div class = "img-form">
        <img src = "/assets/images/gym-draw.svg" alt = "Ilustração de personal e aluna de academia">
    </div>

    <div class = "form">
        <form action = "/ficha" method="POST">
            @csrf
            <!-- Cabeçalho do formulário -->
            <div class="form-header">
                <div class = "title">
                    <h1>Barril Fit</h1>
                    <p>Cadastre o treino do aluno!</p>
                </div>
                <div class="buttonCadastro">
                    <button type="sumbit">Cadastrar treino</button>
                </div>
            </div>

            <!-- Campos de entrada do formulário -->
            <div class = "form-inputs">
                <div class = "input-box">
                    <label for = "firstName">Primeiro nome</label>
                    <input id = "firstName" type = "text" name = "firstName" placeholder = "Digite o nome" required>
                </div>

                <div class = "input-box">
                    <label for = "lastName">Sobrenome</label>
                    <input id = "lastName" type = "text" name = "lastName" placeholder = "Digite o sobrenome" required>
                </div>

                <div class = "input-box">
                    <label for = "idade">Idade</label>
                    <input id = "idade" type = "number" name = "idade" placeholder = "Digite a idade" min="14" max="150" required>
                </div>

                <div class = "input-box">
                    <label for = "email">Sobrenome</label>
                    <input id = "email" type = "text" name = "email" placeholder = "Digite o email" required>
                </div>

                <div class = "input-box">
                    <label for = "peso">Peso</label>
                    <input id = "peso" type = "number" name = "peso" placeholder = "Digite o peso" min = "1" required>
                </div>

                <div class = "input-box">
                    <label for = "altura">Altura</label>
                    <div class = "input-altura">
                        <input id = "altura" type = "number" name = "altura" placeholder = "Digite a altura" min = "1" required>
                        <label for = "altura">cm</label>
                    </div>
                </div>

                <div class = "input-box">
                    <label for = "condicoes_medicas">Condições médicas e/ou físicas</label>
                    <input id = "condicoes_medicas" type = "text" name = "condicoes_medicas" placeholder = "Condições médicas do aluno" required>
                </div>
            </div>

            <!-- Grupo de entrada para identidade de gênero -->
            <div class="genero-inputs">
                <div class="genero-title">
                    <h5>Identidade de Gênero</h5>
                </div>

                <div class = "gender-group">
                    <div class="genero-input">
                        <input type = "radio" id = "masculino" name="id_genero">
                        <label for = "masculino">Masculino</label>
                    </div>

                    <div class="genero-input">
                        <input type = "radio" id = "feminino" name="id_genero">
                        <label for = "feminino">Feminino</label>
                    </div>

                    <div class="genero-input">
                        <input type = "radio" id = "outros" name="id_genero">
                        <label for = "outros">Outros</label>
                    </div>

                    <div class="genero-input">
                        <input type = "radio" id = "none" name="id_genero">
                        <label for = "none">Prefere não dizer</label>
                    </div>
                </div>
            </div>

            <!-- Botão para adicionar exercício e contêiner dinâmico para exercícios -->
            <button onclick="adicionarExercicio()" class="buttonAdd">Adicionar Exercício</button>
            <div id="dinamicContainer"></div>
        </form>
    </div>
</div>




</body>
</html>

