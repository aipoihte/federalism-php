<?php


namespace Aipoihte\Federalism;


class Region
{

    use \Aipoihte\Traits\Enumable;

    protected static $list = [
        ['code' => 'TIGRAY', 'label' => 'Tigray Region'],
        ['code' => 'AFAR', 'label' => 'Afar Region'],
        ['code' => 'AMHARA', 'label' => 'Amhara Region'],
        ['code' => 'BENISHANGUL', 'label' => 'Benishangul-gumuz Region'],
        ['code' => 'SOMALI', 'label' => 'Somali Region'],
        ['code' => 'OROMIA', 'label' => 'Oromia Region'],
        ['code' => 'GAMBELA', 'label' => 'Gambela Region'],
        ['code' => 'SIDAMA', 'label' => 'Sidama Regional State'],
        ['code' => 'SNNP', 'label' => 'SNNP Region'],
        ['code' => 'HARARI', 'label' => 'Harari Region'],
        ['code' => 'AA', 'label' => 'Addis Ababa City Administration'],
        ['code' => 'DIREDAWA', 'label' => 'Diredawa City Administration'],
    ];


    // public static function get($region = null)
    // {
    //     if ($region) {
    //         return self::get($region, self::$list);
    //     }
    //     return self::$list;
    // }

}