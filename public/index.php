<?php

main::start();

class main {

    public static function start(){
        $records = csv::getFileRecords();
        $table = html::printTable($records);
        system::printPage($table);

    }

}

class csv {

    public static function getFileRecords()
    {
        ini_set('auto_detect_line_endings',TRUE);


        $fileName = 'AlaskaHospitals.csv';
        if (($handle = fopen($fileName, 'r')) !== FALSE)
        {
            while (!feof($handle)) {

                $data = fgetcsv($handle, '1000', ",");
                $records[] = $data;
            }
            fclose($handle);
        }

        echo "<pre>";
        var_dump($records);
        echo "</pre>";
        return $records;

    }



}
class html {
    public static function printTable($records) {



    }

}
class system {
    public static function printPage($page) {
        echo $page;
    }

}