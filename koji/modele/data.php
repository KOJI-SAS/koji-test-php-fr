<?php

// data.php

function GeneratePic($number)
{

    if($number == '')
        return "error, please enter a number";

    //Check if the number is superior to 10
    if($number > 9)
    {
        $dizaine = floor($number / 10);
        $unite = $number % 10;
        $number_to_generate = [$dizaine, $unite];
    }
    else
        $number_to_generate[] = $number;


    //Tableau qui servira au pic.twig
    $pic = [];


    //On popule notre tableau sur des 'ordonnées' 
    for ($y=0; $y < 100 ; $y++) 
    { 
        $width = 100 / count($number_to_generate);
        $number_width = 100 / count($number_to_generate);
        
        $i = 0;
        //On boucle si un ou plusieurs numéros
        foreach ($number_to_generate as $key => $number_to_pic) 
        {         
            $x = 0;

            //Si deuxième numéro, on reset les paramètre d'abscisses
            if($i > 0)
            {
                $start = 50;
                $x = 50;
                $width = 100;
            }

            $start = 0;
            $first_half = $x + $number_width * 0.20;
            $last_half = $x + $number_width * 0.80;
            $end = $width;

            //On popule notre tableau sur des 'abscisses' 
            for ($x; $x <= $width; $x++) 
            {                  

                //Colonnes vide pour séparation des 2 numéros 
                if($x == (100 / count($number_to_generate)))
                {
                    $row[$x] = 0;
                    continue;
                }

                //On défini des patern pour populer le tableau en fonction des numéros

                if($x >= $last_half && $x <= $end)
                {
                    if(in_array($number_to_pic, [0,1,3,4,7,8,9]))
                    {
                        $row[$x] = 1;
                        continue;
                    }
                }

                if($x >= $start && $x <= $first_half)
                {
                    if(in_array($number_to_pic, [6,8,0]))
                    {
                        $row[$x] = 1;
                        continue;
                    }                   
                }


                if(($y >= 40 && $y <= 60) && ($x >= $start && $x <= $end))
                {
                    if(in_array($number_to_pic, [2,3,4,5,6,8,9]))
                    {
                        $row[$x] = 1;
                        continue;
                    }                   
                }

                if(($y >= 80 && $y <= 100) && ($x >= $start && $x <= $end))
                {
                    if(in_array($number_to_pic, [0,2,3,5,6,8]))
                    {
                        $row[$x] = 1;
                        continue;
                    }                   
                }

                if(($y >= 0 && $y <= 20) && ($x >= $start && $x <= $end))
                {
                    if(in_array($number_to_pic, [0,2,3,5,6,7,8,9]))
                    {
                        $row[$x] = 1;
                        continue;
                    }                   
                }


                if(($y >= 0 && $y <= 60) && ($x >= $start && $x <= $first_half))
                {
                    if(in_array($number_to_pic, [4,5,9]))
                    {
                        $row[$x] = 1;
                        continue;
                    }                   
                }

                if(($y >= 60 && $y <= 100) && ($x >= $start && $x <= $first_half))
                {
                    if(in_array($number_to_pic, [2]))
                    {
                        $row[$x] = 1;
                        continue;
                    }                   
                }


                if(($y >= 0 && $y <= 60) && ($x >= $last_half && $x <= $end))
                {
                    if(in_array($number_to_pic, [2]))
                    {
                        $row[$x] = 1;
                        continue;
                    }                   
                }

                if(($y >= 0 && $y <= 60) && ($x >= $last_half && $x <= $end))
                {
                    if(in_array($number_to_pic, [2]))
                    {
                        $row[$x] = 1;
                        continue;
                    }                   
                }

                if(($y >= 40 && $y <= 100) && ($x >= $last_half && $x <= $end))
                {
                    if(in_array($number_to_pic, [5,6]))
                    {
                        $row[$x] = 1;
                        continue;
                    }                   
                }

                $row[$x] = 0;
            }

            $i++;
        }

        array_push($pic, $row);
    }

    return $pic;
}