@extends('website.master')
@section('content')
    <div style="text-align:center">
        <h1>{{ $course->course_Name }}</h1>

        @foreach ($course->videos as $data)
            {{-- <h1>{{ $data->courselists_id }} --}}
            {{-- <h1>{{ $course->course_Name }}</h1> --}}
            <video width="400" controls>
                <source src="{{ url('/uploads/' . $data->filename) }}" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">


            </video>
            
        @endforeach
        <h5>{{ $course->course_description }}</h5>

        @if (!$certificate)
            <a href="{{ route('certificate.list', $course->id) }}" class="btn "
                style="background-color: rgb(196, 219, 219)">Completed</a>
        @else
            <a href="{{ route('certificate.generate', $course->id) }}" class="btn btn-info">Claim Certificate</a>
        @endif


    </div>
@endsection
