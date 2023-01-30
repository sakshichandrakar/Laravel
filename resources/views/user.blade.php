<h1>List</h1>
<table>
	<tr>
		<td>id</td>
		<td>Email</td>
		<td></td>
		<td></td>
		<td></td>

	</tr>
	
		@foreach($colletcion as $col)
		<tr>
			<td>{{$col['id']}}</td>
		<td>{{$col['id']}}</td>
		<td>{{$col['id']}}</td>
		<td>{{$col['id']}}</td>
		<td>{{$col['id']}}</td>

		</tr>
		@endforeach

	</table>