<?php

return [
  'salt' => 'kikugalanet',
  'max_characters' => 3,
  'inventory_slots' => 200,
  'max_refine_value' => 20,
  'defaults' => [
    'level' => 1,
    'gold' => 0,
    "strength" =>  15,
    "stamina" => 15,
    "dexterity" => 15,
    "intelligence" => 15,
    "mapId" => 1,
    "posX" => 6968,
    "posY" => 100,
    "posZ" => 3328,
  ],
  'inventory' => [
    'MAX_SLOTS' => 42, //base inventory slots
    'ALT_SLOTS' => 19,
    'parts' => [
        //0 is empty, 1 is empty
        'Slot 0' => 0,'Slot 1' => 1,'Slot 2' => 2,'Slot 3' => 3,
        'Slot 4' => 4,'Slot 5' => 5,'Slot 6' => 6,'Slot 7' => 7,
        'Slot 8' => 8,'Slot 9' => 9,'Slot 10' => 10,'Slot 11' => 11,
        'Slot 12' => 12,'Slot 13' => 13,'Slot 14' => 14,'Slot 15' => 15,
        'Slot 16' => 16, 'Slot 17' => 17,'Slot 18' => 18,'Slot 19' => 19,
        'Slot 20' => 20,'Slot 21' => 21,'Slot 22' => 22,'Slot 23' => 23,
        'Slot 24' => 24,'Slot 25' => 25,'Slot 25' => 25,'Slot 26' => 26,
        'Slot 28' => 28,'Slot 29' => 29,'Slot 30' => 30,'Slot 31' => 31,
        'Slot 32' => 32,'Slot 33' => 33,'Slot 34' => 34,'Slot 35' => 35,
        'Slot 36' => 36,'Slot 37' => 37,'Slot 38' => 38,'Slot 39' => 39,
        'Slot 40' => 40,'Slot 41' => 41,
        'Suit'  => 44,
        //3 is lower body, potentially an old thing for pants
        'Gauntlet'        => 46,
        'Boots'        => 47,
        'Helmet'         => 48,
        //7 is robe?
        'Cloak'       => 50, //Cloak
        'Offhand Weapon'     => 51,
        'Main Weapon'     => 52,
        //11 is shield ??
        'Mask'        => 54,
        'Ride'        => 55,
        //14-18 is extra space
        'Necklace'    => 61,
        'Left Ring'       => 62,
        'Right Ring'       => 63,
        'Left Earing'     => 64,
        'Right Earing'     => 65,
        //24 is extra space
        'Sub Weapon(Arrows, Poster)'      => 67,
        'Fasion Hat'         => 68, //Fashion hat
        'Fasion Costume'       => 69, //Fashion Costume
        'Fasion Gloves'       => 70, //Fashion gloves
        'Fasion Boots'       => 71, //Fashion boots
      ],
    //30 is second cloak 31 is last
  ],
];
