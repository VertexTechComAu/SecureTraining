if (isset($_POST['textToUpload'])) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="sample.csv"');
    $data = $_POST['textToUpload'];

    $replace = array("'+'", "'='", "'-'", "'@'");
    $search = array("+", "=", "-", "@");
    $update= str_replace($search,$replace, $data);

    $fp = fopen('php://output', 'wb');
    $val = explode(",", $update);
    fputcsv($fp, $val);
    fclose($fp);
//payload: =1+1
}

