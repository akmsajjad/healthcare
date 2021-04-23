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
    <th>name</th>
    <th>age</th>
    <th>gender</th>
    <th>email</th>
    <th>mobile</th>
    <th>location</th>
    <th>time</th>

  </tr>
  @foreach($info as $i)
  <tr>
    <td>{{$i->id}}</td>
    <td>{{$i->name}}</td>
    <td>{{$i->age}}</td>
    <td>{{$i->gender}}</td>
    <td>{{$i->email}}</td>
    <td>{{$i->mobile}}</td>
    <td>{{$i->location}}</td>
    <td>{{$i->time}}</td>
    
  </tr>
  @endforeach
</table>

</body>
</html>
