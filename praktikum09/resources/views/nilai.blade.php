@php
    $nama = "Fauzi";
    $nilai 90;
@endphp

@if ($nilai > 80)
    @php
        $ket = "lulus";
    @endphp 
    @else
    @php
            $ket = "tidak lulus";
    @endphp
    
@endif

siswa dinyatakan {{ $nama }} dinyatakan {{ $ket }};