<?php
  $opt = $_GET['opt'];
  switch($opt)
  {
    case "Select":
    default:
      echo '
            <option>Select an Option...</option>
           ';
        break;
    case "Ariana":
      echo '
            <option value="Ariana Ville">Ariana Ville</option>
            <option value="Ettadhamen">Ettadhamen</option>
            <option value="Kalaat Landlous">Kalaat Landlous</option>
            <option value="La soukra">La soukra</option>
            <option value="Mnihla">Mnihla</option>
            <option value="Raoued">Raoued</option>
            <option value="Sidi Thabet">Sidi Thabet</option>
           ';
        break;
    case "Ben arous":
      echo '
            <option value="Ben Arous">Ben Arous</option>
            <option value="Bou Mhel El Bassatine">Bou Mhel El Bassatine</option>
            <option value="El Mourouj">El Mourouj</option>
            <option value="Ezzahra">Ezzahra</option>
            <option value="Fouchana">Fouchana</option>
            <option value="Hammam Chatt">Hammam Chatt</option>
            <option value="Hammam Lif">Hammam lif</option>
            <option value="Megrine">Megrine</option>
            <option value="Mohamadia">Mohamadia</option>
            <option value="Mornag">Mornag</option>
            <option value="Nouvelle Medina">Nouvelle Medina</option>
            <option value="Rades">Rades</option>
           ';
        break;
    case "Bizerte":
      echo '
            <option value="Bizerte Nord">Bizerte Nord</option>
            <option value="Bizerte Sud">Bizerte Sud</option>
            <option value="El Alia">El Alia</option>
            <option value="Ezzahra">Ezzahra</option>
            <option value="Ghar El Melh">Ghar El Melh</option>
            <option value="Ghezala">Ghezala</option>
            <option value="Joumine">Joumine</option>
            <option value="Mateur">Mateur</option>
            <option value="Menzel Bourguiba">Menzel Bourguiba</option>
            <option value="Menzel Jemil">Menzel Jemil</option>
            <option value="Ras Jebel">Ras Jebel</option>
            <option value="Sejnane">Sejnane</option>
            <option value="Tinja">Tinja</option>
            <option value="Utique">Utique</option>
            <option value="Zarzouna">Zarzouna</option>
           ';
        break;
    case "Béja":
      echo '
            <option value="Amdoun">Amdoun</option>
            <option value="Bizerte Sud">Bizerte Sud</option>
            <option value="Beja Nord">Beja Nord</option>
            <option value="Beja Sud">Beja Sud</option>
            <option value="Goubellat">Goubellat</option>
            <option value="Mejez El Bab">Mejez El Bab</option>
            <option value="Nefza">Nefza</option>
            <option value="Teboursouk">Teboursouk</option>
            <option value="Testour">Testour</option>
            <option value="Thibar">Thibar</option>
           ';
        break;
    case "Gabes":
      echo '
            <option value="El Hamma">El Hamma</option>
            <option value="El Metouia">El Metouia</option>
            <option value="Gabes Medina">Gabes Medina</option>
            <option value="Gabes Ouest">Gabes Ouest</option>
            <option value="Gabes Sud">Gabes Sud</option>
            <option value="Ghannouche">Ghannouche</option>
            <option value="Mareth">Mareth</option>
            <option value="Matmata">Matmata</option>
            <option value="Menzel Habib">Menzel Habib</option>
            <option value="Nouvelle Matmata">Nouvelle Matmata</option>
           ';
        break;
    case "Gafsa":
      echo '
            <option value="Belkhir">Belkhir</option>
            <option value="El Guettar">El Guettar</option>
            <option value="El Ksar">El Ksar</option>
            <option value="El Mdhilla">El Mdhilla</option>
            <option value="Gafsa Nord">Gafsa Nord</option>
            <option value="Gafsa Sud">Gafsa Sud</option>
            <option value="Metlaoui">Metlaoui</option>
            <option value="Moulares">Moulares</option>
            <option value="Redeyef">Redeyef</option>
            <option value="Sidi Aich">Sidi Aich</option>
            <option value="Sned">Sned</option>
           ';
        break;
    case "Jendouba":
      echo '
            <option value="Ain Draham">Ain Draham</option>
            <option value="Balta Bou Aouene">Balta Bou Aouene</option>
            <option value="Bou salem">Bou salem</option>
            <option value="Fernana">Fernana</option>
            <option value="Ghardimaou">Ghardimaou</option>
            <option value="Jendouba">Jendouba</option>
            <option value="Jendouba Nord">Jendouba Nord</option>
            <option value="Oued Mliz">Oued Mliz</option>
            <option value="Tabarka">Tabarka</option>
           ';
        break;
    case "Kairouan":
      echo '
            <option value="Bou Hajla">Bou Hajla</option>
            <option value="Chebika">Chebika</option>
            <option value="Cherarda">Cherarda</option>
            <option value="El Ala">El Ala</option>
            <option value="Haffouz">Haffouz</option>
            <option value="Hajeb El Ayoun">Hajeb El Ayoun</option>
            <option value="Kairouan Nord">Kairouan Nord</option>
            <option value="Kairouan Sud">Kairouan Sud</option>
            <option value="Nasrallah">Nasrallah</option>
            <option value="Oueslatia">Oueslatia</option>
            <option value="Sbikha">Sbikha</option>
           ';
        break;
    case "Kasserine":
      echo '
            <option value="El Ayoun">El Ayoun</option>
            <option value="Ezzouhour">Ezzouhour</option>
            <option value="Feriana">Feriana</option>
            <option value="Foussana">Foussana</option>
            <option value="Haidra">Haidra</option>
            <option value="Hassi El Frid">Hassi El Frid</option>
            <option value="Jediliane">Jediliane</option>
            <option value="Kasserine Nord">Kasserine Nord</option>
            <option value="Kasserine Sud">Kasserine Sud</option>
            <option value="Mejel Bel Abbes">Mejel Bel Abbes</option>
            <option value="Sbeitla">Sbeitla</option>
            <option value="Sbiba">Sbiba</option>
            <option value="Thala">Thala</option>
           ';
        break;
    case "Kebili":
      echo '
            <option value="Douz">Douz</option>
            <option value="El Faouar">El Faouar</option>
            <option value="Kebili Nord">Kebili Nord</option>
            <option value="Kebili Sud">Kebili Sud</option>
            <option value="Souk El Ahad">Souk El Ahad</option>
           ';
        break;
    case "La Manouba":
      echo '
            <option value="Borj El Amri">Borj El Amri</option>
            <option value="Douar Hicher">Douar Hicher</option>
            <option value="El Battan">El Battan</option>
            <option value="Jedaida">Jedaida</option>
            <option value="Mannouba">Mannouba</option>
            <option value="Mornaguia">Mornaguia</option>
            <option value="Oued Ellil">Oued Ellil</option>
            <option value="Tebourba">Tebourba</option>
           ';
        break;
    case "Le Kef":
      echo '
            <option value="Dahmani">Dahmani</option>
            <option value="El Ksour">El Ksour</option>
            <option value="Jerissa">Jerissa</option>
            <option value="Kalaa El Khasba">Kalaa El Khasba</option>
            <option value="Kalaat Sinane">Kalaat Sinane</option>
            <option value="Le Kef Est">Le Kef Est</option>
            <option value="Le Kef Ouest">Le Kef Ouest</option>
            <option value="Le Sers">Le Sers</option>
            <option value="Nebeur">Nebeur</option>
            <option value="Sakiet Sidi Youssef">Sakiet Sidi Youssef</option>
            <option value="Tajerouine">Tajerouine</option>
            <option value="Touiref">Touiref</option>
           ';
        break;
    case "Mahdia":
      echo '
            <option value="Bou Merdes">Bou Merdes</option>
            <option value="Chorbane">Chorbane</option>
            <option value="El Jem">El Jem</option>
            <option value="Hbira">Hbira</option>
            <option value="Ksour Essaf">Ksour Essaf</option>
            <option value="La chebba">La chebba</option>
            <option value="Mahdia">Mahdia</option>
            <option value="Melloulech">Melloulech</option>
            <option value="Ouled Chamakh">Ouled Chamakh</option>
            <option value="Sidi Alouene">Sidi Alouene</option>
            <option value="Souassi">Souassi</option>
           ';
        break;
    case "Monastir":
      echo '
            <option value="Bekalta">Bekalta</option>
            <option value="Bembla">Bembla</option>
            <option value="Beni Hassen">Beni Hassen</option>
            <option value="Bou Hajar>Bou Hajar</option>
            <option value="Jemmal">Jemmal</option>
            <option value="Ksar Hellal">Ksar Hellal</option>
            <option value="Ksibet El Mediouni">Ksibet El Mediouni</option>
            <option value="Lamta">Lamta</option>
            <option value="Moknine">Moknine</option>
            <option value="Monastir">Monastir</option>
            <option value="Ouerdanine">Ouerdanine</option>
            <option value="Sahline">Sahline</option>
            <option value="Sayada">Sayada</option>
            <option value="Teboulba">Teboulba</option>
            <option value="Zeramdine">Zeramdine</option>
           ';
        break;
    case "Médenine":
      echo '
            <option value="Ajim">Ajim</option>
            <option value="Ben Guerdane">Ben Guerdane</option>
            <option value="Beni Khedache">Beni Khedache</option>
            <option value="Houmet Essouk>Houmet Essouk</option>
            <option value="Medenine Nord">Medenine Nord</option>
            <option value="Medenine Sud">Medenine Sud</option>
            <option value="Midoun">Midoun</option>
            <option value="Sidi Makhlouf">Sidi Makhlouf</option>
            <option value="Zarzis">Zarzis</option>
           ';
        break;
  }
?>
