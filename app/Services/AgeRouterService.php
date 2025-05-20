<?php

namespace App\Services;

class AgeRouterService
{
    //Open Close
    private const AGE_CLASSIFICATIONS = [
        ['min' => 0,  'max' => 5,   'classification' => 'Bebés',            'route' => 'portal.bebes'],
        ['min' => 6,  'max' => 12,  'classification' => 'Niños',            'route' => 'portal.ninos'],
        ['min' => 13, 'max' => 17,  'classification' => 'Adolescentes',     'route' => 'portal.adolescentes'],
        ['min' => 18, 'max' => 25,  'classification' => 'Jóvenes adultos',  'route' => 'portal.jovenes'],
        ['min' => 26, 'max' => 59,  'classification' => 'Adultos',          'route' => 'portal.adultos'],
        ['min' => 60, 'max' => 74,  'classification' => 'Adultos mayores',  'route' => 'portal.mayores'],
        ['min' => 75, 'max' => 120, 'classification' => 'Personas longevas', 'route' => 'portal.longevos'],
    ];

    public function getRouteNameByAge(int $age): ?string
    {
        foreach (self::AGE_CLASSIFICATIONS as $classification) {
            if ($age >= $classification['min'] && $age <= $classification['max']) {
                return $classification['route'];
            }
        }
        return 'portal.error.edadInvalida';
    }

    public function getClassificationByAge(int $age): ?string
    {
        foreach (self::AGE_CLASSIFICATIONS as $classification) {
            if ($age >= $classification['min'] && $age <= $classification['max']) {
                return $classification['classification'];
            }
        }
        return null;
    }
}