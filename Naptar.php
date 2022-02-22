<?php
class Naptar {
    //-- Olyan szombat, amikor ledolgozzuk valamelyik pihenőnapot
    private $athelyezett = array('2022-03-26','2022-10-15');
    //-- Olyan hétköznap, amit pihenőnapnak adnak
    private $pihenonap = array('2022-03-14','2022-10-31');

    private $unnepnapok = array('2022-03-12',
                                '2022-03-13',
                                '2022-03-14',
                                '2022-03-15',
                                '2022-04-15',
                                '2022-04-16',
                                '2022-04-17',
                                '2022-04-18',
                                '2022-06-04',
                                '2022-06-05',
                                '2022-06-06',
                                '2022-10-29',
                                '2022-10-30',
                                '2022-10-31',
                                '2022-11-01',
                                '2022-12-24',
                                '2022-12-25',
                                '2022-12-26'
    );
    
    function havi($ev,$ho) {
        $year = $ev;
        $month = $ho;
        $day = 1;
        $datum = null;
        while(intval(date('m', $datum =  strtotime("$year-$month-$day"))) == intval($month)) {
            echo '<p>'.date('Y-m-d', $datum).";&nbsp;&nbsp;&nbsp;&nbsp;   A hét ".date('w', $datum).". napja (".date('l', $datum).")</p>";
            $day++;
        };            
    }
}
