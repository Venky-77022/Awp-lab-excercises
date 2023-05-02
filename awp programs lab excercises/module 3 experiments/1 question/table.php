<?php
if(isset($_POST['number'])) {
    $number = $_POST['number'];
    $output = '<table>';
    for($i = 1; $i <= 10; $i++) {
        $output .= '<tr><td>' . $number . ' x ' . $i .' ='. '</td><td>' . ($number * $i) . '</td></tr>';
    }
    $output .= '</table>';
    echo $output;
}
?>
