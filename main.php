<?php
// ejemplo.php
require_once 'PilaHistorial.php';
require_once 'ColaEntrada.php';
require_once 'ListaAsientos.php';

// Crear instancias de las estructuras
$historial = new PilaHistorial();
$cola = new ColaEntrada();
$asientos = new ListaAsientos(50); // Cine con 50 asientos

// Ejemplo de uso del historial
$historial->push("Función: Avatar - 15:00");
$historial->push("Función: Star Wars - 18:00");
$historial->push("Función: Matrix - 21:00");

// Ejemplo de uso de la cola
$cola->encolar("Juan Pérez");
$cola->encolar("María García");
$cola->encolar("Carlos López");

// Ejemplo de uso de los asientos
$asientos->reservarAsiento(5);
$asientos->reservarAsiento(10);
$asientos->reservarAsiento(15);

// Mostrar resultados
echo "Historial de funciones:\n";
print_r($historial->mostrarHistorial());

echo "\nPersonas en la cola:\n";
print_r($cola->mostrarCola());

echo "\nEstado de los asientos:\n";
print_r($asientos->mostrarAsientos());