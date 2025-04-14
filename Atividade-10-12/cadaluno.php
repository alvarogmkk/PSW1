<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>CADASTRO</title>

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
                  <li><a href="listaaluno.php">TABELA</a></li>
                </ul>
              </nav>
              
            <div class="perfil">
              <img src="imagens/PERFIL.png" alt="Ícone do Usuário">
            </div>
          </div>
          
    </header>

    
    <main>
      <h2>Faça o Seu Cadastro de Aluno:</h2>

      <div class="formulario">
          <form action="./listaaluno.php" method="post">
  
              <!-- Div Principal (Inputs à esquerda e Checkboxes à direita) -->
              <div class="container">
                  
                  <!-- Inputs à esquerda -->
                  <div class="esquerda">
                      <label for="nome">Nome:</label>
                      <input type="text" name="nome" placeholder="Digite seu nome" required>

                      <label for="cidade">Bairro:</label>
                      <input type="text" name="bairro" placeholder="Digite seu bairro" required>

                      <label for="cidade">Cidade:</label>
                      <input type="text" name="cidade" placeholder="Digite sua cidade" required>

                      <label for="cidade">Endereço:</label>
                      <input type="text" name="endereco" placeholder="Digite seu endereço" required>
                        
                      <label for="idade">Idade:</label>
                      <input type="number" name="idade" placeholder="Digite sua idade" min="1" max="120" required>

                      <label for="cidade">N° De Telefone</label>
                      <input type="number" name="telefone" placeholder="Digite seu telefone" required>
  
                      <label for="uf">UF:</label>
                <select name="uf" id="uf">
                    <option value="salvador">Campus Salvador</option>
                    <option value="camaçari">Campus Camaçari</option>
                    <option value="eunapolis">Campus Eunápolis</option>
                    <option value="feira-de-santana">Campus Feira de Santana</option>
                    <option value="ilhéus">Campus Ilhéus</option>
                    <option value="jacobina">Campus Jacobina</option>
                    <option value="jequie">Campus Jequié</option>
                    <option value="lauro-de-freitas">Campus Lauro de Freitas</option>
                    <option value="porto-seguro">Campus Porto Seguro</option>
                    <option value="vitoria-da-conquista">Campus Vitória da Conquista</option>
                    <option value="catu">Campus Catu</option>
                    <option value="guanambi">Campus Guanambi</option>
                    <option value="juazeiro">Campus Juazeiro</option>
                    <option value="senhor-do-bonfim">Campus Senhor do Bonfim</option>
                    <option value="teixeira-de-freitas">Campus Teixeira de Freitas</option>
                    <option value="valente">Campus Valente</option>
                </select>

                      <label for="cidade">CPF:</label>
                      <input type="number" name="cpf" placeholder="Digite seu CPF" required>

                      <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
  
                      <label for="data-nascimento">Data de Nascimento:</label>
                      <input type="date" name="data-nascimento" required>

                  </div>
  
                  <!-- Checkboxes à direita -->
                  <div class="direita">
                      <h3>Disciplinas Cursadas</h3>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="matematica" id="matematica">
                          <label for="matematica">Matemática</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="portugues" id="portugues">
                          <label for="portugues">Português</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="historia" id="historia">
                          <label for="historia">História</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="biologia" id="biologia">
                          <label for="biologia">Biologia</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="quimica" id="quimica">
                          <label for="quimica">Química</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="ingles" id="ingles">
                          <label for="ingles">Inglês</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="ed-fisica" id="ed-fisica">
                          <label for="ed-fisica">Educação Física</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="filosofia" id="filosofia">
                          <label for="filosofia">Filosofia</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="sociologia" id="sociologia">
                          <label for="sociologia">Sociologia</label>
                      </div>
                    </div>

                    <div class="direita2">
                      <h3>Disciplinas Favoritas</h3>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="matematica" id="matematica">
                          <label for="matematica">Matemática</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="portugues" id="portugues">
                          <label for="portugues">Português</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="historia" id="historia">
                          <label for="historia">História</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="biologia" id="biologia">
                          <label for="biologia">Biologia</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="quimica" id="quimica">
                          <label for="quimica">Química</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="ingles" id="ingles">
                          <label for="ingles">Inglês</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="ed-fisica" id="ed-fisica">
                          <label for="ed-fisica">Educação Física</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="filosofia" id="filosofia">
                          <label for="filosofia">Filosofia</label>
                      </div>
  
                      <div class="checkbox-item">
                          <input type="checkbox" name="disciplinas" value="sociologia" id="sociologia">
                          <label for="sociologia">Sociologia</label>
                      </div>
                   </div>

                  </div>
              </div>
              <h4>Após fazer o seu cadastro, aperte em "Enviar"</h4>

              <div class="enviar">
                  <input type="submit" value="Enviar">
              </div>
  
          </form>
      </div>
  </main>

  

<div class="rodape">
    <p> Copyright &copy; 2024 ALVARO GUEDES. TODOS OS DIREITOS RESERVADOS. </p>
</div>

</body>
</html>