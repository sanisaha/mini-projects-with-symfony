<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class TemperatureController {
    
    #[Route('/convert')]
    public function convertToFahrenheit (Request $request) {
        $temp = $request->query->get('temperature');
        if (!is_numeric($temp)) {

            // Return an error if the temperature is invalid
            
            return new Response("Error: Temperature must be a number", 400);
            
            }
            $fahrenheit = ($temp * 9 / 5) + 32;
            $kelvin = $temp + 273.15;
            return new Response("The temperature in Fahrenheit = " . $fahrenheit . ' and in Kelvin = ' . $kelvin);
    }
}