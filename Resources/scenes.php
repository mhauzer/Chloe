<?php
    $resources = array(
    );

    $scenes = array(
        array(
            "id"   => 2,
            "text" => array(
                "pl" => "*Delia: Poznali się kiedy Chloe była w ciemnym miejscu. On był dla niej jak światło w tunelu. Spędzali razem każdą wolną chwilę, która się tylko nadarzyła. Z jednej strony cieszę się że Chloe czuje się już lepiej, ale z drugiej strony ten cały X jest jakiś dziwny i według mnie nie powinna mu ufać... on jej może zrobić krzywdę *",
                "en" => "*Delia: They met when Chloe was in a dark palce in her life. They spent every spare moment they had together. He was always there for her especially when she felt bad. On the one hand I'm happy that Chloe is feeling better, but on the other hand X is kind of weird and in my opinion she shouldn't trust him... He can hurt her. *"
            ),                        
            "morale" => "80",
            "attachment" => "100",
            "menu" => array(
                array(
                    "id" => 1,
                    "text" => array(
                        "pl" => "Zapytaj o intencje",
                        "en" => "ask for intensions"
                    ),
                    "message" => array(
                        "pl" => "Jakie są Twoje intencje?",
                        "en" => "What are yours intensions?"
                    ),
                    "goto" => 3
                ),
                array(
                    "id" => 2,
                    "text" => array(
                        "pl" => "Zignoruj",
                        "en" => "ignore"
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
                "en" => "X:  I know you really like this one dress. I can buy it for you as a prove of my works."
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
                "pl" => "strasznie męczą mnie własne myśli... nieustający konflikt między chęcią wiary w to że jest dobry, z tym że może ona ma racje...",
                "en" => "I'm really tired of my own toughts... neverending conflict between wanting to believe he is a good person and that she may be right..."
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
                "en" => "I'm happy I can make you smile and I hope you will pick it up personally..."
            ),
            "morale" => "-5",
            "attachment" => "",
            "menu" => array(
                array(
                    "id" => 1,
                    "text" => array(
                        "pl" => "TAK; zgoda na spotkanie u niego",
                        "en" => "YES; approval of meeting in his place"
                    ),
                    "message" => array(
                        "pl" => "Może spotkamy się u Ciebie?",
                        "en" => "Maybe we will meet at your place?"
                    ),
                    "morale" => "+5",
                    "attachment" => "+5",
                    "goto" => "7"
                ), 
                array(
                    "id" => 2,
                    "text" => array(
                        "pl" => "TAK; zgoda na spotkanie w miejscu publicznym",
                        "en" => "YES; approval to meet at public place"
                    ),
                    "message" => array(
                        "pl" => "Spotkajmy się w galerii handlowej",
                        "en" => "Let's meet in the shopping mall"
                    ),
                    "morale" => "+5",
                    "attachment" => "+5",
                    "goto" => "8"
                ), 
                array(
                    "id" => 3,
                    "text" => array(
                        "pl" => "NIE; podanie adresu",
                        "en" => "NO; give adress"
                    ),
                    "message" => array(
                        "pl" => "Nie. Przyślij mi na mój adres domowy.",
                        "en" => "No. Send it to my home adress."
                    ),
                    "morale" => "+5",
                    "attachment" => "-5",
                    "goto" => "9"
                ), 
                array(
                    "id" => 4,
                    "text" => array(
                        "pl" => "NIE; rezygnacja",
                        "en" => "NO, resignation"
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
                "en" => "Oh sweety, don't make me sad, think about it again and let me know your decision."
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
                "en" => "I'm happy you agreed!"
            ),
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 8,
            "text" => array(
                "pl" => "No dobrze chociaż tyle… choć chętnie bym cię zobaczył u mnie, ale nie jestem chyba tego wart...",
                "en" => "Well at least that's it...although I would love to see you at my place, but I'm probably not worth it...."
            ),
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 9,
            "text" => array(
                "pl" => "Cieszę się że przyjmiesz prezent, choć tak bardzo bym chciał móc być przy tobie...",
                "en" => "I'm happy you at least will take a present, although I really want to be beside you..."
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
                "en" => "end game"
            ),
            "menu"  => array()
        )
    );
?>
