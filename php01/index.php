<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <?php
            $country = 'Lietuva';
            $city = 'Vilnius';
            $population = 574221;
        ?>
        <ul>
            <li><?= $country?></li>
            <li><?= $city?></li>
            <li><?= $population?></li>
        </ul>
    </div>

    <div>
        <?= $city.' - Lietuvos sostine';?>
        <?= "$city ir $country sparciai auga";?>
        <?php $largest_population = true; ?>
    </div>

    <div>
        <?php $x = 10; $y = 7; $result = 0;
        $result = $x + $y;
        echo "$x + $y = $result <br>";
        $result = $x - $y;
        echo "$x - $y = $result <br>";
        $result = $x * $y;
        echo "$x * $y = $result <br>";
        $result = $x / $y;
        echo "$x / $y = $result <br>";
        $result = $x % $y;
        echo "$x % $y = $result";
        ?>
    </div>

    <div>
        <?php
            $cities = ['Berlynas', 'Roma', 'Londonas'];
            $cities[] = 'Tokijas';
            $cities2 = ['tokijas' => '13.6',
            'vasingtonas' => '0.6',
            'maskva' => '11.5'];
            print_r($cities);
            echo "<br>";
            print_r($cities2);
            $cities2['londonas'] = 11.5;
        ?>
        <ul>
            <li><?= $cities[1];?></li>
        </ul>
        <ul><?= "Gyventoju skaicius: $cities2[tokijas]";?></ul>
    </div>

    <div>
        <?php
            $cities3 = [
                'Tokijas' => ['13.6', '1868', 'Japonija'],
                'Vasingtonas' => ['0.6', '1790', 'JAV'],
                'Maskva' => ['11.5', '1147', 'Rusija']
            ];
            print_r($cities3);
            $cities3['Londonas'] = ['8.6', '43', 'Anglija'];
        ?>

        <ul>
            <li><?= 'Gyventoju skaicius: '.$cities3['Londonas'][0];?></li>
            <li><?= 'Ikurtas: '.$cities3['Londonas'][1];?></li>
            <li><?= 'Salis: '.$cities3['Londonas'][2];?></li>
        </ul>
    </div>

    <div>
        <?php
            $metai = 1774;

            if($metai >= $cities3['Vasingtonas'][1]){
                echo  'Vasingtonas yra ' . $cities3['Vasingtonas'][2] . 'sostine';
            }elseif($metai == 1774){
                echo $cities3['Vasingtonas'][2] . ' sostine vis dar Filadelfijoje';
            }else{
                echo 'Liko ' . $cities3['Vasingtonas'][1] - $metai . ' metai (-u)';
            }
        ?>
    </div>

    <div>
        <?php
            $cities4 = ['Tokijas', 'Vasingtonas', 'Maskva', 'Londonas'];
        ?>
        <ul>
            <?php
                for($i = 0; $i < count($cities4); $i++){
                    echo '<li>' . $cities4[$i] . '</li>';
                }
            ?>
        </ul>
        <ul>
            <?php
                foreach($cities4 as $city){
                    echo '<li>' . $city . '</li>';
                }
            ?>
        </ul>
    </div>

    <div>
        <?php
            $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

            $sum = 0;

            foreach($temp as $t){
                $sum += $t; 
            }
            $median = $sum / count($temp);
            echo round($median) . '<br>';

            rsort($temp);
            echo 'Penkios silciausios temperaturos: ' . implode(' ', array_slice($temp,0, 5)) . '<br>';
            echo 'Penkios salciausios temperaturos: ' . implode(' ', array_slice($temp,-5, 5));
        ?>
    </div>

    <div>
        <?php
            echo '<br>';

            $ceu = array( "Italija"=>"Roma",
            "Liuksemburgas"=>"Liuksemburgas", "Belgija"=> "Briuselis",
            "Danija"=>"Kopenhaga", "Suomija"=>"Helsinkis", "Prancūzija" =>
            "Paryžius", "Slovakija"=>"Bratislava",
            "Slovenija"=>"Liublijana", "Vokietija" => "Berlynas", "Graikija"
            => "Atėnai", "Airija"=>"Dublinas",
            "Nyderlandai"=>"Amsterdamas", "Portugalija"=>"Lisabona",
            "Ispanija"=>"Madridas", "Švedija"=>"Stokholmas", "Didžioji
            Britanija"=>"Londonas", "Kipras"=>"Nikosija",
            "Lietuva"=>"Vilnius", "Čekija"=>"Praha", "Estija"=>"Talinas",
            "Vengrija"=>"Budapeštas", "Latvija"=>"Ryga",
            "Malta"=>"Valeta", "Austrija" => "Viena", "Bulgarija" =>
            "Sofija", "Rumunija" => "Bukareštas", "Lenkija"=>"Varšuva");

            asort($ceu);

            foreach($ceu as $country => $city){
                print $city . ' (' . $country . ') <br>';
            }
        ?>
    </div>
</body>
</html>