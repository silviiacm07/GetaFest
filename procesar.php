<?php
include 'header.php';

// 1. Control de acceso por POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo "<p>Acceso no permitido.</p>";
    echo "<a href='index.php' class='btn'>Volver</a>";
    echo "</div></div></body></html>";
    exit;
}

// Datos
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$tipo_entrada = $_POST['tipo_entrada'] ?? '';
$dias = $_POST['dias'] ?? [];
$pago = $_POST['pago'];
$observaciones = $_POST['observaciones'];

// Mayores de 18
if ($edad < 18) {
    echo "<h3>Acceso denegado</h3>";
    echo "<p>Lo sentimos, el evento es exclusivo para mayores de edad.</p>";
    echo "<a href='index.php' class='btn'>Volver al formulario</a>";
    echo "</div></div></body></html>";
    exit;
}

// Subida foto y creación carpeta, si no existe
$nombre_foto = $_FILES['foto']['name'];
$ruta_temporal = $_FILES['foto']['tmp_name'];
$carpeta_destino = "images/";

if (!file_exists($carpeta_destino)) {
    mkdir($carpeta_destino, 0777, true);
}

$ruta_destino = $carpeta_destino . $nombre_foto;

if (is_uploaded_file($ruta_temporal)) {
    move_uploaded_file($ruta_temporal, $ruta_destino);
}

//Cálculo precio
$precio_base = 0;
if ($tipo_entrada == "General") {
    $precio_base = 50;
} elseif ($tipo_entrada == "VIP") {
    $precio_base = 120;
} elseif ($tipo_entrada == "SuperVIP") {
    $precio_base = 180;
}

$suplemento_dias = count($dias) * 10;
$precio_total = $precio_base + $suplemento_dias;

// Acreditación digital
?>

<h2>Acreditación Digital</h2>


<img src="<?php echo $ruta_destino; ?>" class="profile-img" alt="Foto perfil">

<hr>

<p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Tipo de Pase:</strong> <?php echo $tipo_entrada; ?> (<?php echo $precio_base; ?> €)</p>
<p><strong>Días elegidos:</strong>
    <?php
    if(!empty($dias)) {
        echo implode(", ", $dias) . " (+" . $suplemento_dias . " €)";
    } else {
        echo "Ninguno";
    }
    ?>
</p>
<p><strong>Método de pago:</strong> <?php echo $pago; ?></p>

<?php if(!empty($observaciones)): ?>
    <p><strong>Observaciones:</strong> <?php echo $observaciones; ?></p>
<?php endif; ?>

<h3 style="margin-top: 20px;">Precio Total a Pagar: <?php echo $precio_total; ?> €</h3>

<br>

<a href="index.php" class="btn">Realizar otra inscripción</a>

</div>
</div>
</body>
</html>