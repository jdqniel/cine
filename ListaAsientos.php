<?php
require_once 'Nodo.php';

class ListaAsientos {
    private $cabeza;
    private $totalAsientos;

    public function __construct($totalAsientos) {
        $this->cabeza = null;
        $this->totalAsientos = $totalAsientos;
        $this->inicializarAsientos();
    }

    private function inicializarAsientos() {
        for ($i = 1; $i <= $this->totalAsientos; $i++) {
            $this->agregarAsiento([
                'numero' => $i,
                'estado' => 'disponible'
            ]);
        }
    }

    private function agregarAsiento($asiento) {
        $nuevoNodo = new Nodo($asiento);
        if ($this->cabeza === null) {
            $this->cabeza = $nuevoNodo;
        } else {
            $actual = $this->cabeza;
            while ($actual->siguiente !== null) {
                $actual = $actual->siguiente;
            }
            $actual->siguiente = $nuevoNodo;
        }
    }

    public function reservarAsiento($numero) {
        $actual = $this->cabeza;
        while ($actual !== null) {
            if ($actual->dato['numero'] === $numero) {
                if ($actual->dato['estado'] === 'disponible') {
                    $actual->dato['estado'] = 'ocupado';
                    return true;
                }
                return false;
            }
            $actual = $actual->siguiente;
        }
        return false;
    }

    public function liberarAsiento($numero) {
        $actual = $this->cabeza;
        while ($actual !== null) {
            if ($actual->dato['numero'] === $numero) {
                if ($actual->dato['estado'] === 'ocupado') {
                    $actual->dato['estado'] = 'disponible';
                    return true;
                }
                return false;
            }
            $actual = $actual->siguiente;
        }
        return false;
    }

    public function mostrarAsientos() {
        $actual = $this->cabeza;
        $asientos = [];
        while ($actual !== null) {
            $asientos[] = $actual->dato;
            $actual = $actual->siguiente;
        }
        return $asientos;
    }
}