<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- na tag head vão informações relevantes e importantes de qualquer html como título, autor, descrição e também importar a folha de estilos (css) -->
  <title>JFK Pacotes Turísticos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>

  <div class="tituloDaPrincipal">JFK Pacotes Turísticos</div><br>
  <div class="caixaGeralCadastro">
    <p>Cadastrar Novo Usuário</p>
    <div>

      <label style="margin-left: -74px;">Nome de Login:</label><br>
      <input type="text" name="login" id="login" placeholder="Nome de Login"><br><br>

      <label style="margin-left: -70px;">Nome Completo:</label><br>
      <input type="text" name="nome_comp" id="nome_comp" placeholder="Nome"><br><br>

      <label style="margin-left: -130px;">E-mail:</label><br>
      <input type="text" name="email" id="email" placeholder="Email"><br><br>

      <label style="margin-left: -34px;">Endereço Residêncial:</label><br>
      <input type="text" name="rua" id="rua" placeholder="Rua"><br>
      <div>
        <input style="width: 42px" type="text" name="n" id="n" placeholder="nº">
        <input style="width: 115px;" type="text" name="complemento" id="complemento" placeholder="Complemento">
      </div>
      <input type="text" name="bairro" id="bairro" placeholder="Bairro"><br>
      <div>
        CEP :
        <input style="width: 125px;" type="text" name="cep" id="cep" placeholder="CEP">
      </div>
      <div>
        <input style="width: 42px" type="text" name="cidade" id="cidade" placeholder="Cidade">
        <select style="width: 122px; height: 21px;" placeholder="Estado">Estado
          <option value="">Estado</option>
        </select>
      </div><br>
      <label style="margin-left: -40px;">Data de Nascimento:</label> <br>
      <input type="text" name="nasci" id="nasci" placeholder="Data de Nascimento"><br><br>
    </div>
    <center>
      <a href="finalizar_compra.html">
        <div class="botaoLogin">Criar Conta</div>
      </a>
    </center>

</body>

</html>