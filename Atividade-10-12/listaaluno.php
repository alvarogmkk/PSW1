<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>TABELA</title>

</head>
<body>
<header>
    <div class="header">
        <div class="logo">
          <img src="imagens/if-logo.png" alt="Logo Instituto Federal">
        </div>

        <div class="pesquisa">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
          <input type="text" placeholder="Pesquisar...">
        </div>

        <nav class="navbar">
            <ul>
              <li><a href="index.php">INICIO</a></li>
              <li><a href="cadaluno.php">CADASTRO</a></li>
            </ul>
          </nav>

        <div class="perfil">
          <img src="imagens/PERFIL.png" alt="Ícone do Usuário">
        </div>
      </div>
      
</header>


 <main>
    
    <h2>Lista de Cadastro do Aluno</h2>

    <div class="tebela">
        <div class="componentes">
        <table>
            <tr>
              <th>NOME</th>
              <th>IDADE</th>
              <th>SEXO</th>
              <th>UF</th> 
              <th>CIDADE</th>
              <th>N° DE TELEFONE</th>
              <th>ENDEREÇO</th>
            </tr>
            <tr>
              <td><?php echo $_POST['nome']?></td>
              <td><?php echo $_POST['idade']?></td>
              <td><?php echo $_POST['sexo']?></td>
              <td><?php echo $_POST['uf']?></td>
              <td><?php echo $_POST['cidade']?></td>
              <td><?php echo $_POST['telefone']?></td>
              <td><?php echo $_POST['endereco']?></td>
            </tr>
            <tr>
                <td>Álvaro Guedes</td> 
                <td>17</td>
                <td>Masculino</td>
                <td>Campus Guanambi</td>
                <td>Malhada</td>
                <td>77998420196</td>
                <td>R José de Castro</td>
            </tr>
              <tr>*
                <td>Elon Musk</td>
                <td>53</td>
                <td>Outro</td>
                <td>Campus Guanambi</td>
                <td>Boca Chica</td>
                <td>77999656544</td>
                <td>R low mistfh</td>
              <tr>
                <td>Maria Clara Santos</td>
                <td>17</td>
                <td>Feminino</td>
                <td>SP</td>
                <td>São Paulo</td>
                <td>11-91234-5678</td>
                <td>Rua das Flores, 45</td>
            </tr>
            <tr>
                <td>João Pedro Almeida</td>
                <td>18</td>
                <td>Masculino</td>
                <td>RJ</td>
                <td>Rio de Janeiro</td>
                <td>21-99876-5432</td>
                <td>Av. Brasil, 1234</td>
            </tr>
            <tr>
                <td>Ana Beatriz Oliveira</td>
                <td>16</td>
                <td>Feminino</td>
                <td>MG</td>
                <td>Belo Horizonte</td>
                <td>31-98567-8901</td>
                <td>Rua dos Ipês, 88</td>
            </tr>
          </table>
        </div>
    </div>
    </main>



<div class="rodape">
    <p> Copyright &copy; 2024 ALVARO GUEDES. TODOS OS DIREITOS RESERVADOS. </p>
</div>

</body>
</html>
