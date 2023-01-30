<h1>
	student Login
</h1>
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif

<form action="student" method="post" enctype="multipart/form-data">
	@csrf
	<!-- {{method_field('DELETE')}} -->
	<input type="text" name="username" placeholder="Enter Username">
	<span style="color:red">@error('username'){{$message}}@enderror</span>
	<br><br>
	<input type="password" name="password" placeholder="Enter Username">
		<span style="color:red">@error('password'){{$message}}@enderror</span>

    <br><br>
	<input type="email" name="email" placeholder="Enter Email"><br><br>
	<input type="file" name="file"><br><br>


   <button type="submit">Login</button>

</form>