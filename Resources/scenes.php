<?php
    $resources = array(
    );

    $scenes = array(
        array(
            "id"   => 2,
            "text" => array(
                "pl" => "*Delia: Poznali się kiedy Chloe była w ciemnym miejscu. On był dla niej jak światło w tunelu. Spędzali razem każdą wolną chwilę, która się tylko nadarzyła. Z jednej strony cieszę się że Chloe czuje się już lepiej, ale z drugiej strony ten cały Marek jest jakiś dziwny i według mnie nie powinna mu ufać... On jej może zrobić krzywdę.*",
                "en" => "*Delia: They met when Chloe was in a dark palce in her life. They spent every spare moment they had together. He was always there for her especially when she felt bad. On the one hand I'm happy that Chloe is feeling better, but on the other hand Marcus is kind of weird and in my opinion she shouldn't trust him... He can hurt her.*"
            ),        
            "thoughts" => array(
                "pl" => "hmm, to było dzwine",
                "en" => "huh, that was weird"
            ),                        
            "morale" => "80",
            "attachment" => "100",
            "menu" => array(
                array(
                    "id" => 1,
                    "text" => array(
                        "pl" => "Zapytaj o intencje",
                        "en" => "Ask for intentions"
                    ),
                    "message" => array(
                        "pl" => "Chcesz dla mnie jak najlepiej... prawda?",
                        "en" => "You want the best for me... right?"
                    ),
                    "goto" => 3,
                ),
                array(
                    "id" => 2,
                    "text" => array(
                        "pl" => "Zignoruj",
                        "en" => "Ignore"
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
                "pl" => "Marek: No tak, skąd ci sie to w ogóle wzieło? Oczywiście, że chce dla Ciebie jak najlepiej. Wiem, że bardzo Ci sie spodobała ta sukienka, której zdjęcie mi ostatnio wysłałaś. Mogę ci ją kupić jako dowód na moje słowa. Chcesz?",
                "en" => "Marcus: Of course, why are you even asking? It's obvious that I want the best for you. I know you really like this one dress. I can buy it for you as a prove of my works. Do you want it?"
            ),
            "thoughts" => array(
                "pl" => "",
                "en" => ""
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
                        "pl" => "Tak",
                        "en" => "Yes"
                    ),
                    "morale" => "+10",
                    "attachment" => "+10",
                    "goto" => "5"
                ), 
                array(
                    "id" => 2,
                    "text" => array(
                        "pl" => "Nie",
                        "en" => "No"
                    ),
                    "message" => array(
                        "pl" => "Nie",
                        "en" => "No"
                    ),
                    "morale" => "-10",
                    "attachment" => "-10",
                    "goto" => "6"
                )
            )
        ), 
        array(
            "id"   => 4,
            "text" => array(
                "pl" => "",
                "en" => ""
            ),
            "thoughts" => array(
                "pl" => "Strasznie męczą mnie własne myśli... nieustający konflikt między chęcią wiary w to że jest dobry, z tym że może ona ma racje...",
                "en" => "I'm really tired of my own toughts... neverending conflict between wanting to believe he is a good person and that she may be right..."
            ),               
            "morale" => "-10",
            "attachment" => "",
            "menu" => array(
            )
        ),
        array(
            "id"   => 5,
            "text" => array(
                "pl" => "Marek: Cieszę się że mogę ci sprawić radość i mam nadzieję, że odbierzesz ją osobiście...",
                "en" => "Marcus: I'm happy I can make you smile and I hope you will pick it up personally..."
            ),
            "thoughts" => array(
                "pl" => "Tak się cieszę, że moje przypuszczenia były nieprawdziwe i do tego dostanę jeszcze tą sukienke!",
                "en" => "I'm so happy that my assumptions were wrong and in addition I will get a dress I desire!"
            ),               
            "morale" => "+10",
            "attachment" => "+20",
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
            "thoughts" => array(
                "pl" => "Może faktycznie chce mi sprawić radość i powinnam się zgodzić, z drugiej strony nie jestem jednak pewna. Powinnam chwile poczekać i wtedy podjąć decyzję",
                "en" => "Maybe he really just want to make me happy and I should agree, but from the other hand I'm not sure. I should wait a while and then I will decide."
            ),               
            "morale" => "",
            "attachment" => "",
            "menu" => array(
            )
            "go to" => "10"
        ),            
        array(
            "id"   => 7,
            "text" => array(
                "pl" => "Pewnie! Cieszę się że się zgodziłaś.",
                "en" => "Sure! I'm happy you agreed!"
            ),
            "thoughts" => array(
                "pl" => "Trochę się stresuję spotkaniem u niego ale już nie mogę się doczekać Delia jeszcze zobaczy, że nie miała racji. ",
                "en" => "I'm a little nervous about meeting at his place, but I can't wait. Delia will see she was wrong."
            ),               
            "morale" => "",
            "attachment" => "",
            "go to" => "10"
        ),            
        array(
            "id"   => 8,
            "text" => array(
                "pl" => "No dobrze chociaż tyle... choć chętnie bym cię zobaczył u mnie, ale nie jestem chyba tego wart...",
                "en" => "Well at least that's it...although I would love to see you at my place, but I'm probably not worth it...."
            ),
            "thoughts" => array(
                "pl" => "Jego reakcja była trochę dziwna... ale to może tylko mi się wydaje. W końcu trochę rozumiem, że chciałby ze mną spędzić czas sam na sam.. ja w sumie też.",
                "en" => "His reaction was a little weird... but it is probably my imagination. I can understand that he wants to spend some time with me alone, actually me too."
            ),               
            "morale" => "",
            "attachment" => "",
            "go to" => "10"
        ),            
        array(
            "id"   => 9,
            "text" => array(
                "pl" => "Cieszę się że przyjmiesz prezent, choć tak bardzo bym chciał móc być przy tobie...",
                "en" => "I'm happy you at least will take a present, although I really want to be beside you..."
            ),
            "thoughts" => array(
                "pl" => "Bardzo chętnie bym się z nim spotkała, ale to jeszcze nie pora - szególnie po tym co mówiła Delia, a ta sukienka to moje największe marzenie",
                "en" => "I'd love to meet him but it's not the right time expecially after what Delia said, but that dress is my biggest dream."
            ),               
            "morale" => "",
            "attachment" => "",
            "go to" => "10"
        ),            
        array(
            "id"   => 10,
            "text" => array(
                "pl" => "Marek: Myślałem ostatnio, że mogłababyś mi wysłać swoje zdjęcie.",
                "en" => "Marcus: I was thinking recently that you could send me a photo of you."
            ),
            "thoughts" => array(
                "pl" => "",
                "en" => ""
            ),               
            "morale" => "",
            "attachment" => "",
            "menu" => array(                               
                array(
                    "id" => 1,
                    "text" => array(
                        "pl" => "Wyślij zdjęcie.",
                        "en" => "Send a photo."
                    ),
                    "message" => array(
                        "pl" => "ZDJĘCIE",
                        "en" => "PHOTO"
                    ),
                    "morale" => "",
                    "attachment" => "",
                    "goto" => "11"
                ), 
                array(
                    "id" => 2,
                    "text" => array(
                        "pl" => "Nie",
                        "en" => "No"
                    ),
                    "message" => array(
                        "pl" => "Nie",
                        "en" => "No"
                    ),
                    "morale" => "-10",
                    "attachment" => "-10",
                    "goto" => "12"
                )
        
            )
        ),            
        array(
            "id"   => 11,
            "text" => array(
                "pl" => "Marek: Jesteś piękna chce cie widzieć częściej.",
                "en" => "Marcus: You are so beautifull. I want to see more of you."
            ),
            "thoughts" => array(
                "pl" => "On mnie naprawde lubi. Na pewno jest dobrym człowiekiem.",
                "en" => "He really likes me. I knew he was a good guy."
            ),               
            "morale" => "-5",
            "attachment" => "",
            "menu" => array(
            )
        ),            
        array(
            "id"   => 12,
            "text" => array(
                "pl" => "Marek: Szkoda chciałem cie tylko zobaczyć...",
                "en" => "Marcus: Awh, that's a shame. I only wanted to see you"
            ),
            "thoughts" => array(
                "pl" => "Może jednak powinnam mu wysłać, przecież to tylko zdjecie...",
                "en" => "Maybe I should send it to him. After all that is only a photo"
            ),               
            "morale" => "-5",
            "attachment" => "",
            "menu" => array(
            )
        ),        
         array(
            "id"   => 12,
            "text" => array(
                "pl" => "Marek: A może jednak dasz sie namówić na spotkanie u mnie?",
                "en" => "Marcus: Honey, maybe you would like to meet me at my place?"
            ),
            "thoughts" => array(
                "pl" => "",
                "en" => ""
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
            "thoughts" => array(
                "pl" => "",
                "en" => ""
            ),               
            "menu"  => array()
        )
    );
?>
