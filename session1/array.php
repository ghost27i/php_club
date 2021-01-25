<h1>Archmage Employees</h1>

<?php

    $employees = ['Danuka', 'Nuwan', 'Ruwan'];
    $employee_array_length = count($employees);
?>


<ul>
    <?php
        for($i=0; $i<$employee_array_length; $i++){
            echo '<li>'.$employees[$i].'</li>';
        }
    ?>
</ul>



