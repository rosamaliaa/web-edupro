<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Tugas Tentor</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="{{ asset('tentor/styles/tugas-tentor.css') }}"/>
</head>
<body>
<div class="tugas-tentor-kg5">
  <div class="auto-group-kk5b-u3B">
    <div class="auto-group-9chs-Soo">
      <p class="edupro-kpV">EduPro</p>
      <img class="ic-round-list-gTF" src="{{ asset('tentor/assets/ic-round-list-tSq.png') }}"/>
    </div>
    <div class="rectangle-2575-ziq">
    </div>
  </div>
  <div class="auto-group-6d2v-95w">
    <div class="auto-group-xqay-fpy">
      <div class="ellipse-4-ZvM">
      </div>
      <p class="username-V3K">Username</p>
      <p class="tentor-edupro-1XT">Tentor EduPro</p>
      <div class="auto-group-enw7-86H">
        <img class="icon-park-twotone-dashboard-car-eqK" src="{{ asset('tentor/assets/icon-park-twotone-dashboard-car-jzm.png') }}"/>
        <a href="{{ route('tentor.dashboard') }}"><p class="dashboard-xb7">Dashboard</p></a>
      </div>
      <p class="tentor-menu-JQ5">TENTOR MENU</p>
      <div class="auto-group-sfed-DX3">
        <img class="ph-book-open-duotone-kWy" src="{{ asset('tentor/assets/ph-book-open-duotone-kDB.png') }}"/>
        <a href="{{ route('tentor.materitentor') }}"><p class="materi-GVK">Materi</p></a>
      </div>
      <div class="auto-group-finh-1ho">
        <img class="ph-book-duotone-Xw3" src="{{ asset('tentor/assets/ph-book-duotone-PwB.png') }}"/>
        <a href="{{ route('tentor.tugastentor') }}"><p class="tugas-U5b">Tugas</p></a>
      </div>
      <div class="auto-group-kc2y-PTT">
        <img class="healthicons-i-exam-multiple-choice-7uF" src="{{ asset('tentor/assets/healthicons-i-exam-multiple-choice-aFf.png') }}"/>
        <a href="{{ route('tentor.ujiantentor') }}"><p class="try-out-dsb">Try Out</p></a>
      </div>
      <p class="user-menu-ygZ">user MENU</p>
      <div class="auto-group-7vds-6mB">
        <img class="iconamoon-profile-Dau" src="{{ asset('tentor/assets/iconamoon-profile-Dk9.png') }}"/>
        <a href="{{ route('tentor.tentoruser') }}"><p class="profile-YNH">Profile</p></a>
      </div>
      <div class="auto-group-1rnr-tBF">
        <img class="material-symbols-logout-rounded-csw" src="{{ asset('tentor/assets/material-symbols-logout-rounded-QaZ.png') }}"/>
        <a href="{{ route('user.landingpage') }}"><p class="logout-vtd">Logout</p></a>
      </div>
    </div>
    <div class="auto-group-yy69-Tdf">
      <div class="auto-group-lgaz-nvq">
        <div class="auto-group-mc29-ipV">Pilih Kelas</div>
        <div class="auto-group-rwwb-dgZ">
          <img class="image-17-m25" src="{{ asset('tentor/assets/image-17.png') }}"/>
          <p class="bahasa-indonesia-5YZ">BAHASA INDONESIA</p>
        </div>
        <div class="auto-group-fg8v-xcM">
          <img class="image-20-tW1" src="{{ asset('tentor/assets/image-20.png') }}"/>
          <p class="matematika-26R">MATEMATIKA</p>
        </div>
      </div>
      <div class="auto-group-2g21-ijw">
        <div class="auto-group-iaxm-qpZ">
          <img class="image-18-mTK" src="{{ asset('tentor/assets/image-18.png') }}"/>
          <p class="fisika-hbs">FISIKA</p>
        </div>
        <div class="auto-group-e7t1-ouo">
          <img class="image-19-Y6h" src="{{ asset('tentor/assets/image-19.png') }}"/>
          <p class="bahasa-inggris-UW9">BAHASA INGGRIS</p>
        </div>
      </div>
      <div class="auto-group-hc45-yho">
        <div class="auto-group-ukuh-JVB">
          <img class="image-21-UY5" src="{{ asset('tentor/assets/image-21.png') }}"/>
          <p class="biologi-Cys">BIOLOGI</p>
        </div>
        <div class="auto-group-ng8d-Jn1">
          <a href="{{ route('tentor.detailtugastentor1') }}">
            <img class="image-22-Dty" src="{{ asset('tentor/assets/image-22.png') }}"/>
            <p class="kimia-MEV">KIMIA</p>
          </a>
        </div>
      </div>
      <img class="ant-design-right-outlined-eUV" src="{{ asset('tentor/assets/ant-design-right-outlined.png') }}"/>
    </div>
  </div>
</div>
</body>
