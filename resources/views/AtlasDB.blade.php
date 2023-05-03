<link rel="stylesheet" type="text/css" href="{{url('db.css')}}">
<link rel="icon" type="image/x-icon" href="/asetweb/chaldea.png">
@extends('master')
@include('layout.header')
@section('judul', 'Servant')

    <div class="content">
        <div class="layer1">
            <div class="layerc">
                <h1 class="servname">{{$ChaldeaDB['charaName']}}</h1>

                @if ($ChaldeaDB['charaClass'] == 'Saber' && $ChaldeaDB['charaRare'] == 'SSR' | $ChaldeaDB['charaRare'] == 'SR')<img src="/asetweb/saber ssr.png" class="prodlogo">
                @elseif ($ChaldeaDB['charaClass'] == 'Saber' && $ChaldeaDB['charaRare'] == 'R')<img src="/asetweb/saber r.png" class="prodlogo">
                @elseif ($ChaldeaDB['charaClass'] == 'Lancer' && $ChaldeaDB['charaRare'] == 'SSR'| $ChaldeaDB['charaRare'] == 'SR')<img src="/asetweb/lancer ssr.png" class="prodlogo">
                @elseif ($ChaldeaDB['charaClass'] == 'Lancer' && $ChaldeaDB['charaRare'] == 'R')<img src="/asetweb/lancer r.png" class="prodlogo">
                @elseif ($ChaldeaDB['charaClass'] == 'Archer' && $ChaldeaDB['charaRare'] == 'SSR' | $ChaldeaDB['charaRare'] == 'SR')<img src="/asetweb/archer ssr.png" class="prodlogo">
                @elseif ($ChaldeaDB['charaClass'] == 'Archer' && $ChaldeaDB['charaRare'] == 'R')<img src="/asetweb/archer r.png" class="prodlogo">
                @endif
            </div>

            <div class="layer2">
                <img class="pfp" src="{{asset('asetweb/'. $ChaldeaDB['pic'])}}">

                <div class="layer3">
                    <h3 class="tit">Rarity</h3>
                    @if ($ChaldeaDB['charaRare'] == 'SSR') <img src="/asetweb/SSR.png" width="69" height="20" class="statlogo">
                    @elseif ($ChaldeaDB['charaRare'] == 'SR') <img src="/asetweb/SR.png" width="57" height="20" class="statlogo">
                    @elseif ($ChaldeaDB['charaRare'] == 'R') <img src="/asetweb/R.png" width="45" height="20" class="statlogo">
                    @endif

                    <h3 class="tit">Profile</h3>
                    <span>{{$ChaldeaDB['desc']}}</span>
                    <h3 class="tit">Noble Phantasm</h3>
                    <span>{{$ChaldeaDB['NP']}}</span>
                </div>
            </div>
        </div>
    </div>





