# Sistema de Gestión de Cine

Sistema simple para gestionar funciones, entradas y asientos de un cine usando estructuras de datos básicas implementadas con nodos en PHP.

## Estructuras

- **Pila**: Para el historial de funciones
- **Cola**: Para la entrada a la sala
- **Lista**: Para los asientos del cine

## Archivos

```
├── Nodo.php           # Clase base
├── PilaHistorial.php  # Pila para historial
├── ColaEntrada.php    # Cola para entradas
├── ListaAsientos.php  # Lista para asientos
└── ejemplo.php        # Ejemplo de uso
```

## Requisitos
- PHP 7.0 o superior

## Uso

```php
// Incluir archivos necesarios
require_once 'PilaHistorial.php';
require_once 'ColaEntrada.php';
require_once 'ListaAsientos.php';

// Crear instancias
$historial = new PilaHistorial();
$cola = new ColaEntrada();
$asientos = new ListaAsientos(50);

// Ejecutar ejemplo
php ejemplo.php
```