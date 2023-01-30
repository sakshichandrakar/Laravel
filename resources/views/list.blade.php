<h1>List</h1>
@if(session('delete'))
<h3>Deleted Succesfully</h3>
@endif
<table border=1>
    <tr>
        <th>Id</th>
        <th>Student NAme</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Image</th>
        <th>Action</th>
</tr>

    @foreach($list as $ls)
    <tr>
        <td>{{$ls['id']}}</td>
        <td>{{$ls['student_name']}}</td>
        <td>{{$ls['student_email']}}</td>
        <td>{{$ls['student_gender']}}</td>
        <td>{{$ls['student_image']}}</td>
        <td><a href={{"delete/".$ls['id']}}>Delete/</a><a href={{"edit/".$ls['id']}}>Edit</a></td>
     @endforeach   
   </tr>
</table>
<div >
    {{$list->links()}}
</div>
<style>
    .w-5{
        display:none;
    }
</style>