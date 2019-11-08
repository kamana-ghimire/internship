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
        <th rowspan="2">Name<br>ID NO</th>
        <th colspan="8">Yield per lactation period</th>
    </tr>
    <tr>
        <td>1st cl<td>
            
        <td>2st cl<td>
        <td>3st cl<td>
        <td>4st cl<td>
    </tr>
