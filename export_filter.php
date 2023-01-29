<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','tourism');

$res = "SELECT * FROM `overall`";
$results = mysqli_query($con, $res);
$allOrders = array();
while( $order = mysqli_fetch_assoc($results) ) {
	$allOrders[] = $order;
}
$startDateMessage = '';
$endDate = '';
$noResult ='';
if(isset($_POST["export"])){
 if(empty($_POST["month"])){
  $startDateMessage = '<label class="text-danger">Select start date.</label>';
 } else {  
  $orderQuery = "SELECT * FROM `overall` WHERE month = '".$_POST["month"]."'";
  $orderResult = mysqli_query($con, $orderQuery) or die("database error:". mysqli_error($con));
  $filterOrders = array();
  while( $order = mysqli_fetch_assoc($orderResult) ) {
	$filterOrders[] = $order;
  }
	$html='<style>table tr th{border: 1px solid black;} h4 {top: 0;} table td{border: 1px solid black;}</style>';
	if(count($filterOrders)) {
		$resultset = mysqli_query($con, "SELECT * FROM `overall`");
	   $order = mysqli_fetch_assoc($resultset);	
	   foreach($filterOrders as $order) {
			$orderData = array();
	$html.='<h4>Tourism Attaction Visitor Record</h4>
  			<center><h4>Month: '. $orderData[] = $order["month"] .'</h4></center>
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
		$html .='<tr>';
							$html .='<td colspan="4">' . $orderData[] = $order["place"] .'</td>
							<td colspan="2">'. $orderData[] = $order[""] . '</td>
							 <td>' . $orderData[] = $order["male"] .'</td>
							 <td>' . $orderData[] = $order["female"] .'</td>
							 <td>' . $orderData[] = $order["male"] + $order["female"] .'</td>
							 <td>' . $orderData[] = $order["other_male"] .'</td>
							 <td>' . $orderData[] = $order["other_female"].'</td>
							 <td>' . $orderData[] = $order["other_female"] + $order["other_male"].'</td> 
							 <td>' . $orderData[] = $order["foreign_male"] .'</td>
							 <td>' . $orderData[] = $order["foreign_female"]. '</td>
							 <td>' . $orderData[] = $order["foreign_male"] + $order["foreign_female"]. '</td>
							 <td colspan="3">' . $orderData[] = $order["foreign_male"] + $order["foreign_female"] + $order["female"] + $order["male"] + $order["other_female"] + $order["other_male"] .'</td>';
						   '</tr>';

					}
						$html.='</table>';
					}
				}
			}
	$html.='<center><h5>Note *Total number must be recorded. **Sex & ***Residence entries are optional. Total number of this month must be reported.</h5>';
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='report/'.time().'.pdf';
$mpdf->output($file,'I');
?>