<link rel="stylesheet" type="text/css" href="{{url('edit.css')}}">
<link rel="icon" type="image/x-icon" href="/asetweb/chaldea.png">
@extends('master')
@section('judul', 'Servant List')
@include('layout.header')

    <div class="content">
        @foreach ($servantdata as $Atlas)
            <div class="fgo">

                <a href='/servant/db/{{$Atlas['id']}}'>
                    <img class="pfp" src="{{asset('asetweb/'. $Atlas['pic'])}}"></a>
                    <div class="fgotext">
                        <a href='/servant/db/{{$Atlas['id']}}' style="text-decoration:none">
                        <h1 class="servantName">{{$Atlas['charaName']}}</h1>
                        </a>

                        @if ($Atlas['charaRare'] == 'SSR') <img src="asetweb/SSR.png" width="69" height="20" class="statlogo">
                        @elseif ($Atlas['charaRare'] == 'SR') <img src="asetweb/SR.png" width="57" height="20" class="statlogo">
                        @elseif ($Atlas['charaRare'] == 'R') <img src="asetweb/R.png" width="45" height="20" class="statlogo">
                        @endif
                    </div>


                    @if ($Atlas['charaClass'] == 'Saber' && $Atlas['charaRare'] == 'SSR' | $Atlas['charaRare'] == 'SR')<img src="asetweb/saber ssr.png" class="prodlogo">
                    @elseif ($Atlas['charaClass'] == 'Saber' && $Atlas['charaRare'] == 'R')<img src="asetweb/saber r.png" class="prodlogo">
                    @elseif ($Atlas['charaClass'] == 'Lancer' && $Atlas['charaRare'] == 'SSR'| $Atlas['charaRare'] == 'SR')<img src="asetweb/lancer ssr.png" class="prodlogo">
                    @elseif ($Atlas['charaClass'] == 'Lancer' && $Atlas['charaRare'] == 'R')<img src="asetweb/lancer r.png" class="prodlogo">
                    @elseif ($Atlas['charaClass'] == 'Archer' && $Atlas['charaRare'] == 'SSR' | $Atlas['charaRare'] == 'SR')<img src="asetweb/archer ssr.png" class="prodlogo">
                    @elseif ($Atlas['charaClass'] == 'Archer' && $Atlas['charaRare'] == 'R')<img src="asetweb/archer r.png" class="prodlogo">
                    @endif
            </div>
        @endforeach
        </div>
