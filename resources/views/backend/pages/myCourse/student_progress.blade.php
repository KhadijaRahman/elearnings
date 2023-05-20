@extends('backend.master')
@section('content')
<div class="container">

    <table class="table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Course Name</th>
            <th>Remark</th>

        </tr>
        </thead>
        <tbody>
            {{-- @php
                $data_val = str_count($videos->videos->courselists_id);
            @endphp --}}
            @foreach ($student_progress as $key=>$data)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $data->course->course_Name }} </td>
            <td><div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ (++$key)*10}}</div>
              </div></td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
