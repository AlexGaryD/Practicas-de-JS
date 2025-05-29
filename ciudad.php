<?php
# Creación de la función recomendacion para sugerir actividades turísticas según la ciudad seleccionada

function recomendacion () {
    // Definición de los climas para cada ciudad
    $clima = array (
        "Quito" => "templado", 
        "Guayaquil" => "cálido", 
        "Cuenca" => "frío", 
        "Loja" => "templado", 
        "Manta" => "cálido",
        "Galápagos" => "cálido"
    );

    // Definición de la ubicación geográfica de cada ciudad
    $ubicacion = array (
        "Quito" => "Sierra", 
        "Guayaquil" => "Costa", 
        "Cuenca" => "Sierra", 
        "Loja" => "Sierra", 
        "Manta" => "Costa",
        "Galápagos" => "Insular"
    );

    // Definición de las principales actividades turísticas de cada ciudad
    $turismo = array (
        "Quito" => "Cultura e Historia", 
        "Guayaquil" => "Playas y Vida Nocturna", 
        "Cuenca" => "Arquitectura Colonial", 
        "Loja" => "Música y Cultura", 
        "Manta" => "Playas", 
        "Galápagos" => "Naturaleza y Biodiversidad"
    );

    // Verifica si se ha enviado la ciudad por POST
    if (isset($_POST['ciudad'])) {
        // Selección de la ciudad enviada por el usuario mediante POST
        switch($_POST['ciudad']) {
            // Caso para Quito
            case 'Quito':
                $recomendacion = "Quito es una ciudad con un clima " . $clima['Quito'] . ", ubicada en la " . $ubicacion['Quito'] . ". Es ideal para disfrutar de su rica cultura e historia. " . $turismo['Quito'];
                break;
            // Caso para Guayaquil
            case 'Guayaquil':
                $recomendacion = "Guayaquil tiene un clima " . $clima['Guayaquil'] . ", situada en la " . $ubicacion['Guayaquil'] . ". Perfecta para disfrutar de sus playas y vida nocturna. " . $turismo['Guayaquil'];
                break;
            // Caso para Cuenca
            case 'Cuenca':
                $recomendacion = "Cuenca ofrece un clima " . $clima['Cuenca'] . ", en la región de la " . $ubicacion['Cuenca'] . ". Ideal para apreciar su arquitectura colonial. " . $turismo['Cuenca'];
                break;
            // Caso para Loja
            case 'Loja':
                $recomendacion = "Loja cuenta con un clima " . $clima['Loja'] . ", también en la " . $ubicacion['Loja'] . ". Conocida por su música y cultura. " . $turismo['Loja'];
                break;
            // Caso para Manta
            case 'Manta':
                $recomendacion = "Manta disfruta de un clima " . $clima['Manta'] . ", ubicada en la " . $ubicacion['Manta'] . ". Famosa por sus playas. " . $turismo['Manta'];
                break;
            // Caso para Galápagos
            case 'Galápagos':
                $recomendacion = "Galápagos tiene un clima " . $clima['Galápagos'] . ", en la región Insular. Un destino único para los amantes de la naturaleza y biodiversidad. " . $turismo['Galápagos'];
                break;
            // Caso por defecto si la ciudad no es reconocida
            default:
                $recomendacion = "Ciudad no reconocida. Por favor, elige una ciudad válida.";
        }
        // Imprime la recomendación
        echo $recomendacion;
    } else {
        // Mensaje si no se ha enviado ninguna ciudad
        echo "No se ha seleccionado ninguna ciudad.";
    }
}
recomendacion();
?>

<!-- Formulario para seleccionar la ciudad -->
<form method="POST">
    <label for="ciudad">Selecciona una ciudad:</label>
    <select name="ciudad" id="ciudad">
        <option value="Quito">Quito</option>
        <option value="Guayaquil">Guayaquil</option>
        <option value="Cuenca">Cuenca</option>
        <option value="Loja">Loja</option>
        <option value="Manta">Manta</option>
        <option value="Galápagos">Galápagos</option>
    </select>
    <button type="submit">Ver recomendación</button>
</form>