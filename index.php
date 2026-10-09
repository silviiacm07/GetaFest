<?php
// Incluimos la cabecera
include 'header.php';
?>

    <h2>GetaFest🎉</h2>

    <!-- ¡Ojo aquí! method="POST" y enctype para los archivos obligatorios -->
    <form action="procesar.php" method="POST" enctype="multipart/form-data">

        <!-- DATOS PERSONALES -->
        <label for="nombre">Nombre y Apellidos:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="1" max="120" required>


        <!-- CONFIGURACIÓN DEL PASE -->
        <label>Tipo de entrada (Elige una):</label><br>
        <input type="radio" id="general" name="tipo_entrada" value="General" required>
        <label for="general" style="display:inline; font-weight:normal;">General (50 €)</label><br>

        <input type="radio" id="vip" name="tipo_entrada" value="VIP">
        <label for="vip" style="display:inline; font-weight:normal;">VIP con acceso a Backstage (120 €)</label><br>

        <input type="radio" id="supervip" name="tipo_entrada" value="SuperVIP">
        <label for="supervip" style="display:inline; font-weight:normal;">Super VIP + Camping (180 €)</label><br><br>



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


        <!-- OBSERVACIONES -->
        <label for="observaciones">Observaciones o peticiones especiales:</label>
        <textarea id="observaciones" name="observaciones" rows="3"></textarea>


        <!-- BOTÓN DE ENVÍO -->
        <button type="submit">Generar Acreditación</button>

    </form>

<?php
// Cerramos exactamente las dos cajas abiertas en el header (.profile-card y .container)
echo '</div>'; // Cierra .profile-card
echo '</div>'; // Cierra .container
echo '</body>';
echo '</html>';
?>