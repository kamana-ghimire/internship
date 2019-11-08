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
        <th rowspan="2">Date of birth<br>purchase</th>
        <th rowspan="2">Breed type</th>
        <th rowspan="2">Date of sales<br>/Death</th>
    </tr>
    <!-- <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr> -->
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>    
