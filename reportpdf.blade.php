<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size :5px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h4>LIST REPORT</h4>

<table id="customers">
  <tr>
    <th>Report ID</th>
        <th>Open Date</th>
        <th>Open Name</th>
        <th>SRK Group</th>
        <th>Student Name</th>
        <th>Student Matric</th>
        <th>Student Tel No.</th>
        <th>Location</th>
        <th>Case</th>
        <th>Chronology</th>
        <th>Status</th>
        <th>Close Name</th>
        <th>Close Date</th>
  </tr>
  <tr>
    <tr>
        @foreach($report_table as $key=>$items)
        {{-- <td><img class="rounded-circle" width="35" src="{{URL::to('assets/images/'.$items->avatar)}}" alt=""></td> --}}
        <td class="id">{{$items->id}}</td>
        <td class="open_date">{{$items->open_date}}</td>
        <td class="openname">{{$items->openname}}</td>
        <td class="srkgroup">{{$items->srkgroup}}</td>
        <td class="studentname">{{$items->studentname}}</td>
        <td class="studentmatric">{{$items->studentmatric}}</td>
        <td class="studenttelno">0{{$items->studenttelno}}</td>
        <td class="location">{{$items->location}}</td>
        <td class="case">{{$items->kes}}</td>
        <td class="chronology">{{$items->chronology}}</td>
        <td class="status">{{$items->status}}</td>
        <td class="closename">{{$items->closename}}</td>
        <td class="close_date">{{$items->close_date}}</td>

        @endforeach
  </tr>
</table>

</body>
</html>


