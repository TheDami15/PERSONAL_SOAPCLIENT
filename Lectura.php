<?php
/**
 * Script para consumir un servicio SOAP y mostrar los datos de usuarios.
 *
 * @author Damián Gabriel Rodríguez Jiménez
 * @version 1.0
 */

// Ruta del archivo InsertCategoria.php
$wsdl = "http://localhost/proyectos/PERSONAL_SOAPSERVICE/InsertCategoria.php?wsdl";

/**
 * Cliente SOAP para interactuar con el servicio.
 *
 * @var SoapClient $client
 */
$client = new SoapClient($wsdl);

try {
    /**
     * Llamar al método LeerDatosService del servicio SOAP.
     *
     * @var string $result Resultado de la llamada al servicio SOAP en formato JSON.
     */
    $result = $client->LeerDatosService();

    /**
     * Decodificar el resultado JSON.
     *
     * @var array $usuarios Datos de usuarios en formato de array.
     */
    $usuarios = json_decode($result, true);

    /**
     * Iterar sobre los usuarios y mostrar la información.
     */
    foreach ($usuarios as $row) {
        echo "ID: " . $row["usu_id"] . "<br>";
        echo "Nombre: " . $row["usu_nom"] . "<br>";
        echo "Apellido: " . $row["usu_ape"] . "<br>";
        echo "Correo: " . $row["usu_correo"] . "<br>";
        echo "-------------------------<br>";
    }

} catch (SoapFault $e) {
    /**
     * Manejar errores si los hay.
     *
     * @var SoapFault $e Objeto SoapFault que contiene detalles del error.
     */
    echo "Error: " . $e->getMessage();
}
?>




