<form action="som.php" method="post" autocomplete="on">
        <p>
            <label for="in1">Numero 1:</label>
            <input type="number" name="n1" id="in1" min="0" max="50" required oninput="isoma.innerHTML = Number(in1.value) + Number(in2.value)">
        </p>
        <p>
            <label for="in2">Numero 2:</label>
            <input type="number" name="n2" id="in2" min="0" max="50" required oninput="isoma.innerHTML = Number(in1.value) + Number(in2.value)">
        </p>
        <p>
            <label for="isoma">Soma:</label>
            <output name="soma" id="isoma">0</output>
        </p>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </p>