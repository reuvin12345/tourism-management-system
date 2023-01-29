<?php
			$sort1 = "SELECT (SELECT SUM(male) from aleman) as aleman1, 
			(SELECT SUM(female) from aleman) as aleman2,
			(SELECT SUM(other_male) from aleman) as aleman3,
			(SELECT SUM(other_female) from aleman) as aleman4,
			(SELECT SUM(foreign_male) from aleman) as aleman5,
			(SELECT SUM(foreign_female) from aleman) as aleman6";
			$aleman = mysqli_query($con, $sort1);
			$row1 = mysqli_fetch_assoc($aleman);
			$data1 = $row1['aleman1'] + $row1['aleman2'] + $row1['aleman3'] + $row1['aleman4'] + $row1['aleman5'] + $row1['aleman6'] . " : " . "Aleman Falls";
			$sort2 = "SELECT (SELECT SUM(male) from ampere) as ampere1, 
			(SELECT SUM(female) from ampere) as ampere2,
			(SELECT SUM(other_male) from ampere) as ampere3,
			(SELECT SUM(other_female) from ampere) as ampere4,
			(SELECT SUM(foreign_male) from ampere) as ampere5,
			(SELECT SUM(foreign_female) from ampere) as ampere6";
			$aleman = mysqli_query($con, $sort2);
			$row1 = mysqli_fetch_assoc($aleman);
			$data2 = $row1['ampere1'] + $row1['ampere2'] + $row1['ampere3'] + $row1['ampere4'] + $row1['ampere5'] + $row1['ampere6'] . " : ". "Ampere Beach";
			$sort3 = "SELECT (SELECT SUM(male) from baul_falls) as baul_falls1, 
			(SELECT SUM(female) from baul_falls) as baul_falls2,
			(SELECT SUM(other_male) from baul_falls) as baul_falls3,
			(SELECT SUM(other_female) from baul_falls) as baul_falls4,
			(SELECT SUM(foreign_male) from baul_falls) as baul_falls5,
			(SELECT SUM(foreign_female) from baul_falls) as baul_falls6";
			$aleman = mysqli_query($con, $sort3);
			$row1 = mysqli_fetch_assoc($aleman);
			$data3 = $row1['baul_falls1'] + $row1['baul_falls2'] + $row1['baul_falls3'] + $row1['baul_falls4'] + $row1['baul_falls5'] + $row1['baul_falls6']. " : " . "Baul Falls";

			$sort4 = "SELECT (SELECT SUM(male) from blue_bridge) as blue1, 
			(SELECT SUM(female) from blue_bridge) as blue2,
			(SELECT SUM(other_male) from blue_bridge) as blue3,
			(SELECT SUM(other_female) from blue_bridge) as blue4,
			(SELECT SUM(foreign_male) from blue_bridge) as blue5,
			(SELECT SUM(foreign_female) from blue_bridge) as blue6";
			$aleman = mysqli_query($con, $sort4);
			$row1 = mysqli_fetch_assoc($aleman);
			$data4 = $row1['blue1'] + $row1['blue2'] + $row1['blue3'] + $row1['blue4'] + $row1['blue5'] + $row1['blue6']. " : " . "Blue Bridge";

            $sort5 = "SELECT (SELECT SUM(male) from diarabasin) as diarabasin1, 
			(SELECT SUM(female) from diarabasin) as diarabasin2,
			(SELECT SUM(other_male) from diarabasin) as diarabasin3,
			(SELECT SUM(other_female) from diarabasin) as diarabasin4,
			(SELECT SUM(foreign_male) from diarabasin) as diarabasin5,
			(SELECT SUM(foreign_female) from diarabasin) as diarabasin6";
			$aleman = mysqli_query($con, $sort5);
			$row1 = mysqli_fetch_assoc($aleman);
			$data5 = $row1['diarabasin1'] + $row1['diarabasin2'] + $row1['diarabasin3'] + $row1['diarabasin4'] + $row1['diarabasin5'] + $row1['diarabasin6']. " : " . "Diarabasin Beach";

            $sort6 = "SELECT (SELECT SUM(male) from dinadiawanview) as dinadiawanview1, 
			(SELECT SUM(female) from dinadiawanview) as dinadiawanview2,
			(SELECT SUM(other_male) from dinadiawanview) as dinadiawanview3,
			(SELECT SUM(other_female) from dinadiawanview) as dinadiawanview4,
			(SELECT SUM(foreign_male) from dinadiawanview) as dinadiawanview5,
			(SELECT SUM(foreign_female) from dinadiawanview) as dinadiawanview6";
			$aleman = mysqli_query($con, $sort6);
			$row1 = mysqli_fetch_assoc($aleman);
			$data6 = $row1['dinadiawanview1'] + $row1['dinadiawanview2'] + $row1['dinadiawanview3'] + $row1['dinadiawanview4'] + $row1['dinadiawanview5'] + $row1['dinadiawanview6'] . " : " . "Dinadiawan White Beach";

            $sort7 = "SELECT (SELECT SUM(male) from lipit) as lipit1, 
			(SELECT SUM(female) from lipit) as lipit2,
			(SELECT SUM(other_male) from lipit) as lipit3,
			(SELECT SUM(other_female) from lipit) as lipit4,
			(SELECT SUM(foreign_male) from lipit) as lipit5,
			(SELECT SUM(foreign_female) from lipit) as lipit6";
			$aleman = mysqli_query($con, $sort7);
			$row1 = mysqli_fetch_assoc($aleman);
			$data7 = $row1['lipit1'] + $row1['lipit2'] + $row1['lipit3'] + $row1['lipit4'] + $row1['lipit5'] + $row1['lipit6'] . " : "."Lipit Beach";

            $sort8 = "SELECT (SELECT SUM(male) from pamwasan) as pamwasan1, 
			(SELECT SUM(female) from pamwasan) as pamwasan2,
			(SELECT SUM(other_male) from pamwasan) as pamwasan3,
			(SELECT SUM(other_female) from pamwasan) as pamwasan4,
			(SELECT SUM(foreign_male) from pamwasan) as pamwasan5,
			(SELECT SUM(foreign_female) from pamwasan) as pamwasan6";
			$aleman = mysqli_query($con, $sort8);
			$row1 = mysqli_fetch_assoc($aleman);
			$data8 = $row1['pamwasan1'] + $row1['pamwasan2'] + $row1['pamwasan3'] + $row1['pamwasan4'] + $row1['pamwasan5'] + $row1['pamwasan6'] . " : " . "Pamwasan Cove";

            $sort9 = "SELECT (SELECT SUM(male) from tw) as tw1, 
			(SELECT SUM(female) from tw) as tw2,
			(SELECT SUM(other_male) from tw) as tw3,
			(SELECT SUM(other_female) from tw) as tw4,
			(SELECT SUM(foreign_male) from tw) as tw5,
			(SELECT SUM(foreign_female) from tw) as tw6";
			$aleman = mysqli_query($con, $sort9);
			$row1 = mysqli_fetch_assoc($aleman);
			$data9 = $row1['tw1'] + $row1['tw2'] + $row1['tw3'] + $row1['tw4'] + $row1['tw5'] + $row1['tw6'] . " : " . "Twin Cave";