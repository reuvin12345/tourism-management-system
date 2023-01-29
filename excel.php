$html.='<tr><td>'.$row['male'].'</td><td>'.$row['female'].'</td><td>'.$row['other_male'].'</td><td>'.$row['other_female'].'</td><td>'.$row['foreign_male'].'</td><td>'.$row['foreign_female'].'</td><td>'.$row['place'].'</td></tr>'
<?php
include 'export.php';
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
    <tr>
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
    <td><?php $order["male"] ?></td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
</tr>
<tr>
    <th  colspan="4">Ampere Beach</th>
    <td colspan="2"></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
</tr>
<tr>
    <th  colspan="4">Baul Falls</th>
    <td colspan="2"></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
</tr>
<tr>
    <th  colspan="4">Blue Bridge</th>
    <td colspan="2"></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
</tr>
<tr>
    <th  colspan="4">Dinadiawan White Beach</th>
    <td colspan="2"></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
</tr>
<tr>
    <th  colspan="4">Diarabasin Islet</th>
    <td colspan="2"></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
</tr>
<tr>
    <th  colspan="4">Lipit</th>
    <td colspan="2"></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
</tr>
<tr>
    <th  colspan="4">Pamsawan Rock Formation</th>
    <td colspan="2"></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
</tr>
<tr>
    <th colspan="4">Twin Cave</th>
    <td colspan="2"></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
</tr>
<tr>
    <th colspan="6" rowspan="2">Total of this Month</th>
    <td rowspan="2">1</td>
    <td rowspan="2">2</td>
    <td rowspan="2">3</td>
    <td rowspan="2">4</td>
    <td rowspan="2">5</td>
    <td rowspan="2">6</td>
    <td rowspan="2">7</td>
    <td rowspan="2">8</td>
    <td rowspan="2">9</td>
    <td rowspan="2">0</td>
    <td rowspan="2">11</td>
    <td rowspan="2">12</td>
</tr>
</table>
<h5>Note *Total number must be recorded. **Sex & ***Residence entries are optional. Total number of this month must be reported.</h5>