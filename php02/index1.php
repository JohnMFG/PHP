<!-- <?php ini_set('display_error','1');?> padeda  klaidu suradime! -->

<?php
    class Car {
        public $bakas;
        public function degaluKiekis($litrai){
            $this -> bakas += $litrai;
            return $this;
        }
        public function atstumas($km){
            $litrai = $km * 0.05;
            $this -> bakas -= $litrai;
            return $this;
        }
    }

    $bmw = new Car();

    $likutis = $bmw -> degaluKiekis(10) -> atstumas(40) -> bakas;
    echo 'Bake bus like: ' . $likutis . ' L' . '<br>';
?>

<?php
    $data1 = new DateTime();
    $data2 = new DateTime();
    $data3 = new DateTime();
    $data4 = new DateTime();
    $data5 = new DateTime();

    $losangeles = new DateTimeZone('America/Los_Angeles');
    $vilnius = new DateTimeZone('Europe/Vilnius');
    $buenosAires = new DateTimeZone('America/Argentina/Buenos_Aires');
    $sydney = new DateTimeZone('Australia/Sydney');
    $john = new DateTimeZone('Africa/Johannesburg');

    $data1 -> setTimezone($losangeles);
    $data2 -> setTimezone($vilnius);
    $data3 -> setTimezone($buenosAires);
    $data4 -> setTimezone($sydney);
    $data5 -> setTimezone($john);

    echo 'Laikas Los Andzele: ' . $data1 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Vilniuje: ' . $data2 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Buenos Airese: : ' . $data3 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Sidnejuje: ' . $data4 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Johnsberge: ' . $data5 -> format('g:ia, l, F j, Y') . '<br>';
?>

<?php
    class person{
        public $vardas;
        public $pavarde;
        
        public function pasisveikinimas(){
            echo 'Labas ' . $this -> vardas . ' ' . $this -> pavarde . '<br>';
        }
    }

    $zmogus1 = new person();
    $zmogus1 -> vardas = 'Tomas';
    $zmogus1 -> pavarde = 'Tomaitis';
    $zmogus1 -> pasisveikinimas();

    $zmogus2 = new person();
    $zmogus2 -> vardas = 'Petras';
    $zmogus2 -> pavarde = 'Petraitis';
    $zmogus2 -> pasisveikinimas();
?>

<?php
    $data = new DateTime();

    $tinklapioData = 2020;
    echo 'Dabartiniai metai: ' . $data -> format('Y') . '&copy <br>';

    if($data -> format('Y') == $tinklapioData){
        echo 'Metai: ' . $data -> format('Y') . '&copy <br>';
    }else{
        echo 'Metai: ' . $tinklapioData . ' - ' . $data -> format('Y') . '&copy <br>';
    }
?>