<div class="menu">
    <form action="./" method="post">
        <?= csrf_field() ?>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="nivel">Nivel:</label>
        <select id="nivel" name="nivel">
            <?php foreach ($ligas as $l) { ?>
                <option value="<?= $l['id-liga'] ?>">
                    <?= $l['nombre-liga'] ?>
                </option>
            <?php } ?>
        </select>

        <input type="submit" value="Crear" name="create-player">
    </form>
</div>


<section>
    <?php foreach ($jugadores as $j) { ?>
        <div class="player-card">
            <img class="player-image" src="./img/<?= $j['img'] ?>" alt="<?= $j['nombre'] ?? "prueba.jpg" ?>">
            <div class="player-details">
                <div class="player-name">Nombre del Jugador:
                    <?php echo $j['nombre'] ?>
                </div>
                <div class="league-info">
                    <img class="league-image" src="./imgLiga/<?= $j['imagen-liga'] ?>">
                    <span>
                        <?php echo $j['nombre-liga'] ?>
                    </span>
                </div>
            </div>
            <div class="action-buttons">
                <a href="./del/<?= $j['id'] ?>">Borrar</a>
                <a>Editar</a>
            </div>
        </div>
    <?php } ?>
</section>
</body>

</html>