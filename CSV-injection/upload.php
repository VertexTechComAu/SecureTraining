<?php
if (isset($_POST['textToUpload'])) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="sample.csv"');
    $data = $_POST['textToUpload'];
    $fp = fopen('php://output', 'wb');
    $val = explode(",", $data);
    fputcsv($fp, $val);
    fclose($fp);
}
//payload: =1+1
?>

