<?php
     header("Content-Disposition: attachment; filename=MonthlyRecord.pdf");
     header("Content-Type: application/vnd.pdf");
?>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  h5 {
    top: 0;
  }
}
</style>
<h4>Tourism Attraction Visitor Record<br>( This recording form can be used instead of just counting the visitors)</h4>
<center><h4>Month/Year: May<br>
Name of City/Municipality: To the moon</h4><center>

<table>
<tr>
    <th colspan="6" style="background-color: yellow;"><center>Visitor Attraction</center></th>
    <td colspan="9" style="background-color: yellow;"><center>*** Place of Residence</center></td>
    <td colspan="3" rowspan="5" style="background-color: yellow;"><center>* Grand Total<br>Number of<br>Residence</center></td>
  </tr>
<tr>
    <th colspan="4" rowspan="4" style="background-color: yellow;">Name</th>
    <th colspan="2" rowspan="4" style="background-color: yellow;"><center>Attraction Code</center></th>
    <td colspan="6" style="background-color: yellow;"><center>Philippines</center></td>
    <th colspan="3" rowspan="3"  style="background-color: yellow;" ><center>Foreign Country Residence</center></th>
</tr>
<tr>
    <td colspan="3" rowspan="2" style="background-color: yellow;"><center>This Municipality</center></td>
    <td colspan="3" rowspan="2" style="background-color: yellow;"><center>Other Municipality</center></td>
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
</tr>
<tr>
                <th colspan="4">Aleman Beach</th>
                    <td colspan="2"></td>
                    <?php 
                         $con = new mysqli('localhost', 'root', '', 'tourism');
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from aleman) as male1,
                         (SELECT SUM(female) from aleman) as female1,
                         (SELECT SUM(other_male) from aleman) as other_male1,
                         (SELECT SUM(other_female) from aleman) as other_female1,
                         (SELECT SUM(foreign_male) from aleman) as foreign_male1,
                         (SELECT SUM(foreign_female) from aleman) as foreign_female1");
                        $row = mysqli_fetch_assoc($resultset);
                    ?>
                    <td><?php echo $row['male1'];?></td>
                    <td><?php echo $row['female1'];?></td>
                    <td><?php $mftotal1 = $row['male1'] + $row['female1']; 
                        echo $mftotal1;?></td>
                    <td><?php echo $row['other_female1'];?></td>
                    <td><?php echo $row['other_male1'];?></td>
                    <td><?php $oo1 = $row['other_female1'] + $row['other_male1'];
                        echo $oo1;?></td>
                    <td><?php echo $row['foreign_male1'];?></td>
                    <td><?php echo $row['foreign_female1'];?></td>
                    <td><?php $ff1 =  $row['foreign_female1'] + $row['foreign_male1'];
                    echo $ff1;?></td>
                    <td><?php echo $row['other_male1'] + $row['male1'] + $row['foreign_male1'];?></td>
                    <td><?php echo $row['other_female1'] + $row['female1'] + $row['foreign_female1'];?></td>
                    <td><?php $total1 = $row['other_male1'] + $row['male1'] + $row['foreign_male1'] + $row['other_female1'] + $row['female1'] + $row['foreign_female1'];
                    echo $total1;?></td>
                </tr>
<tr>
    <th  colspan="4">Ampere Beach</th>
    <td colspan="2"></td>
    <?php 
                         $con = new mysqli('localhost', 'root', '', 'tourism');
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from ampere) as male2,
                         (SELECT SUM(female) from ampere) as female2,
                         (SELECT SUM(other_male) from ampere) as other_male2,
                         (SELECT SUM(other_female) from ampere) as other_female2,
                         (SELECT SUM(foreign_male) from ampere) as foreign_male2,
                         (SELECT SUM(foreign_female) from ampere) as foreign_female2");
                        $row = mysqli_fetch_assoc($resultset);
                    ?>
                    <td><?php echo $row['male2'];?></td>
                    <td><?php echo $row['female2'];?></td>
                    <td><?php $mftotal2 = $row['male2'] + $row['female2'];
                    echo $mftotal2;?></td>
                    <td><?php echo $row['other_female2'];?></td>
                    <td><?php echo $row['other_male2'];?></td>
                    <td><?php $oo2 =  $row['other_female2'] + $row['other_male2'];
                    echo $oo2;?></td>
                    <td><?php echo $row['foreign_male2'];?></td>
                    <td><?php echo $row['foreign_female2'];?></td>
                    <td><?php $ff2 = $row['foreign_female2'] + $row['foreign_male2'];
                    echo $ff2;?></td>
                    <td><?php echo $row['other_male2'] + $row['male2'] + $row['foreign_male2'];?></td>
                    <td><?php echo $row['other_female2'] + $row['female2'] + $row['foreign_female2'];?></td>
                    <td><?php $total2 = $row['other_male2'] + $row['male2'] + $row['foreign_male2'] + $row['other_female2'] + $row['female2'] + $row['foreign_female2'];
                    echo $total2?></td>
                </tr>
<tr>
    <th  colspan="4">Baul Falls</th>
    <td colspan="2"></td>
    <?php 
                         $con = new mysqli('localhost', 'root', '', 'tourism');
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from baul_falls) as male3,
                         (SELECT SUM(female) from baul_falls) as female3,
                         (SELECT SUM(other_male) from baul_falls) as other_male3,
                         (SELECT SUM(other_female) from baul_falls) as other_female3,
                         (SELECT SUM(foreign_male) from baul_falls) as foreign_male3,
                         (SELECT SUM(foreign_female) from baul_falls) as foreign_female3");
                        $row = mysqli_fetch_assoc($resultset);
                    ?>
                    <td><?php echo $row['male3'];?></td>
                    <td><?php echo $row['female3'];?></td>
                    <td><?php $mftotal3 = $row['male3'] + $row['female3'];
                    echo $mftotal3;?></td>
                    <td><?php echo $row['other_female3'];?></td>
                    <td><?php echo $row['other_male3'];?></td>
                    <td><?php $oo3 = $row['other_female3'] + $row['other_male3'];
                    echo $oo3;?></td>
                    <td><?php echo $row['foreign_male3'];?></td>
                    <td><?php echo $row['foreign_female3'];?></td>
                    <td><?php $ff3 = $row['foreign_female3'] + $row['foreign_male3'];
                    echo $ff3;?></td>
                    <td><?php echo $row['other_male3'] + $row['male3'] + $row['foreign_male3'];?></td>
                    <td><?php echo $row['other_female3'] + $row['female3'] + $row['foreign_female3'];?></td>
                    <td><?php $total3 = $row['other_male3'] + $row['male3'] + $row['foreign_male3'] + $row['other_female3'] + $row['female3'] + $row['foreign_female3'];
                    echo $total3?></td>
                </tr>
<tr>
    <th  colspan="4">Blue Bridge</th>
    <td colspan="2"></td>
    <?php 
                         $con = new mysqli('localhost', 'root', '', 'tourism');
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from blue_bridge) as male4,
                         (SELECT SUM(female) from blue_bridge) as female4,
                         (SELECT SUM(other_male) from blue_bridge) as other_male4,
                         (SELECT SUM(other_female) from blue_bridge) as other_female4,
                         (SELECT SUM(foreign_male) from blue_bridge) as foreign_male4,
                         (SELECT SUM(foreign_female) from blue_bridge) as foreign_female4");
                        $row = mysqli_fetch_assoc($resultset);
                    ?>
                    <td><?php echo $row['male4'];?></td>
                    <td><?php echo $row['female4'];?></td>
                    <td><?php $mftotal4 = $row['male4'] + $row['female4'];
                    echo $mftotal4;?></td>
                    <td><?php echo $row['other_female4'];?></td>
                    <td><?php echo $row['other_male4'];?></td>
                    <td><?php $oo4 = $row['other_female4'] + $row['other_male4'];
                    echo $oo4;?></td>
                    <td><?php echo $row['foreign_male4'];?></td>
                    <td><?php echo $row['foreign_female4'];?></td>
                    <td><?php $ff4 = $row['foreign_female4'] + $row['foreign_male4'];
                    echo $ff4;?></td>
                    <td><?php echo $row['other_male4'] + $row['male4'] + $row['foreign_male4'];?></td>
                    <td><?php echo $row['other_female4'] + $row['female4'] + $row['foreign_female4'];?></td>
                    <td><?php $total4 = $row['other_male4'] + $row['male4'] + $row['foreign_male4'] + $row['other_female4'] + $row['female4'] + $row['foreign_female4'];
                    echo $total4?></td>
                </tr>
</tr>
<tr>
    <th  colspan="4">Dinadiawan White Beach</th>
    <td colspan="2"></td>
    <?php 
                         $con = new mysqli('localhost', 'root', '', 'tourism');
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from dinadiawanview) as male5,
                         (SELECT SUM(female) from dinadiawanview) as female5,
                         (SELECT SUM(other_male) from dinadiawanview) as other_male5,
                         (SELECT SUM(other_female) from dinadiawanview) as other_female5,
                         (SELECT SUM(foreign_male) from dinadiawanview) as foreign_male5,
                         (SELECT SUM(foreign_female) from dinadiawanview) as foreign_female5");
                        $row = mysqli_fetch_assoc($resultset);
                    ?>
                    <td><?php echo $row['male5'];?></td>
                    <td><?php echo $row['female5'];?></td>
                    <td><?php $mftotal5 = $row['male5'] + $row['female5'];
                    echo $mftotal5?></td>
                    <td><?php echo $row['other_female5'];?></td>
                    <td><?php echo $row['other_male5'];?></td>
                    <td><?php $oo5 =  $row['other_female5'] + $row['other_male5'];
                    echo $oo5;?></td>
                    <td><?php echo $row['foreign_male5'];?></td>
                    <td><?php echo $row['foreign_female5'];?></td>
                    <td><?php $ff5 = $row['foreign_female5'] + $row['foreign_male5'];
                    echo $ff5;?></td>
                    <td><?php echo $row['other_male5'] + $row['male5'] + $row['foreign_male5'];?></td>
                    <td><?php echo $row['other_female5'] + $row['female5'] + $row['foreign_female5'];?></td>
                    <td><?php $total5 = $row['other_male5'] + $row['male5'] + $row['foreign_male5'] + $row['other_female5'] + $row['female5'] + $row['foreign_female5'];
                    echo $total5;?></td>
                </tr>
<tr>
    <th  colspan="4">Diarabasin Islet</th>
    <td colspan="2"></td>
    <?php 
                         $con = new mysqli('localhost', 'root', '', 'tourism');
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from diarabasin) as male6,
                         (SELECT SUM(female) from diarabasin) as female6,
                         (SELECT SUM(other_male) from diarabasin) as other_male6,
                         (SELECT SUM(other_female) from diarabasin) as other_female6,
                         (SELECT SUM(foreign_male) from diarabasin) as foreign_male6,
                         (SELECT SUM(foreign_female) from diarabasin) as foreign_female6");
                        $row = mysqli_fetch_assoc($resultset);
                    ?>
                    <td><?php echo $row['male6'];?></td>
                    <td><?php echo $row['female6'];?></td>
                    <td><?php $mftotal6 = $row['male6'] + $row['female6'];
                    echo $mftotal6?></td>
                    <td><?php echo $row['other_female6'];?></td>
                    <td><?php echo $row['other_male6'];?></td>
                    <td><?php $oo6 = $row['other_female6'] + $row['other_male6'];
                    echo $oo6;?></td>
                    <td><?php echo $row['foreign_male6'];?></td>
                    <td><?php echo $row['foreign_female6'];?></td>
                    <td><?php $ff6 = $row['foreign_female6'] + $row['foreign_male6'];
                    echo $ff6;?></td>
                    <td><?php echo $row['other_male6'] + $row['male6'] + $row['foreign_male6'];?></td>
                    <td><?php echo $row['other_female6'] + $row['female6'] + $row['foreign_female6'];?></td>
                    <td><?php $total6 = $row['other_male6'] + $row['male6'] + $row['foreign_male6'] + $row['other_female6'] + $row['female6'] + $row['foreign_female6'];
                    echo $total6;?></td>
                </tr>
<tr>
    <th  colspan="4">Lipit</th>
    <td colspan="2"></td>
    <?php 
                         $con = new mysqli('localhost', 'root', '', 'tourism');
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from lipit) as male7,
                         (SELECT SUM(female) from lipit) as female7,
                         (SELECT SUM(other_male) from lipit) as other_male7,
                         (SELECT SUM(other_female) from lipit) as other_female7,
                         (SELECT SUM(foreign_male) from lipit) as foreign_male7,
                         (SELECT SUM(foreign_female) from lipit) as foreign_female7");
                        $row = mysqli_fetch_assoc($resultset);
                    ?>
                    <td><?php echo $row['male7'];?></td>
                    <td><?php echo $row['female7'];?></td>
                    <td><?php $mftotal7 = $row['male7'] + $row['female7'];
                    echo $mftotal7;?></td>
                    <td><?php echo $row['other_female7'];?></td>
                    <td><?php echo $row['other_male7'];?></td>
                    <td><?php $oo7 = $row['other_female7'] + $row['other_male7'];
                    echo $oo7;?></td>
                    <td><?php echo $row['foreign_male7'];?></td>
                    <td><?php echo $row['foreign_female7'];?></td>
                    <td><?php $ff7 = $row['foreign_female7'] + $row['foreign_male7'];
                    echo $ff7;?></td>
                    <td><?php echo $row['other_male7'] + $row['male7'] + $row['foreign_male7'];?></td>
                    <td><?php echo $row['other_female7'] + $row['female7'] + $row['foreign_female7'];?></td>
                    <td><?php $total7 = $row['other_male7'] + $row['male7'] + $row['foreign_male7'] + $row['other_female7'] + $row['female7'] + $row['foreign_female7'];
                    echo $total7;?></td>
                </tr>
<tr>
    <th  colspan="4">Pamsawan Rock Formation</th>
    <td colspan="2"></td>
    <?php 
                         $con = new mysqli('localhost', 'root', '', 'tourism');
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from pamwasan) as male8,
                         (SELECT SUM(female) from pamwasan) as female8,
                         (SELECT SUM(other_male) from pamwasan) as other_male8,
                         (SELECT SUM(other_female) from pamwasan) as other_female8,
                         (SELECT SUM(foreign_male) from pamwasan) as foreign_male8,
                         (SELECT SUM(foreign_female) from pamwasan) as foreign_female8");
                        $row = mysqli_fetch_assoc($resultset);
                    ?>
                    <td><?php echo $row['male8'];?></td>
                    <td><?php echo $row['female8'];?></td>
                    <td><?php $mftotal8 = $row['male8'] + $row['female8'];
                    echo $mftotal8?></td>
                    <td><?php echo $row['other_female8'];?></td>
                    <td><?php echo $row['other_male8'];?></td>
                    <td><?php $oo8 = $row['other_female8'] + $row['other_male8'];
                    echo $oo8;?></td>
                    <td><?php echo $row['foreign_male8'];?></td>
                    <td><?php echo $row['foreign_female8'];?></td>
                    <td><?php $ff8 = $row['foreign_female8'] + $row['foreign_male8'];
                    echo $ff8;?></td>
                    <td><?php echo $row['other_male8'] + $row['male8'] + $row['foreign_male8'];?></td>
                    <td><?php echo $row['other_female8'] + $row['female8'] + $row['foreign_female8'];?></td>
                    <td><?php $total8 = $row['other_male8'] + $row['male8'] + $row['foreign_male8'] + $row['other_female8'] + $row['female8'] + $row['foreign_female8'];
                    echo $total8;?></td>
                </tr>
<tr>
    <th colspan="4">Twin Cave</th>
    <td colspan="2"></td>
    <?php 
                         $con = new mysqli('localhost', 'root', '', 'tourism');
                         $resultset = mysqli_query($con, "SELECT(SELECT SUM(male) from tw) as male9,
                         (SELECT SUM(female) from tw) as female9,
                         (SELECT SUM(other_male) from tw) as other_male9,
                         (SELECT SUM(other_female) from tw) as other_female9,
                         (SELECT SUM(foreign_male) from tw) as foreign_male9,
                         (SELECT SUM(foreign_female) from tw) as foreign_female9");
                        $row = mysqli_fetch_assoc($resultset);
                    ?>
                    <td><?php echo $row['male9'];?></td>
                    <td><?php echo $row['female9'];?></td>
                    <td><?php $mftotal9 = $row['male9'] + $row['female9'];
                    echo $mftotal9;?></td>
                    <td><?php echo $row['other_female9'];?></td>
                    <td><?php echo $row['other_male9'];?></td>
                    <td><?php $oo9 = $row['other_female9'] + $row['other_male9'];
                    echo $oo9;?></td>
                    <td><?php echo $row['foreign_male9'];?></td>
                    <td><?php echo $row['foreign_female9'];?></td>
                    <td><?php $ff9 = $row['foreign_female9'] + $row['foreign_male9'];
                    echo $ff9;?></td>
                    <td><?php echo $row['other_male9'] + $row['male9'] + $row['foreign_male9'];?></td>
                    <td><?php echo $row['other_female9'] + $row['female9'] + $row['foreign_female9'];?></td>
                    <td><?php $total9 = $row['other_male9'] + $row['male9'] + $row['foreign_male9'] + $row['other_female9'] + $row['female9'] + $row['foreign_female9'];
                    echo $total9;?></td>
                </tr>
<tr>
<?php 
    $con = new mysqli('localhost', 'root', '', 'tourism');
    $resultset = mysqli_query($con, "SELECT 
    (SELECT SUM(female) FROM aleman) as female, 
    (SELECT SUM(female) FROM dinadiawanview) as female1, 
    (SELECT SUM(female) FROM ampere) as female3, 
    (SELECT SUM(female) FROM baul_falls) as female4, 
    (SELECT SUM(female) FROM blue_bridge) as female5, 
    (SELECT SUM(female) FROM diarabasin) as female6, 
    (SELECT SUM(female) FROM lipit) as female7, 
    (SELECT SUM(female) FROM pamwasan) as female8, 
    (SELECT SUM(female) FROM tw) as female9,
    (SELECT SUM(male) FROM aleman) as male, 
    (SELECT SUM(male) FROM dinadiawanview) as male1, 
    (SELECT SUM(male) FROM ampere) as male3, 
    (SELECT SUM(male) FROM baul_falls) as male4, 
    (SELECT SUM(male) FROM blue_bridge) as male5, 
    (SELECT SUM(male) FROM diarabasin) as male6, 
    (SELECT SUM(male) FROM lipit) as male7, 
    (SELECT SUM(male) FROM pamwasan) as male8, 
    (SELECT SUM(male) FROM tw) as male9,
    (SELECT SUM(other_male) FROM aleman) as other_male, 
    (SELECT SUM(other_male) FROM dinadiawanview) as other_male1, 
    (SELECT SUM(other_male) FROM ampere) as other_male3, 
    (SELECT SUM(other_male) FROM baul_falls) as other_male4, 
    (SELECT SUM(other_male) FROM blue_bridge) as other_male5, 
    (SELECT SUM(other_male) FROM diarabasin) as other_male6, 
    (SELECT SUM(other_male) FROM lipit) as other_male7, 
    (SELECT SUM(other_male) FROM pamwasan) as other_male8, 
    (SELECT SUM(other_male) FROM tw) as other_male9, 
    (SELECT SUM(foreign_male) FROM aleman) as foreign_male, 
    (SELECT SUM(foreign_male) FROM dinadiawanview) as foreign_male1, 
    (SELECT SUM(foreign_male) FROM ampere) as foreign_male3, 
    (SELECT SUM(foreign_male) FROM baul_falls) as foreign_male4, 
    (SELECT SUM(foreign_male) FROM blue_bridge) as foreign_male5, 
    (SELECT SUM(foreign_male) FROM diarabasin) as foreign_male6, 
    (SELECT SUM(foreign_male) FROM lipit) as foreign_male7, 
    (SELECT SUM(foreign_male) FROM pamwasan) as foreign_male8, 
    (SELECT SUM(foreign_male) FROM tw) as foreign_male9, 
    (SELECT SUM(foreign_female) FROM aleman) as foreign_female, 
    (SELECT SUM(foreign_female) FROM dinadiawanview) as foreign_female1, 
    (SELECT SUM(foreign_female) FROM ampere) as foreign_female3, 
    (SELECT SUM(foreign_female) FROM baul_falls) as foreign_female4, 
    (SELECT SUM(foreign_female) FROM blue_bridge) as foreign_female5, 
    (SELECT SUM(foreign_female) FROM diarabasin) as foreign_female6, 
    (SELECT SUM(foreign_female) FROM lipit) as foreign_female7, 
    (SELECT SUM(foreign_female) FROM pamwasan) as foreign_female8, 
    (SELECT SUM(foreign_female) FROM tw) as foreign_female9, 
    (SELECT SUM(other_female) FROM aleman) as other_female, 
    (SELECT SUM(other_female) FROM dinadiawanview) as other_female1, 
    (SELECT SUM(other_female) FROM ampere) as other_female3, 
    (SELECT SUM(other_female) FROM baul_falls) as other_female4, 
    (SELECT SUM(other_female) FROM blue_bridge) as other_female5, 
    (SELECT SUM(other_female) FROM diarabasin) as other_female6, 
    (SELECT SUM(other_female) FROM lipit) as other_female7, 
    (SELECT SUM(other_female) FROM pamwasan) as other_female8, 
    (SELECT SUM(other_female) FROM tw) as other_female9");
     $row = mysqli_fetch_assoc($resultset);
?>
    <th colspan="6" rowspan="2">Total of this Month</th>
    <td rowspan="2"><?php echo $row['male'] + $row['male1'] + $row['male3'] + $row['male4'] + $row['male5'] + $row['male6'] + $row['male7'] + $row['male8'] + $row['male9'];?></td>
    <td rowspan="2"><?php echo $row['female'] + $row['female1'] + $row['female3'] + $row['female4'] + $row['female5'] + $row['female6'] + $row['female7'] + $row['female8'] + $row['female9'];?></td>
    <td rowspan="2"><?php $grandtotal = $mftotal1 + $mftotal2 + $mftotal3 + $mftotal4 + $mftotal5 + $mftotal6 + $mftotal7 + $mftotal8 + $mftotal9;
    echo $grandtotal; ?></td>
    <td rowspan="2"><?php echo $row['other_male'] + $row['other_male1'] + $row['other_male3'] + $row['other_male4'] + $row['male5'] + $row['other_male6'] + $row['other_male7'] + $row['other_male8'] + $row['other_male9'];?></td>
    <td rowspan="2"><?php echo $row['other_female'] + $row['other_female1'] + $row['other_female3'] + $row['other_female4'] + $row['female5'] + $row['other_female6'] + $row['other_female7'] + $row['other_female8'] + $row['other_female9'];?></td>
    <td rowspan="2"><?php $grandtotal3 = $oo1 + $oo2 + $oo3 + $oo4 + $oo5 + $oo6 + $oo7 + $oo8 + $oo9;
    echo $grandtotal3 ?></td>
    <td rowspan="2"><?php echo $row['foreign_male'] + $row['foreign_male1'] + $row['foreign_male3'] + $row['foreign_male4'] + $row['foreign_male5'] + $row['foreign_male6'] + $row['foreign_male7'] + $row['foreign_male8'] + $row['foreign_male9'];?></td>
    <td rowspan="2"><?php echo $row['foreign_female'] + $row['foreign_female1'] + $row['foreign_female3'] + $row['foreign_female4'] + $row['foreign_female5'] + $row['foreign_female6'] + $row['foreign_female7'] + $row['foreign_female8'] + $row['foreign_female9'];?></td>
    <td rowspan="2"><?php $grandtotal4 = $mftotal1 + $mftotal2 + $mftotal3 + $mftotal4 + $mftotal5 + $mftotal6 + $mftotal7 + $mftotal8 + $mftotal9;
    echo $grandtotal4;?></td>
    <td rowspan="2"><?php $maletotal = $row['male1'] + $row['male'] + $row['male3'] + $row['male4'] + $row['male5'] + $row['male6'] + $row['male7'] + $row['male8'] + $row['male9'] +  $row['other_male1'] + $row['other_male'] + $row['other_male3'] + $row['other_male4'] + $row['other_male5'] + $row['other_male6'] + $row['other_male7'] + $row['other_male8'] + $row['other_male9'] + $row['foreign_male1'] + $row['foreign_male'] + $row['foreign_male3'] + $row['foreign_male4'] + $row['foreign_male5'] + $row['foreign_male6'] + $row['foreign_male7'] + $row['foreign_male8'] + $row['foreign_male9'];
    echo $maletotal;?></td>
    <td rowspan="2"><?php $femaletotal = $row['female1'] + $row['female'] + $row['female3'] + $row['female4'] + $row['female5'] + $row['female6'] + $row['female7'] + $row['female8'] + $row['female9'] +  $row['other_female1'] + $row['other_female'] + $row['other_female3'] + $row['other_female4'] + $row['other_female5'] + $row['other_female6'] + $row['other_female7'] + $row['other_female8'] + $row['other_female9'] + $row['foreign_female1'] + $row['foreign_female'] + $row['foreign_female3'] + $row['foreign_female4'] + $row['foreign_female5'] + $row['foreign_male6'] + $row['foreign_female7'] + $row['foreign_female8'] + $row['foreign_female9'];
    echo $femaletotal;?></td>
    <td rowspan="2"><?php echo $maletotal + $femaletotal?></td>
</tr>
</table>
<h5>Note *Total number must be recorded. **Sex & ***Residence entries are optional. Total number of this month must be reported.</h5>