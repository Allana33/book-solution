
    <h1>Cadastro de Funcionários</h1> 
        <div class= "divprincipal">
            <form method="POST" action="cadastro_funcionario.php">
                <div class="teste">
                    <label for="nomecompleto">Nome</label>
                    <input type="text" required name="nome_completo_funcionario" placeholder="Digite o nome completo">
                    <label for="cpf">CPF</label>
                    <input type="text" required name="cpf_funcionario" placeholder="Digite o cpf sem os pontos">
                </div>

                <div>
                <label for="cargo">Cargo</label>
                <input type="text" required name="cargo" placeholder="ex: professor">
                <label for="data_admissão">Admissão</label>
                <input type="date" required name="data_ademissão">
                </div>

                <div>
                <label for="telefone">Telefone</label>
                <input type="tel" required name="telefone" placeholder="(xx) xxxx-xxxx">
                <label for="celular">Celular</label>
                <input type="tel" required name="celular" placeholder="(xx) xxxxx-xxxx">
                </div>

                <div>
                <label for="email">Email</label>
                <input type="email" required name="email" placeholder="seuemail@dominio.com">
                <label for="usuario">Usuário</label>
                <input type="text" required name="usuario" placeholder="Cadastre um nome para usuário">
                </div>

                <div>
                    <label for="senha">Senha</label>
                    <input type="password" required name="senha" placeholder="Cradastre uma senha">
                </div>

                <div class="enviar">
                <button type="submit" value="cadastro_funcionario" name="cadastro_funcionario">Cadastrar</button>
                </div>
            </form>
        </div>