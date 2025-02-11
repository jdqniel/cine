<?php
require_once 'Nodo.php';

class PilaHistorial {
    private $tope;

    public function __construct() {
        $this->tope = null;
    }

    public function push($funcion) {
        $nuevoNodo = new Nodo($funcion);
        $nuevoNodo->siguiente = $this->tope;
        $this->tope = $nuevoNodo;
    }

    public function pop() {
        if ($this->estaVacia()) {
            return null;
        }
        $dato = $this->tope->dato;
        $this->tope = $this->tope->siguiente;
        return $dato;
    }

    public function estaVacia() {
        return $this->tope === null;
    }

    public function mostrarHistorial() {
        $actual = $this->tope;
        $historial = [];
        while ($actual !== null) {
            $historial[] = $actual->dato;
            $actual = $actual->siguiente;
        }
        return $historial;
    }
}