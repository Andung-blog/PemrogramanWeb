<?php
namespace CarRentalSystem;

trait Logger {
    public function log($message) {
        echo "[Log]: $message\n";
    }
}
