<h1>Archmage Employees</h1>

<?php
    // $name = "Test";
    // echo '<h1>'.$name.'</h1>';
    $employees = ['Danuka', 'Nuwan', 'Ruwan'];
    // print_r($employees);die;
    // var_dump($employees);die;
    // echo $employees[0];

    $employee_array_length = count($employees);
    // echo $employee_array_length;die;
?>


<ul>
    <?php
        for($i=0; $i<$employee_array_length; $i++){
            echo '<li>'.$employees[$i].'</li>';
        }
    ?>
</ul>



