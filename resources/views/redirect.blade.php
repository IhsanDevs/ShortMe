@extends('layouts.bootstrap')

@section('content')
    <h1>Redirects in <span class="fw-bold" id="seconds"></span> seconds...</h1>
    <p>
        Total clicks: {{ $link->count }}
    </p>
    <script>
        let seconds = 5;
        let secondsElement = document.getElementById('seconds');
        secondsElement.innerText = seconds;
        setInterval(function () {
            seconds--;
            secondsElement.innerText = seconds;
        }, 1000);
        setTimeout(function () {
            window.location.href = "{{ $link->link }}";
        }, seconds * 1000);
    </script>
@endsection
