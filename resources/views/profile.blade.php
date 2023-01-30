@if(session('user'))
<h3>User Is login</h3>
@endif
<h1>Profile Page</h1>
<h2>Welcome  {{session('user')}}</h2>
<a href="/logout">Logout</a>