<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}

table {
  width: 100%;
}
</style>
</head>
<body>

<h2>Problems</h2>

<table>
  <tr>
    <th>serial</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>problem</th>
  </tr>
  @foreach($problem as $p)
  <tr>
    <td>{{$p->id}}</td>
    <td>{{$p->firstname}}</td>
    <td>{{$p->lastname}}</td>
    <td>{{$p->subject}}</td>
    
  </tr>
  @endforeach
</table>

</body>
</html>
