
  -------------------ESTADO-----------------------------------

<form action="est.php" method="post" autocomplete="on">
        <label for="iest">Estado:</label>
        <select name="esta" id="iest">
        <section>
            <optgroup label="---brasil---">
                <option value="PE">Pernambuco</option>
                <option value="NA">Natal</option>
                <option value="CE">Ceara</option>
            </optgroup>

           
                <optgroup label="---fantasia---">
                    <option value="TT">Tao tao</option>
                    <option value="Ca">Caribe</option>
                    <option value="CE">Center</option>
                </optgroup>
           
        </section>
    </select>

-------------------------------------------------------------------------


----------------------------PROFISSAO-------------------------------------

    <p>
        <label for="iprof">Profissao:</label>
        <input type="text" name="profisao" id="iprof" list="list">
        
            <datalist id="list">
                <option value="DES">Desenvolvedor</option>
                <option value="OP">OPerador</option>
                <option value="Ca">Caminhoneiro</option>
                <option value="Prof">Professor</option>
            </datalist>
        </p>
        ------------------------------------------------------  


        ---------------------BARRA DE TEXTO-----------------------
        <p>
            <label for="itex">Mensagem</label><br>
            <textarea name="texto" id="itex"></textarea>
        </p>
    </form>
    <p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </p>
    