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
    <th rowspan="2">Type of<br>Feed</th>
    <th rowspan="2">Unite of<br>Measurement</th>