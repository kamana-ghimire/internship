<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}

table, tr, td, th {
  border: 1px solid black;
}

th {
  vertical-align: top;
}

td:empty:after {
  content: "\00a0"; /* HTML entity of &nbsp; */
}
</style>
</head>
<body>
<table>
    <tr>
        <th rowspan="2"> Cow Name<br>ID NO</th>
        <th rowspan="2"> Heat Date</th>
        <th colspan="2">1st service</th>
        <th colspan="2">2nd service</th>
        <th colspan="2">3rd service</th>
        <th colspan="2">1st DP test</th>
        <th colspan="2">2nd service</th>
        <th rowspan="2">Expected date<br>of calving</th>
        <th rowspan="2">Dired off<br>date</th>
        <th rowspan="2">Calving date</th>
        <th colspan="2">Calf get birth</th>
        <th rowspan="2">Remarks</th>

        
        </tr>
    </tr>
        <th colspan="1">Date</th>
        <th colspan="1">Method</th>
        <th colspan="1">Date</th>
        <th colspan="1">Method</th>
        <th colspan="1">Date</th>
        <th colspan="1">Method</th>
        <th colspan="1">Date</th>
        <th colspan="1">Result</th>
        <th colspan="1">Date</th>
        <th colspan="1">Result</th>
        <!-- <th rowspan="1"></th>
        <th rowspan="1"></th>
        <th rowspan="1"></th> -->
        <th colspan="1">Sex</th>
        <th colspan="1">Weight</th>
    </table>