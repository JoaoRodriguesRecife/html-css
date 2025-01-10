codigo

<form action="cadastro.php" method="post" autocomplete="on">
    <p>
        <label for="iusuario">Usuario:</label>
        <input type="text" name="usuario" id="iusuario" required minlength="5" maxlength="10" placeholder="usuario" autocomplete="username">
    </p>
    <p>
        <label for="isenha">Senha:</label>
        <input type="password" name="Senha" id="isenha" required minlength="5" maxlength="10" placeholder="senha" autocomplete="current-password">
    </p>
    <p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </p>
    </form>