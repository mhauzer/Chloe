<?php
    $resources = array(
    );

    $scenes = array(
        array(
            "id"   => 2,
            "text" => array(
                "pl" => "",
                "en" => ""
            ),                        
            "morale" => "80",
            "attachment" => "100",
            "menu" => array(
                array(
                    "id" => 1,
                    "text" => array(
                        "pl" => "Zapytaj o intencje",
                        "en" => "xxx"
                    ),
                    "message" => array(
                        "pl" => "Jakie są Twoje intencje?",
                        "en" => "xxx"
                    ),
                    "goto" => 3
                ),
                array(
                    "id" => 2,
                    "text" => array(
                        "pl" => "Zignoruj",
                        "en" => "xxx"
                    ),
                    "message" => array(
                        "pl" => "",
                        "en" => ""
                    ),
                    "goto" => 4,                     
                )
            )
        ), 
        array(
            "id"   => 3,
            "text" => array(
                "pl" => "X: Wiem że bardzo ci sie spodobała ta sukienka której zdjęcie mi ostatnio wysłałaś. Mogę ci ją kupić jako dowód na moje słowa.",
                "en" => "xxx"
            ),
            "morale" => "",
            "attachment" => "",
            "menu" => array(                                 
                array(
                    "id" => 1,
                    "text" => array(
                        "pl" => "Tak",
                        "en" => "Yes"
                    ),
                    "message" => array(
                        "pl" => "tak",
                        "en" => "yes"
                    ),
                    "morale" => "+5",
                    "attachment" => "+5",
                    "goto" => "5"
                ), 
                array(
                    "id" => 2,
                    "text" => array(
                        "pl" => "Nie",
                        "en" => "No"
                    ),
                    "message" => array(
                        "pl" => "nie",
                        "en" => "no"
                    ),
                    "morale" => "-5",
                    "attachment" => "",
                    "goto" => "6"
                )
            )
        ), 
        array(
            "id"   => 4,
            "text" => array(
                "pl" => "Y: strasznie męczą mnie własne myśli... nieustający konflikt między chęcią wiary w to że jest dobry, z tym że może ona ma racje…",
                "en" => "xxx"
            ),
            "morale" => "-5",
            "attachment" => "",
            "menu" => array(
            )
        ),
        array(
            "id"   => 5,
            "text" => array(
                "pl" => "Cieszę się że mogę ci sprawić radość i mam nadzieję, że odbierzesz ją osobiście...",
                "en" => "xxx"
            ),
            "morale" => "-5",
            "attachment" => "",
            "menu" => array(
                array(
                    "id" => 1,
                    "text" => array(
                        "pl" => "TAK; zgoda na spotkanie u niego",
                        "en" => "xxx"
                    ),
                    "message" => array(
                        "pl" => "Może spotkamy się u Ciebie?",
                        "en" => "xxx"
                    ),
                    "morale" => "+5",
                    "attachment" => "+5",
                    "goto" => "7"
                ), 
                array(
                    "id" => 2,
                    "text" => array(
                        "pl" => "TAK; zgoda na spotkanie w miejscu publicznym",
                        "en" => "xxx"
                    ),
                    "message" => array(
                        "pl" => "Spotkajmy się w galerii handlowej",
                        "en" => "xxx"
                    ),
                    "morale" => "+5",
                    "attachment" => "+5",
                    "goto" => "8"
                ), 
                array(
                    "id" => 3,
                    "text" => array(
                        "pl" => "NIE; podanie adresu",
                        "en" => "xxx"
                    ),
                    "message" => array(
                        "pl" => "Nie. Przyślij mi na mój adres domowy.",
                        "en" => "xxx"
                    ),
                    "morale" => "+5",
                    "attachment" => "-5",
                    "goto" => "9"
                ), 
                array(
                    "id" => 4,
                    "text" => array(
                        "pl" => "NIE; rezygnacja",
                        "en" => "xxx"
                    ),
                    "message" => array(
                        "pl" => "nie",
                        "en" => "no"
                    ),
                    "morale" => "-5",
                    "attachment" => "-5",
                    "goto" => "6"
                )            
            )
        ),   
        array(
            "id"   => 6,
            "text" => array(
                "pl" => "Oh żabko, nie rób mi przykrości, zastanów się porządnie i dasz mi jeszcze znać",
                "en" => ""
            ),
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 7,
            "text" => array(
                "pl" => "Cieszę się że się zgodziłaś! ",
                "en" => "xxx"
            ),
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 8,
            "text" => array(
                "pl" => "No dobrze chociaż tyle… choć chętnie bym cię zobaczył u mnie, ale nie jestem chyba tego wart..",
                "en" => "xxx"
            ),
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 9,
            "text" => array(
                "pl" => "Cieszę się że przyjmiesz prezent, choć tak bardzo bym chciał móc być przy tobie…",
                "en" => "xxx"
            ),
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 10,
            "text" => array(
                "pl" => "",
                "en" => ""
            ),
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 11,
            "text" => array(
                "pl" => "nowy tekst",
                "en" => "xxx"
            ),
            "morale" => "-5",
            "attachment" => "",
            "menu" => array(
            )
        ),        
        array(
            "id"    => 404,
            "text"  => array(
                "pl" => "Koniec gry",
                "en" => "xxx"
            ),
            "menu"  => array()
        )
    );
?>
