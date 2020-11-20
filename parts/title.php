<table  cellspacing="1" bgcolor:black; style="border-collapse:collapse;">

    <tr>
        
            <?php 

                $result = anime_title();
                $array = array_slice($result, 0 ,100);
                foreach($array as $title) {
                    table_title($title);
                }

          ?>
    </tr>
    
</table>
