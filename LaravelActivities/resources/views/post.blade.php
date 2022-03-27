<h1>Post Blade</h1>

<table>
    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Text</th>
    </tr>

    <tr>
        <td>{{$data['name']}}</td>
        <td>{{$data['course']}}</td>
        <td>{{$data['text']}}</td>
    </tr>
</table><br>

<a href="{{url('/home')}}"><button>Home</button><a>