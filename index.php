<?php
include 'header.php';
?>

    <h2>GetaFest🎉</h2>

    <form action="procesar.php" method="POST" enctype="multipart/form-data">

        <!-- DATOS DEL PASE -->
        <label for="nombre">Nombre y Apellidos:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="1" max="120" required>


<!--        ENTRADA-->
        <label>Tipo de entrada (Elige una):</label><br>

        <input type="radio" id="general" name="tipo_entrada" value="General" required>
        <label for="general" class="radio-label">General (50 €)</label><br>

        <input type="radio" id="vip" name="tipo_entrada" value="VIP">
        <label for="vip" class="radio-label">VIP con acceso a Backstage (120 €)</label><br>

        <input type="radio" id="supervip" name="tipo_entrada" value="SuperVIP">
        <label for="supervip" class="radio-label">Super VIP + Camping (180 €)</label><br>


        <label>Días de asistencia (Puedes marcar varios):</label>

        <div class="dias-container">
            <div class="dia-item">
                <input type="checkbox" id="viernes" name="dias[]" value="Viernes">
                <label for="viernes" style="font-weight: normal; margin: 0;">Viernes (+10 €)</label>
            </div>

            <div class="dia-item">
                <input type="checkbox" id="sabado" name="dias[]" value="Sabado">
                <label for="sabado" style="font-weight: normal; margin: 0;">Sábado (+10 €)</label>
            </div>

            <div class="dia-item">
                <input type="checkbox" id="domingo" name="dias[]" value="Domingo">
                <label for="domingo" style="font-weight: normal; margin: 0;">Domingo (+10 €)</label>
            </div>
        </div>


<!--        METODO DE PAGO-->
        <label for="pago">Método de pago:</label>
        <select id="pago" name="pago" required>
            <option value="">-- Selecciona una opción --</option>
            <option value="Tarjeta">Tarjeta de crédito</option>
            <option value="Bizum">Bizum</option>
            <option value="PayPal">PayPal</option>
        </select>


        <!-- ACREDITACIÓN -->
        <label for="foto">Foto del asistente:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required>


        <!-- OBSERVACIÓN -->
        <label for="observaciones">Observaciones o peticiones especiales:</label>
        <textarea id="observaciones" name="observaciones" rows="3"></textarea>


        <!-- BOTÓN DE ENVÍO -->
        <button type="submit">Generar Acreditación</button>

    </form>

<?php
echo '</div>';
echo '</div>';
echo '</body>';
echo '</html>';
?>