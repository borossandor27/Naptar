<?php
class Naptar {
    private $styles = array('athelyezett' => 'blue','pihenonap' => 'green','unnep' => 'red','vasarnap' => 'blue',);
    private $munkaszunetek = array(
        array('datum' => '2022-01-01','title' => 'Új Év napja','description' => 'munkaszüneti nap (hétvége)','fizetett' => 'false','style' => 'unnep'),
        array('datum' => '2022-03-14','title' => 'pihenőnap','description' => 'pihenő nap (4 napos hétvége)','fizetett' => 'false','style' => 'pihenonap'),
        array('datum' => '2022-03-15','title' => 'Nemzeti ünnep','description' => 'munkaszüneti nap (4 napos hétvége)','fizetett' => 'true','style' => 'unnep'),
        array('datum' => '2022-03-26','title' => 'munkanap','description' => 'áthelyezett munkanap (március 14. helyett)','fizetett' => 'false','style' => 'athelyezett'),
        array('datum' => '2022-04-15','title' => 'Nagypéntek','description' => 'munkaszüneti nap (4 napos hétvége)','fizetett' => 'true','style' => 'unnep'),
        array('datum' => '2022-04-18','title' => 'Húsvét','description' => 'munkaszüneti nap (4 napos hétvége)','fizetett' => 'true','style' => 'unnep'),
        array('datum' => '2022-05-01','title' => 'Munka Ünnep','description' => 'munkaszüneti nap (hétvége)','fizetett' => 'false','style' => 'unnep'),
        array('datum' => '2022-06-06','title' => 'Pünkösd','description' => 'munkaszüneti nap (3 napos hétvége)','fizetett' => 'true','style' => 'unnep'),
        array('datum' => '2022-08-20','title' => 'Államalapítás ünnepe','description' => 'munkaszüneti nap (hétvége)','fizetett' => 'false','style' => 'unnep'),
        array('datum' => '2022-10-15','title' => 'munkanap','description' => 'áthelyezett munkanap (október 31. helyett)','fizetett' => 'false','style' => 'athelyezett'),
        array('datum' => '2022-10-23','title' => '56-os forradalom ünnepe','description' => 'munkaszüneti nap (hétvége)','fizetett' => 'false','style' => 'unnep'),
        array('datum' => '2022-10-31','title' => 'pihenőnap','description' => 'pihenőnap (4 napos hétvége)','fizetett' => 'false','style' => 'pihenonap'),
        array('datum' => '2022-11-01','title' => 'Mindenszentek','description' => 'munkaszüneti nap (4 napos hétvége)','fizetett' => 'true','style' => 'unnep'),
        array('datum' => '2022-12-24','title' => 'Szenteste','description' => 'pihenőnap (3 napos hétvége)','fizetett' => 'false','style' => 'pihenonap'),
        array('datum' => '2022-12-25','title' => 'Karácsony','description' => 'munkaszüneti nap (3 napos hétvége)','fizetett' => 'false','style' => 'unnep'),
        array('datum' => '2022-12-26','title' => 'Karácsony','description' => 'munkaszüneti nap (3 napos hétvége)','fizetett' => 'true','style' => 'unnep')
    );
    private $datum= null;

    function havi($year,$month) {
        $day = 1;
        $this->datum=strtotime("$year-$month-1");
        echo '<h2>'.date('Y - M', $this->datum).'</h2>
        <table id="havinaptar">
                <thead>
                    <tr>
                        <th>H</th>
                        <th>K</th>
                        <th>Sze</th>
                        <th>Cs</th>
                        <th>P</th>
                        <th>Szo</th>
                        <th>V</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>';
        $h = intval(date('w', $this->datum)); //-- az első nap a hét hanyadik napjára esik (0-vasárnap, 1-hétfő, ...)
        $this->uresCella($h==0?6:$h-1); //-- az első sort feltöltjük üressel
        while(intval(date('m', $this->datum=strtotime("$year-$month-$day"))) == intval($month)) {
            echo intval(date('w', $this->datum))==1?'<tr>':''; //-- hétfő esetén új sort kezdünk
            $this->nap();
            echo intval(date('w', $this->datum))==0?'</tr>':''; //-- vasárnap esetén lezárjuk a sort
            $day++;
        }; 
        $day--;
        $h = intval(date('w', strtotime("$year-$month-$day")));
        $this->uresCella($h==0?0:7-$h); //-- utolsó sort is feltöltjük
        echo '</tr>                    
                </tbody>
            </table>';
    }
    
    private function nap() {
        echo '<td style=\"ures\">'.date('j', $this->datum)."</td>";
    }
    
    private function uresCella($db) {
        for ($index = 0; $index < $db; $index++) {
            echo '<td style="ures">&nbsp;</td>';
        }
    }
}
