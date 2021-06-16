<?php
//construction de la grid
session_start();
$table = $_SESSION['finalTable'];
?>
<div class="grid-container d-flex flex-row justify-content-center mb-5" style="margin-top:30px">
    <div class="new-column">
<?php
    $start=0;

    for($i=0;$i<20;$i++){
        $col = array_slice($table,$start,20);
        $start+=20;
        for($k=0;$k<50;$k++){
            foreach($col as $pixel){
                $pixelTable=explode('=', $pixel);
                if(((int)$pixelTable[1])%20===0){?>
                    </div>
                    <div class="new-column">
                <?php
                }
                if ($pixelTable[2] === '1') {
                    for ($j = 0; $j < 50; $j++) {
                        echo "<div class=\"case black\"></div>";
                    }

                } else {
                    for ($j = 0; $j < 50; $j++) {
                        echo "<div class=\"case white\"></div>";
                    }
                }
            }
        }
    }

?>
    </div>
</div>

<div class="sample">

</div>