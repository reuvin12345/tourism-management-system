<?php
include 'config.php';

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Custom Field value
$searchBy_financial_quarter = $_POST['searchBy_financial_quarter'];
$searchByName = $_POST['searchByName'];
$searchByYear = $_POST['searchByYear'];
## Search 

$searchQuery = " ";
if($searchByName != ''){
    $searchQuery .= " and (place like '%".$searchByName."%') ";
}
if($searchBy_financial_quarter != ''){
    $searchQuery .= " and (month='".$searchBy_financial_quarter."') ";
}
if($searchByYear != ''){
    $searchQuery .= " and (year ='".$searchByYear."' ) ";
}
## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from overall");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from overall WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from overall WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"male"=>$row['male'],
    		"female"=>$row['female'],
    		"other_male"=>$row['other_male'],
    		"other_female"=>$row['other_female'],
    		"foreign_female"=>$row['foreign_female'],
            "foreign_male"=>$row['foreign_male'],
            "children"=>$row['children'],
            "youth"=>$row['youth'],
            "adult"=>$row['adult'],
            "old"=>$row['old'],
    		"month"=>$row['month'],
            "year"=>$row['year'],
            "place"=>$row['place']
    	);
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
