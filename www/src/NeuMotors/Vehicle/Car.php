<?php

declare(strict_types=1);

namespace NeuMotors\Vehicle;

use InvalidArgumentException;

class Car {
    private int $id;
    private string $manufacturer;
    private string $model;
    private string $color;
    private float $consumption;

    private static $colors = [
        "piros" => "#790000",
        "sötétkék" => "#000099",
        "sárga" => "#685803",
    ];

    public function __construct(int $id, string $manufacturer, string $model, string $color, float $consumption) {
        $this->id = $id;
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->color = $color;
        $this->consumption = $consumption;
    }

    public function __get(string $name):mixed
    {
        if("hexa" == $name)
        {
           return self::$colors[$this->color];
        }
        if("image" == $name)
        {
           return "img/".strtolower($this->model).".jpg";
        }
        if (property_exists($this,$name))
        {
            return $this->$name;
        }
        throw new InvalidArgumentException("Property '{$name}' does not exist.");
    }

}