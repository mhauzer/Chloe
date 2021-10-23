<?php
    $scenes = array(
        array(
            "id"   => 2,
            "text" => "",            
            "morale" => "80",
            "attachment" => "100",
            "menu" => array(
                array(
                    "id" => 1,
                    "text" => "Zapytaj o intencje",
                    "message" => "Jakie są Twoje intencje?",
                    "goto" => 3
                ),
                array(
                    "id" => 2,
                    "text" => "Zignoruj",
                    "message" => "",
                    "goto" => 4,                     
                )
            )
        ), 
        array(
            "id"   => 3,
            "text" => "X: Wiem że bardzo ci sie spodobała ta sukienka której zdjęcie mi ostatnio wysłałaś. Mogę ci ją kupić jako dowód na moje słowa.",
            "morale" => "",
            "attachment" => "",
            "menu" => array(                                 
                array(
                    "id" => 1,
                    "text" => "Tak",
                    "message" => "tak",
                    "morale" => "+5",
                    "attachment" => "+5",
                    "goto" => "5"
                ), 
                array(
                    "id" => 2,
                    "text" => "Nie",
                    "message" => "nie",
                    "morale" => "-5",
                    "attachment" => "",
                    "goto" => "6"
                )
            )
        ), 
        array(
            "id"   => 4,
            "text" => "Y: strasznie męczą mnie własne myśli... nieustający konflikt między chęcią wiary w to że jest dobry, z tym że może ona ma racje…",
            "morale" => "-5",
            "attachment" => "",
            "menu" => array(
            )
        ),
        array(
            "id"   => 5,
            "text" => "Cieszę się że mogę ci sprawić radość i mam nadzieję, że odbierzesz ją osobiście...",
            "morale" => "-5",
            "attachment" => "",
            "menu" => array(
                array(
                    "id" => 1,
                    "text" => "TAK; zgoda na spotkanie u niego",
                    "message" => "Może spotkamy się u Ciebie?",
                    "morale" => "+5",
                    "attachment" => "+5",
                    "goto" => "7"
                ), 
                array(
                    "id" => 2,
                    "text" => "TAK; zgoda na spotkanie w miejscu publicznym",
                    "message" => "Spotkajmy się w galerii handlowej",
                    "morale" => "+5",
                    "attachment" => "+5",
                    "goto" => "8"
                ), 
                array(
                    "id" => 3,
                    "text" => "NIE; podanie adresu",
                    "message" => "Nie. Przyślij mi na mój adres domowy.",
                    "morale" => "+5",
                    "attachment" => "-5",
                    "goto" => "9"
                ), 
                array(
                    "id" => 4,
                    "text" => "NIE; rezygnacja",
                    "message" => "nie",
                    "morale" => "-5",
                    "attachment" => "-5",
                    "goto" => "6"
                )            
            )
        ),   
        array(
            "id"   => 6,
            "text" => "Oh żabko, nie rób mi przykrości, zastanów się porządnie i dasz mi jeszcze znać",
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 7,
            "text" => "Cieszę się że się zgodziłaś! ",
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 8,
            "text" => "No dobrze chociaż tyle… choć chętnie bym cię zobaczył u mnie, ale nie jestem chyba tego wart..",
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 9,
            "text" => "Cieszę się że przyjmiesz prezent, choć tak bardzo bym chciał móc być przy tobie…",
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 10,
            "text" => "",
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 11,
            "text" => "nowy tekst",
            "morale" => "-5",
            "attachment" => "",
            "menu" => array(
            )
        ),        
        array(
            "id"    => 404,
            "text"  => "Koniec gry",
            "menu"  => array()
        )
    );
?>
