<style>
 .datatable{
    width:800px;
    border: 1px solid black;
    border-collapse: collapse;
 }
 tr,th,td{
    border: 1px solid black;
    padding: 2px;
 }
</style>
<table class="datatable">
    <colgroup>
    <col width="20%">
    <col width="20%">
    <col width="20%">
    <col width="20%">
    <col width="10%">
    </colgroup>
    <tr>
        <th>Division</th>
        <th>District</th>
        <th>Police Station</th>
        <th>Post Office</th>
        <th>Post Code</th>
    </tr>

<?php
$en=null;
$contents = file_get_contents("bdAddress.json");
$myArray = json_decode($contents);
$dive = array($_GET['div']);
foreach ($myArray as $value) {
    foreach ($value as $key2 => $value2) {
        if($key2 == "en"){
            if(in_array($value2->division,$dive )){
echo <<<HTML
<tr>
        <td>$value2->division</td>
        <td>$value2->district</td>
        <td>$value2->thana</td>
        <td>$value2->suboffice</td>
        <td>$value2->postcode</td>
    </tr>
HTML;
            }
        }
    }
}

?>
</table>