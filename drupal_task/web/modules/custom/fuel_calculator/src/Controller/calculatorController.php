<?php

namespace Drupal\fuel_calculator\Controller;

use Drupal\Core\Controller\ControllerBase;

class CalculatorController extends ControllerBase{
    public function view() {
        return [
            '#type' => 'markup',
            '#markup' => 'Hello world'
        ];
    }
}