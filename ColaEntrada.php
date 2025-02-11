<?php
require_once 'Nodo.php';

class ColaEntrada {
    private $frente;
    private $final;

    public function __construct() {
        $this->frente = null;
        $this->final = null;
    }

    public function encolar($persona) {
        $nuevoNodo = new Nodo($persona);
        if ($this->estaVacia()) {
            $this->frente = $nuevoNodo;
            $this->final = $nuevoNodo;
        } else {
            $this->final->siguiente = $nuevoNodo;
            $this->final = $nuevoNodo;
        }
    }

    public function desencolar() {
        if ($this->estaVacia()) {
            return null;
        }
        $persona = $this->frente->dato;
        $this->frente = $this->frente->siguiente;
        if ($this->frente === null) {
            $this->final = null;
        }
        return $persona;
    }

    public function estaVacia() {
        return $this->frente === null;
    }

    public function mostrarCola() {
        $actual = $this->frente;
        $cola = [];
        while ($actual !== null) {
            $cola[] = $actual->dato;
            $actual = $actual->siguiente;
        }
        return $cola;
    }
}