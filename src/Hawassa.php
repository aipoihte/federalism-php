<?php


namespace Aipoihte\Federalism;


class Hawassa
{

    use \Aipoihte\Traits\Enumable;

    protected static $list = [
        ['code' => 'HAIKDAR', 'label' => 'Haik Dar', 'kebeles' => [
            [ 'code' => 'GUDUMALE', 'label' => 'Gudumale' ],
            [ 'code' => 'GEBEYADAR', 'label' => 'Gebeya Dar' ]
        ]],
        ['code' => 'TABOR', 'label' => 'Tabor', 'kebeles' => [
            [ 'code' => 'TILTE', 'label' => 'Tilte' ],
            [ 'code' => 'HITATA', 'label' => 'Hiteta' ],
            [ 'code' => 'DUME', 'label' => 'Dume' ],
            [ 'code' => 'HOGANEWACHO', 'label' => 'Hoganewacho' ],
            [ 'code' => 'GUWE', 'label' => 'Guwe' ],
        ] ],
        ['code' => 'HAWELATULA', 'label' => 'Hawela Tula', 'kebeles' => [
            [ 'code' => 'CKJ', 'label' => 'Chefe Kote Jebesa' ],
            [ 'code' => 'ALAMURA', 'label' => 'Alamura' ],
        ] ],
        ['code' => 'ADDISKETEMA', 'label' => 'Addis Ketema', 'kebeles' => [
            [ 'code' => 'DAKA', 'label' => 'Daka' ],
            [ 'code' => 'PHILADELPHIA', 'label' => 'Philadelphia' ],

        ] ],
        ['code' => 'ADDISUGEBEYA', 'label' => 'Addisu Gebeya', 'kebeles' => [
            [ 'code' => 'FARA', 'label' => 'Fara' ],

        ] ],
        ['code' => 'MENEHARIA', 'label' => 'Meneharia', 'kebeles' => [
            [ 'code' => 'PIASSA', 'label' => 'Piassa' ],
            [ 'code' => 'MILLENIUM', 'label' => 'Milenium' ],

        ] ],
        ['code' => 'MISRAK', 'label' => 'Misrak', 'kebeles' => [
            [ 'code' => 'WUKRO', 'label' => 'Wukro' ],
            [ 'code' => 'TESO', 'label' => 'Teso' ],
            [ 'code' => 'ADDISABABA', 'label' => 'Addis Ababa' ],

        ] ],
        ['code' => 'MEHAL', 'label' => 'Mehal', 'kebeles' => [
            [ 'code' => 'LEKU', 'label' => 'Leku' ],

        ] ],




    ];



    public static function getKebele($kebele)
    {
        $k = self::getKebeles();
        foreach ($k as $kk) {
            if ($kk['code'] == $kebele ) {
                return $kk;
            }
        }
    }
    public static function getKebeles()
    {
        $s = self::$list;
        $s = collect($s);

        $s = $s->map(function($r){
            $kebeles = $r['kebeles'];
            $k = [];
            foreach ($kebeles as $kebele) {
                $kebele['ss'] = $r['code'];
                $k[] = $kebele;
            }
            // dd($k);
            return $k;
        });

        $s = $s->reduce(function ($carry, $item) {
                    $carry = $carry ? $carry : [];
                    // dd($item);
            return array_merge($carry, $item);
        });


        return collect($s);
    }

}