<body>
<h1>Comment of particular: </h1><br>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Comment</th>

    </tr>
    {{--@foreach($comment as $com)--}}
        <tr>
            <td>{{$comment['id']}}</td>
            <td>{{$comment['name']}}</td>
            <td>{{$comment['comments']}}</td>
        </tr>
    {{--@endforeach--}}
</table>
</body>