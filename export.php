<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','tourism');

$res = "SELECT * FROM `aleman` UNION ALL SELECT * FROM `ampere` UNION ALL SELECT * FROM `baul_falls` UNION ALL SELECT * FROM `blue_bridge` UNION ALL SELECT * FROM `baul_falls` UNION ALL SELECT * FROM `diarabasin` UNION ALL SELECT * FROM `dinadiawanview` UNION ALL SELECT * FROM `lipit` UNION ALL SELECT * FROM `pamwasan` UNION ALL SELECT * FROM `tw`";
$sql = mysqli_query($con, $res);
$row=mysqli_fetch_assoc($sql);
	$html='<style>table tr th{border: 1px solid black;} h4 {top: 0;} table td{border: 1px solid black;}</style>';
	$html.='<h4>Tourism Attaction Visitor Record</h4>
	<h5>( This recording form can be used instead of just counting the visitors )</h5>';
	$html.='
		<table>
		<h4>Tourism Attraction Visitor Record<br>( This recording form can be used instead of just counting the visitors)</h4>
		<tr>
		<tr>
			<th colspan="6" style="background-color: yellow;"><center>Visitor Attraction</center></th>
			<td colspan="9" style="background-color: yellow;"><center>*** Place of Residence</center></td>
			<td colspan="3" rowspan="4" style="background-color: yellow;"><center>* Grand Total<br>Number of<br>Residence</center></td>
		</tr>
			<tr>
			<th colspan="4" rowspan="3" style="background-color: yellow;">Name</th>
			<th colspan="2" rowspan="3" style="background-color: yellow;"><center>Attraction Code</center></th>
			<td colspan="6" style="background-color: yellow;"><center>Philippines</center></td>
			<th colspan="3" rowspan="2"  style="background-color: yellow;" ><center>Foreign Country Residence</center></th>
		</tr>
		<tr>
			<td colspan="3" style="background-color: yellow;"><center>This Municipality</center></td>
			<td colspan="3" style="background-color: yellow;"><center>Other Municipality</center></td>
		</tr>
		<tr>
			<td style="background-color: yellow;">Male</td>
			<td style="background-color: yellow;">Female</td>
			<td style="background-color: yellow;">Total</td>
			<td style="background-color: yellow;">Male</td>
			<td style="background-color: yellow;">Female</td>
			<td style="background-color: yellow;">Total</td>
			<td style="background-color: yellow;">Male</td>
			<td style="background-color: yellow;">Female</td>
			<td style="background-color: yellow;">Total</td>
		</tr>';
		$html .='<tr>
			<th  colspan="4">Aleman Beach</th>';
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from aleman) as male1,
                         (SELECT SUM(female) from aleman) as female1,
                         (SELECT SUM(other_male) from aleman) as other_male1,
                         (SELECT SUM(other_female) from aleman) as other_female1,
                         (SELECT SUM(foreign_male) from aleman) as foreign_male1,
                         (SELECT SUM(foreign_female) from aleman) as foreign_female1");
                        $row = mysqli_fetch_assoc($resultset);
                    $html.='<td colspan="2"></td>
					<td>'.$row['male1'].'</td>
                    <td>'.$row['female1'].'</td>
                    <td>'. $mftotal1 = $row['male1'] + $row['female1']; 
                         $mftotal1.'</td>';
				$html.='<td>'.$row['other_male1'].'</td>
					<td>'.$row['other_female1'].'</td>
                    <td>'. $oo1 = $row['other_female1'] + $row['other_male1'];
                        $oo1.'</td>';
                    $html .='<td>'. $row['foreign_male1'].'</td>
                    <td>'. $row['foreign_female1'].'</td>
                    <td>'. $ff1 =  $row['foreign_female1'] + $row['foreign_male1'];
                    $ff1.'</td>
                    <td>'. $row['other_male1'] + $row['male1'] + $row['foreign_male1'].'</td>
                    <td>'. $row['other_female1'] + $row['female1'] + $row['foreign_female1'].'</td>';
                    $html .='.<td>'. $total1 = $row['other_male1'] + $row['male1'] + $row['foreign_male1'] + $row['other_female1'] + $row['female1'] + $row['foreign_female1'].'</td>';
            $html .= '</tr>
			<tr>';
			$html .= '<th colspan="4">Blue Bridge</th>';
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from blue_bridge) as male4,
                         (SELECT SUM(female) from blue_bridge) as female4,
                         (SELECT SUM(other_male) from blue_bridge) as other_male4,
                         (SELECT SUM(other_female) from blue_bridge) as other_female4,
                         (SELECT SUM(foreign_male) from blue_bridge) as foreign_male4,
                         (SELECT SUM(foreign_female) from blue_bridge) as foreign_female4");
                        $row = mysqli_fetch_assoc($resultset);
				$html .= '<td colspan="2"></td>
					<td>'.$row['male4'].'</td>
                    <td>'.$row['female4'].'</td>
                    <td>'. $mftotal4 = $row['male4'] + $row['female4']; 
                         $mftotal4.'</td>';
					$html .= '<td>'.$row['other_male4'].'</td>
					<td>'.$row['other_female4'].'</td>
                    <td>'. $oo4 = $row['other_female4'] + $row['other_male4'];
                        $oo4.'</td>';
					$html .= '<td>'. $row['foreign_male4'].'</td>
                    <td>'. $row['foreign_female4'].'</td>
                    <td>'. $ff4 =  $row['foreign_female4'] + $row['foreign_male4'];
                    $ff4.'</td>
                    <td>'. $row['other_male4'] + $row['male4'] + $row['foreign_male4'].'</td>
                    <td>'. $row['other_female4'] + $row['female4'] + $row['foreign_female4'].'</td>';
                    $html .='<td>'. $total4 = $row['other_male4'] + $row['male4'] + $row['foreign_male4'] + $row['other_female4'] + $row['female4'] + $row['foreign_female4'];
                     $total4.'</td>
            </tr>';
			
			$html .='<tr>
			<th  colspan="4">Ampere Beach</th>';
			$resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from ampere) as male3,
			(SELECT SUM(female) from ampere) as female3,
			(SELECT SUM(other_male) from ampere) as other_male3,
			(SELECT SUM(other_female) from ampere) as other_female3,
			(SELECT SUM(foreign_male) from ampere) as foreign_male3,
			(SELECT SUM(foreign_female) from ampere) as foreign_female3");
			$row = mysqli_fetch_assoc($resultset);
		$html.='<td colspan="2"></td>
		<td>'.$row['male3'].'</td>
		<td>'.$row['female3'].'</td>
		<td>'. $mftotal3 = $row['male3'] + $row['female3']; 
			 $mftotal3.'</td>';
	$html.='<td>'.$row['other_male3'].'</td>
		<td>'.$row['other_female3'].'</td>
		<td>'. $oo3 = $row['other_female3'] + $row['other_male3'];
			$oo3.'</td>';
		$html .='<td>'. $row['foreign_male3'].'</td>
		<td>'. $row['foreign_female3'].'</td>
		<td>'. $ff3 =  $row['foreign_female3'] + $row['foreign_male3'];
		$ff3.'</td>
		<td>'. $row['other_male3'] + $row['male3'] + $row['foreign_male3'].'</td>
		<td>'. $row['other_female3'] + $row['female3'] + $row['foreign_female3'].'</td>';
		$html .='.<td>'. $total3 = $row['other_male3'] + $row['male3'] + $row['foreign_male3'] + $row['other_female3'] + $row['female3'] + $row['foreign_female3'];
		 $total3.'</td>';
			$html .='<tr>
					<th  colspan="4">Baul Falls</th>';
						$resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from baul_falls) as male2,
						(SELECT SUM(female) from baul_falls) as female2,
						(SELECT SUM(other_male) from baul_falls) as other_male2,
						(SELECT SUM(other_female) from baul_falls) as other_female2,
						(SELECT SUM(foreign_male) from baul_falls) as foreign_male2,
						(SELECT SUM(foreign_female) from baul_falls) as foreign_female2");
						$row = mysqli_fetch_assoc($resultset);
                    $html.='<td colspan="2"></td>
					<td>'.$row['male2'].'</td>
                    <td>'.$row['female2'].'</td>
                    <td>'. $mftotal2 = $row['male2'] + $row['female2']; 
                         $mftotal2.'</td>';
				$html.='<td>'.$row['other_male2'].'</td>
					<td>'.$row['other_female2'].'</td>
                    <td>'. $oo2 = $row['other_female2'] + $row['other_male2'];
                        $oo2.'</td>';
                    $html .='<td>'. $row['foreign_male2'].'</td>
                    <td>'. $row['foreign_female2'].'</td>
                    <td>'. $ff2 =  $row['foreign_female2'] + $row['foreign_male2'];
                    $ff2.'</td>
                    <td>'. $row['other_male2'] + $row['male2'] + $row['foreign_male2'].'</td>
                    <td>'. $row['other_female2'] + $row['female2'] + $row['foreign_female2'].'</td>';
                    $html .='.<td>'. $total2 = $row['other_male2'] + $row['male2'] + $row['foreign_male2'] + $row['other_female2'] + $row['female2'] + $row['foreign_female2'];
                     $total2.'</td>';
					 $html .= '</tr>
			<tr>';
			$html .= '<th colspan="4">Diarabasin Beach</th>';
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from diarabasin) as male5,
                         (SELECT SUM(female) from diarabasin) as female5,
                         (SELECT SUM(other_male) from diarabasin) as other_male5,
                         (SELECT SUM(other_female) from diarabasin) as other_female5,
                         (SELECT SUM(foreign_male) from diarabasin) as foreign_male5,
                         (SELECT SUM(foreign_female) from diarabasin) as foreign_female5");
                        $row = mysqli_fetch_assoc($resultset);
				$html .= '<td colspan="2"></td>
					<td>'.$row['male5'].'</td>
                    <td>'.$row['female5'].'</td>
                    <td>'. $mftotal5 = $row['male5'] + $row['female5']; 
                         $mftotal5.'</td>';
					$html .= '<td>'.$row['other_male5'].'</td>
					<td>'.$row['other_female5'].'</td>
                    <td>'. $oo5 = $row['other_female5'] + $row['other_male5'];
                        $oo5.'</td>';
					$html .= '<td>'. $row['foreign_male5'].'</td>
                    <td>'. $row['foreign_female5'].'</td>
                    <td>'. $ff5 =  $row['foreign_female5'] + $row['foreign_male5'];
                    $ff5.'</td>
                    <td>'. $row['other_male5'] + $row['male5'] + $row['foreign_male5'].'</td>
                    <td>'. $row['other_female5'] + $row['female5'] + $row['foreign_female5'].'</td>';
                    $html .='<td>'. $total5 = $row['other_male5'] + $row['male5'] + $row['foreign_male5'] + $row['other_female5'] + $row['female5'] + $row['foreign_female5'];
                     $total5.'</td>';
					 $html .= '</tr>
			<tr>';
			$html .= '<th colspan="4">Dinadiawan White Beach</th>';
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from dinadiawanview) as male6,
                         (SELECT SUM(female) from dinadiawanview) as female6,
                         (SELECT SUM(other_male) from dinadiawanview) as other_male6,
                         (SELECT SUM(other_female) from dinadiawanview) as other_female6,
                         (SELECT SUM(foreign_male) from dinadiawanview) as foreign_male6,
                         (SELECT SUM(foreign_female) from dinadiawanview) as foreign_female6");
                        $row = mysqli_fetch_assoc($resultset);
				$html .= '<td colspan="2"></td>
					<td>'.$row['male6'].'</td>
                    <td>'.$row['female6'].'</td>
                    <td>'. $mftotal6 = $row['male6'] + $row['female6']; 
                         $mftotal6.'</td>';
					$html .= '<td>'.$row['other_male6'].'</td>
					<td>'.$row['other_female6'].'</td>
                    <td>'. $oo6 = $row['other_female6'] + $row['other_male6'];
                        $oo6.'</td>';
					$html .= '<td>'. $row['foreign_male6'].'</td>
                    <td>'. $row['foreign_female6'].'</td>
                    <td>'. $ff6 =  $row['foreign_female6'] + $row['foreign_male6'];
                    $ff6.'</td>
                    <td>'. $row['other_male6'] + $row['male6'] + $row['foreign_male6'].'</td>
                    <td>'. $row['other_female6'] + $row['female6'] + $row['foreign_female6'].'</td>';
                    $html .='<td>'. $total6 = $row['other_male6'] + $row['male6'] + $row['foreign_male6'] + $row['other_female6'] + $row['female6'] + $row['foreign_female6'];
                     $total6.'</td>';
					 $html .= '</tr>
					 <tr>';
					 $html .= '<th colspan="4">Lipit Beach</th>';
								  $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from lipit) as male7,
								  (SELECT SUM(female) from lipit) as female7,
								  (SELECT SUM(other_male) from lipit) as other_male7,
								  (SELECT SUM(other_female) from lipit) as other_female7,
								  (SELECT SUM(foreign_male) from lipit) as foreign_male7,
								  (SELECT SUM(foreign_female) from lipit) as foreign_female7");
								 $row = mysqli_fetch_assoc($resultset);
						 $html .= '<td colspan="2"></td>
							 <td>'.$row['male7'].'</td>
							 <td>'.$row['female7'].'</td>
							 <td>'. $mftotal7 = $row['male7'] + $row['female7']; 
								  $mftotal7.'</td>';
							 $html .= '<td>'.$row['other_male7'].'</td>
							 <td>'.$row['other_female7'].'</td>
							 <td>'. $oo7 = $row['other_female7'] + $row['other_male7'];
								 $oo7.'</td>';
							 $html .= '<td>'. $row['foreign_male7'].'</td>
							 <td>'. $row['foreign_female7'].'</td>
							 <td>'. $ff7 =  $row['foreign_female7'] + $row['foreign_male7'];
							 $ff7.'</td>
							 <td>'. $row['other_male7'] + $row['male7'] + $row['foreign_male7'].'</td>
							 <td>'. $row['other_female7'] + $row['female7'] + $row['foreign_female7'].'</td>';
							 $html .='<td>'. $total7 = $row['other_male7'] + $row['male7'] + $row['foreign_male7'] + $row['other_female7'] + $row['female7'] + $row['foreign_female7'];
							  $total7.'</td>';
							  $html .= '</tr>
					 <tr>';
					 $html .= '<th colspan="4">Pamwasan Cove</th>';
								  $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from pamwasan) as male8,
								  (SELECT SUM(female) from pamwasan) as female8,
								  (SELECT SUM(other_male) from pamwasan) as other_male8,
								  (SELECT SUM(other_female) from pamwasan) as other_female8,
								  (SELECT SUM(foreign_male) from pamwasan) as foreign_male8,
								  (SELECT SUM(foreign_female) from pamwasan) as foreign_female8");
								 $row = mysqli_fetch_assoc($resultset);
						 $html .= '<td colspan="2"></td>
							 <td>'.$row['male8'].'</td>
							 <td>'.$row['female8'].'</td>
							 <td>'. $mftotal8 = $row['male8'] + $row['female8']; 
								  $mftotal8.'</td>';
							 $html .= '<td>'.$row['other_male8'].'</td>
							 <td>'.$row['other_female8'].'</td>
							 <td>'. $oo8 = $row['other_female8'] + $row['other_male8'];
								 $oo8.'</td>';
							 $html .= '<td>'. $row['foreign_male8'].'</td>
							 <td>'. $row['foreign_female8'].'</td>
							 <td>'. $ff8 =  $row['foreign_female8'] + $row['foreign_male8'];
							 $ff8.'</td>
							 <td>'. $row['other_male8'] + $row['male8'] + $row['foreign_male8'].'</td>
							 <td>'. $row['other_female8'] + $row['female8'] + $row['foreign_female8'].'</td>';
							 $html .='<td>'. $total8 = $row['other_male8'] + $row['male8'] + $row['foreign_male8'] + $row['other_female8'] + $row['female8'] + $row['foreign_female8'];
							  $total8.'</td>
			</tr>';	 
			$html .= '</tr>
					 <tr>';
					 $html .= '<th colspan="4">Twin Cave</th>';
								  $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from tw) as male9,
								  (SELECT SUM(female) from tw) as female9,
								  (SELECT SUM(other_male) from tw) as other_male9,
								  (SELECT SUM(other_female) from tw) as other_female9,
								  (SELECT SUM(foreign_male) from tw) as foreign_male9,
								  (SELECT SUM(foreign_female) from tw) as foreign_female9");
								 $row = mysqli_fetch_assoc($resultset);
						 $html .= '<td colspan="2"></td>
							 <td>'.$row['male9'].'</td>
							 <td>'.$row['female9'].'</td>
							 <td>'. $mftotal9 = $row['male9'] + $row['female9']; 
								  $mftotal9.'</td>';
							 $html .= '<td>'.$row['other_male9'].'</td>
							 <td>'.$row['other_female9'].'</td>
							 <td>'. $oo9 = $row['other_female9'] + $row['other_male9'];
								 $oo9.'</td>';
							 $html .= '<td>'. $row['foreign_male9'].'</td>
							 <td>'. $row['foreign_female9'].'</td>
							 <td>'. $ff9 =  $row['foreign_female9'] + $row['foreign_male9'];
							 $ff9.'</td>
							 <td>'. $row['other_male9'] + $row['male9'] + $row['foreign_male9'].'</td>
							 <td>'. $row['other_female9'] + $row['female9'] + $row['foreign_female9'].'</td>';
							 $html .='<td>'. $total9 = $row['other_male9'] + $row['male9'] + $row['foreign_male9'] + $row['other_female9'] + $row['female9'] + $row['foreign_female9'];
							  $total9.'</td>
			</tr>';	
			$html .= '</tr>
			<tr>';
			$resultset = mysqli_query($con, "SELECT 
			(SELECT SUM(female) FROM aleman) as female2, 
			(SELECT SUM(female) FROM dinadiawanview) as female1, 
			(SELECT SUM(female) FROM ampere) as female3, 
			(SELECT SUM(female) FROM baul_falls) as female4, 
			(SELECT SUM(female) FROM blue_bridge) as female5, 
			(SELECT SUM(female) FROM diarabasin) as female6, 
			(SELECT SUM(female) FROM lipit) as female7, 
			(SELECT SUM(female) FROM pamwasan) as female8, 
			(SELECT SUM(female) FROM tw) as female9,
			(SELECT SUM(male) FROM aleman) as male2, 
			(SELECT SUM(male) FROM dinadiawanview) as male1, 
			(SELECT SUM(male) FROM ampere) as male3, 
			(SELECT SUM(male) FROM baul_falls) as male4, 
			(SELECT SUM(male) FROM blue_bridge) as male5, 
			(SELECT SUM(male) FROM diarabasin) as male6, 
			(SELECT SUM(male) FROM lipit) as male7, 
			(SELECT SUM(male) FROM pamwasan) as male8, 
			(SELECT SUM(male) FROM tw) as male9,
			(SELECT SUM(other_male) FROM aleman) as other_male2, 
			(SELECT SUM(other_male) FROM dinadiawanview) as other_male1, 
			(SELECT SUM(other_male) FROM ampere) as other_male3, 
			(SELECT SUM(other_male) FROM baul_falls) as other_male4, 
			(SELECT SUM(other_male) FROM blue_bridge) as other_male5, 
			(SELECT SUM(other_male) FROM diarabasin) as other_male6, 
			(SELECT SUM(other_male) FROM lipit) as other_male7, 
			(SELECT SUM(other_male) FROM pamwasan) as other_male8, 
			(SELECT SUM(other_male) FROM tw) as other_male9, 
			(SELECT SUM(foreign_male) FROM aleman) as foreign_male2, 
			(SELECT SUM(foreign_male) FROM dinadiawanview) as foreign_male1, 
			(SELECT SUM(foreign_male) FROM ampere) as foreign_male3, 
			(SELECT SUM(foreign_male) FROM baul_falls) as foreign_male4, 
			(SELECT SUM(foreign_male) FROM blue_bridge) as foreign_male5, 
			(SELECT SUM(foreign_male) FROM diarabasin) as foreign_male6, 
			(SELECT SUM(foreign_male) FROM lipit) as foreign_male7, 
			(SELECT SUM(foreign_male) FROM pamwasan) as foreign_male8, 
			(SELECT SUM(foreign_male) FROM tw) as foreign_male9, 
			(SELECT SUM(foreign_female) FROM aleman) as foreign_female2, 
			(SELECT SUM(foreign_female) FROM dinadiawanview) as foreign_female1, 
			(SELECT SUM(foreign_female) FROM ampere) as foreign_female3, 
			(SELECT SUM(foreign_female) FROM baul_falls) as foreign_female4, 
			(SELECT SUM(foreign_female) FROM blue_bridge) as foreign_female5, 
			(SELECT SUM(foreign_female) FROM diarabasin) as foreign_female6, 
			(SELECT SUM(foreign_female) FROM lipit) as foreign_female7, 
			(SELECT SUM(foreign_female) FROM pamwasan) as foreign_female8, 
			(SELECT SUM(foreign_female) FROM tw) as foreign_female9, 
			(SELECT SUM(other_female) FROM aleman) as other_female2, 
			(SELECT SUM(other_female) FROM dinadiawanview) as other_female1, 
			(SELECT SUM(other_female) FROM ampere) as other_female3, 
			(SELECT SUM(other_female) FROM baul_falls) as other_female4, 
			(SELECT SUM(other_female) FROM blue_bridge) as other_female5, 
			(SELECT SUM(other_female) FROM diarabasin) as other_female6, 
			(SELECT SUM(other_female) FROM lipit) as other_female7, 
			(SELECT SUM(other_female) FROM pamwasan) as other_female8, 
			(SELECT SUM(other_female) FROM tw) as other_female9");
			 $row = mysqli_fetch_assoc($resultset);
			$html .='<th colspan="6" rowspan="2">Total of this Month</th>
			<td>'. $row['male2'] + $row['male1'] + $row['male3'] + $row['male4'] + $row['male5'] + $row['male6'] + $row['male7'] + $row['male8'] + $row['male9'].'</td>
			<td>'. $row['female2'] + $row['female1'] + $row['female3'] + $row['female4'] + $row['female5'] + $row['female6'] + $row['female7'] + $row['female8'] + $row['female9'].'</td>
			<td>'. $grandtotal = $mftotal1 + $mftotal2 + $mftotal3 + $mftotal4 + $mftotal5 + $mftotal6 + $mftotal7 + $mftotal8 + $mftotal9. '</td>
			<td>'. $row['other_male2'] + $row['other_male1'] + $row['other_male3'] + $row['other_male4'] + $row['other_male5'] + $row['other_male6'] + $row['other_male7'] + $row['other_male8'] + $row['other_male9'].'</td>
			<td>'. $row['other_female2'] + $row['other_female1'] + $row['other_female3'] + $row['other_female4'] + $row['other_female5'] + $row['other_female6'] + $row['other_female7'] + $row['other_female8'] + $row['other_female9'].'</td>
			<td>'. $grandtotal2 = $oo1 + $oo2 + $oo3 + $oo4 + $oo5 + $oo6 + $oo7 + $oo8 + $oo9.'</td>
			<td>'. $row['foreign_male2'] + $row['foreign_male1'] + $row['foreign_male3'] + $row['foreign_male4'] + $row['foreign_male5'] + $row['foreign_male6'] + $row['foreign_male7'] + $row['foreign_male8'] + $row['foreign_male9'].'</td>
			<td>'. $row['foreign_female2'] + $row['foreign_female1'] + $row['foreign_female3'] + $row['foreign_female4'] + $row['foreign_female5'] + $row['foreign_female6'] + $row['foreign_female7'] + $row['foreign_female8'] + $row['foreign_female9'].'</td>
			<td>'. $grandtotal3 = $ff1 + $ff2 + $ff3 + $ff4 + $ff5 + $ff6 + $ff7 + $ff8 + $ff9 .'</td>
			<td>'. $grandtotal0 = $row['male1'] + $row['male2'] + $row['male3'] + $row['male4'] + $row['male5'] + $row['male6'] + $row['male7'] + $row['male8'] + $row['male9'] +  $row['other_male1'] + $row['other_male2'] + $row['other_male3'] + $row['other_male4'] + $row['other_male5'] + $row['other_male6'] + $row['other_male7'] + $row['other_male8'] + $row['other_male9'] + $row['foreign_male1'] + $row['foreign_male2'] + $row['foreign_male3'] + $row['foreign_male4'] + $row['foreign_male5'] + $row['foreign_male6'] + $row['foreign_male7'] + $row['foreign_male8'] + $row['foreign_male9'] + $row['female1'] + $row['female2'] + $row['female3'] + $row['female4'] + $row['female5'] + $row['female6'] + $row['female7'] + $row['female8'] + $row['female9'] +  $row['other_female1'] + $row['other_female2'] + $row['other_female3'] + $row['other_female4'] + $row['other_female5'] + $row['other_female6'] + $row['other_female7'] + $row['other_female8'] + $row['other_female9'] + $row['foreign_female1'] + $row['foreign_female2'] + $row['foreign_female3'] + $row['foreign_female4'] + $row['foreign_female5'] + $row['foreign_male6'] + $row['foreign_female7'] + $row['foreign_female8'] + $row['foreign_female9'];
			$grandtotal0.'</td>
			<td>'.$grandtotal0.'</td>
		</tr>';
	$html.='</table>';
	$html.='<center><h5>Note *Total number must be recorded. **Sex & ***Residence entries are optional. Total number of this month must be reported.</h5>';
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>