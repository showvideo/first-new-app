<table  cellspacing="1" bgcolor:black; border="1"; style="border-collapse:collapse;">

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
