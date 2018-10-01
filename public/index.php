<?php

$fileName = '';

main::start($fileName);

class main {

    private $html;
    public static function start($fileName){
        $records = csv::getFileRecords($fileName);
        $table = html::printTable($records);
        system::printPage($table);
    }

}

class csv {
    public static function getFileRecords($fileName) {

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