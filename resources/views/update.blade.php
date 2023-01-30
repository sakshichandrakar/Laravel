<h1>
	Add student For Login
</h1>
@if(session('username'))
<h3>Update Succesfully</h3>
@endif
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif

<form action="/edit" method="post" enctype="multipart/form-data">
	@csrf
    <input type= "hidden" name="id" value="{{$data['id']}}" >
	<input type="text" name="username" value="{{$data['student_name']}}">
	<span style="color:red">@error('username'){{$message}}@enderror</span>
	<br><br>
	<input type="text" name="gender" value="{{$data['student_gender']}}">
		<span style="color:red">@error('password'){{$message}}@enderror</span>
    <br><br>
	<input type="email" name="email" value="{{$data['student_email']}}"><br><br>
	 <input type="file" name="file"><br><br> 


   <button type="submit">Login</button>

</form>