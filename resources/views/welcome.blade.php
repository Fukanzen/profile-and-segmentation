<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hansen</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('home.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="/asetweb/chaldea.png">
  </head>
  <body>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <a href="https://youtu.be/dQw4w9WgXcQ"><img src="/assets/logo-hehe.png" class="logo-kebangsaan"></a>
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Hobbies</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social-tab-pane" type="button" role="tab" aria-controls="social-tab-pane" aria-selected="false">Social</button>
        </li>
        <a href="/servant"><img src="/assets/command.png" class="comm" ></a>

    </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

          <div class="halaman1">
                <div class="text-wall">
                    <h1 class="title-header">Hello there...</h1>
                    <h2 class="title-header">My name's Hansen</h2>
                    <h5 class="title-header">I'm a student of PPTI 12 that's currently learning in BCA Learning Institute. I enjoys doing indoor activities alone in my empty time, I'm an Introvert. Currently learning casual Japanese in my free time, so that I may be able to speak it fluently in the future.</h5>
                </div>
                <img src="assets/Formal1.png" class="foto-profil">
                <img src="assets/backayo.png" class="backk">
            </div>

            <div class="halaman1-2">
              <img src="assets/elements1.png" class="walltext2img">
              <div class="heheheha">
                <img src="assets/colorcube1.png" class="cube">
                <img src="assets/istppic.png" class="istp">
                <div class="textwall2">
                  <h1 class="pers1">Personality</h1>
                  <h3 class="pers">ISTP-T</h3>
                  <h5 class="pers">A Virtuoso (ISTP) is someone with the Introverted, Observant, Thinking, and Prospecting personality traits. They tend to have an individualistic mindset, pursuing goals without needing much external connection. They engage in life with inquisitiveness and personal skill, varying their approach as needed.</h5>
                  {{-- <img src="assets/hehehehe.png" class="cubespot"> --}}
                </div>
              </div>
              <img src="assets/color1.png" class="border1">
            </div>

            <div class="halaman1-3">
              <div class="edu">
                <img src="assets/alien.png" class="alien">
                <img src="assets/titleplate.png" class="plate">
                <h2 class="edutitle">Education Background </h2>
                <div class="edulist">

                      <h3 class="educlass">Elementary School</h3>
                      <h4 class="eduschool">Saint Lucia Elementary School</h4>
                      <h5 class="eduadd">Kemuning V Street, Bojong Menteng, Rawalumbu Bekasi Jawa Barat 17117</h5>

                      <h3 class="educlass"> Junior High School</h3>
                      <h4 class="eduschool">Saint Lucia Junior High School</h4>
                      <h5 class="eduadd">Kemuning V Street, Bojong Menteng, Rawalumbu Bekasi Jawa Barat 17117</h5>

                      <h3 class="educlass">Senior High School</h3>
                      <h4 class="eduschool">Bunda Hati Kudus Senior High School</h4>
                      <h5 class="eduadd">Transyogi Street Km.6 Kota Wisata, Gunung Putri-Bogor 16968</h5>

                </div>
              </div>
            </div>
        </div>

        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <div class="hobbypage">

            <div class="photography">
              <img src="assets/photogenic.png" class="photog">
              <img src="assets/elements1.png" class="photoframe">

              <div class="phototext">
                <h2>Photography</h2>
                <h5>Started this one in Senior Highschool, I mainly do photography when I'm on a nature trip or when I'm camping. So the memory card usually filled with flowers, animals such as cats, and probably tree or mountains</h5>
              </div>
            </div>

            <div class="anime">
              <img src="assets/anime86.png" class="img86">
              <img src="assets/elements1.png" class="animeframe">
              <div class="animetext">
                <h2>Anime</h2>
                <h5>This hobby started at my junior high school year when listening vocaloid songs, most of the anime I've watched are drama, romance, comedy, or action animes. I'm not quite fond of shonen genre myself, I also read manga, light novels, and visual novel.</h5>
              </div>
            </div>

            <div class="game">
              <div class="gametext">
                <h2>Video Games</h2>
                <h5>This one started when I was Elementary, since child I played quite a lot of racing games, but now the genre changed a lot. I can't even bring myself to play racing games, now I mainly play JRPG and FPS(first person shooter) games.</h5>
              </div>
              <img src="assets/p3f.png" class="imgp4">
              <img src="assets/elements1.png" class="gameframe">
            </div>

          </div>
        </div>

        <div class="tab-pane fade" id="social-tab-pane" role="tabpanel" aria-labelledby="social-tab" tabindex="0">
          <div class="socialpage">
            <img src="assets/elements1.png" class="socialframe">

            <div class="textsocial">
              <div class="email"><h2>E-mail</h2><h5>hh7662891@gmail.com</h5></div>
              <div class="notelp"><h2>Phone</h2><h5>(+62) 813-8833-6135</h5></div>
              <div class="instagram"><h2>Instagram</h2><h5>@hans_en.ccc</h5></div>
              <div class="discord"><h2>Discord</h2><h5>Ink!#6663</h5></div>
              <div class="steam"><h2>Steam</h2><h5>1075610774</h5></div>
            </div>
            <img src="assets/alien.png" class="alien">
          </div>

        </div>

        <div class="tab-pane fade" id="anime-tab-pane" role="tabpanel" aria-labelledby="anime-tab" tabindex="0">
            <div class="animepage">


            </div>

      </div>

  </body>
</html>

