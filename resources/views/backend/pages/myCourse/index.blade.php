@extends('backend.master')
@section('content')
<div class="container">

    <table class="table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Course Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($courses as $key=>$data)
        <tr>
            <td>{{ ++$key }}</td>
            <td><a href="{{ route('backend.mycourse.student',$data->id) }}">{{ $data->course_Name }}</a>

            </td>
            <td>{{ $data->course_description }}</td>
            <td>
                <a href=""><i class="fa-light fa-eye"></i></a>
                <a href=""><i class="fa-light fa-pen-to-square"></i></a>
                <a href=""><i class="fa-light fa-pen-to-square"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

