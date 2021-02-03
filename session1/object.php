
<?php
    $employee1 = new stdClass();
    $employee1->name = "Danushka";
    $employee1->age = "30";
    $employee1->designation = "Software Engineer";

    $employee2 = new stdClass();
    $employee2->name = "Chamith";
    $employee2->age = "60";
    $employee2->designation = "Senior Software Engineer";

    $employee_arr = [$employee1, $employee2];

    // echo $employee->name;
    // print_r($employee_arr);die;

    // echo '<h1>Employee Data</h1>';
    foreach($employee_arr as $key => $employee){
        // print_r($employee);die;
        echo '<div>';
        echo 'Name - '.$employee->name.'<br>';
        echo 'Age - '.$employee->age.'<br>';
        echo 'Designation - '.$employee->designation.'<br>';
        echo '</div>';
        echo '<br><br>';
    }
?>