<body>
<h1>Delete Comments: </h1><br>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Comment</th>
        <th>Action</th>
    </tr>
    @foreach($comments as $com)
        <tr>
            <td>{{$com->name}}</td>
            <td>{{$com->comments}}</td>
            <td><a href="comments".{{$com->id}}>DELETE</a></td>
        </tr>
    @endforeach
</table>
</body>