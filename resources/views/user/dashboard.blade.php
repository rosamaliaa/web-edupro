<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Dashboard User</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant%3A400%2C600"/>
  <link rel="stylesheet" href="{{ asset('user/styles/dashboard-user.css') }}"/>
</head>
<body>
<div class="dashboard-user-WsP">
  <div class="auto-group-f2td-quf">
    <div class="auto-group-wggs-Bid">
      <p class="edupro-7cH">EduPro</p>
      <img class="ic-round-list-dad" src="{{ asset('user/assets/ic-round-list-Bws.png')}}"/>
    </div>
    <div class="rectangle-2575-XAD">
    </div>
  </div>
  <div class="auto-group-q42x-TZf">
    <div class="auto-group-5jdh-ADB">
      <div class="ellipse-4-r61">
      </div>
      <p class="username-mTs">Username</p>
      <p class="siswa-edupro-5zM">Siswa EduPro</p>
      <div class="auto-group-orpd-2Po">
        <img class="icon-park-twotone-dashboard-car-vVB" src="{{ asset('user/assets/icon-park-twotone-dashboard-car.png') }}"/>
        <p class="dashboard-1Wd">Dashboard</p>
      </div>
      <p class="siswa-menu-XUy">siswa MENU</p>
      <div class="auto-group-eav7-rGM">
        <img class="ph-book-open-duotone-nA1" src="{{ asset('user/assets/ph-book-duotone.png') }}"/>
        <a href="{{ route('user.aksesmateri') }}"><p class="materi-V4R">Materi</p></a>
      </div>
      <div class="auto-group-86ys-oau">
        <img class="ph-book-duotone-iC5" src="{{ asset('user/assets/ph-book-duotone-nkm.png') }}"/>
        <a href="{{ route('user.tugasuser') }}"><p class="tugas-eLd">Tugas</p></a>
      </div>
      <div class="auto-group-he9h-bFs">
        <img class="healthicons-i-exam-multiple-choice-8Fo" src="{{ asset('user/assets/healthicons-i-exam-multiple-choice.png') }}"/>
        <a href="{{ route('user.pengerjaanto') }}"><p class="try-out-E3w">Try Out</p></a>
      </div>
      <p class="user-menu-YKX">user MENU</p>
      <div class="auto-group-mzhm-4Ym">
        <img class="iconamoon-profile-b2u" src="{{ asset('user/assets/iconamoon-profile.png') }}"/>
        <a href="{{ route('user.profileuser') }}"><p class="profile-7G9">Profile</p></a>
      </div>
      <div class="auto-group-ahtf-qC9">
        <img class="material-symbols-logout-rounded-MwB" src="{{ asset('user/assets/material-symbols-logout-rounded-dZX.png') }}"/>
        <a href="{{ route('user.landingpage') }}"><p class="logout-TUR">Logout</p></a>
      </div>
    </div>
    <div class="auto-group-dx7d-mk1">
      <div class="auto-group-ra27-hNm">
        <div class="auto-group-az8w-rFf">
          <p class="notifikasi-tugas-k69">Notifikasi Tugas</p>
          <div class="auto-group-xfxz-swT">
            <div class="ellipse-5-oKK">
            </div>
            <div class="auto-group-zajw-LKF">
              <p class="tugas-5Gq">Tugas</p>
              <p class="bahasa-indonesia-Ddw">Bahasa Indonesia</p>
            </div>
            <div class="auto-group-ajkj-xbX">
              <p class="due-date-SFo">Due Date</p>
              <p class="item-2023-11-15-21-00-KKb">2023-11-15 21:00</p>
            </div>
          </div>
        </div>
        <div class="auto-group-aukx-MGH">
          <p class="notifikasi-materi-sVX">Notifikasi Materi</p>
          <div class="auto-group-x363-Nx5">
            <div class="ellipse-7-WoP">
            </div>
            <div class="auto-group-tz1h-eub">
              <p class="materi-yS5">Materi</p>
              <p class="bahasa-indonesia-KVw">Bahasa Indonesia</p>
            </div>
          </div>
        </div>
      </div>
      <div class="auto-group-umqf-byF">
        <div class="auto-group-w3tf-9zm">
          <p class="notifikasi-try-out-r8V">Notifikasi Try Out</p>
          <div class="auto-group-d9go-kDs">
            <div class="ellipse-6-spH">
            </div>
            <div class="auto-group-nhcx-oC9">
              <p class="testing-tugas-kNH">Testing Tugas</p>
              <p class="bahasa-indonesia-J8u">Bahasa Indonesia</p>
            </div>
          </div>
        </div>
        <div class="auto-group-l7x9-nZs">
          <div class="auto-group-kz8f-jED">
            <div class="auto-group-d4ku-GV3">
            </div>
            <div class="auto-group-cwph-b1X">
              <div class="auto-group-hqpm-U5K">1</div>
              <p class="tugas-sukses-dikerjakan-hTs">0 Tugas Sukses Dikerjakan</p>
              <p class="tugas-terlambat-dikerjakan-bp9">
                <span class="tugas-terlambat-dikerjakan-bp9-sub-0">0 Tugas</span>
                <span class="tugas-terlambat-dikerjakan-bp9-sub-1"> </span>
                <span class="tugas-terlambat-dikerjakan-bp9-sub-2">Terlambat Dikerjakan</span>
              </p>
            </div>
            <p class="total-tugas-9m7">Total Tugas</p>
          </div>
          <div class="auto-group-fz75-P9f">
            <div class="line-4-Xmf">
            </div>
            <div class="auto-group-frf5-fcy">
              <div class="auto-group-wuzj-9Y9">1</div>
              <p class="ada-1-materi-dikelas-kamu-b9F">Ada 1 Materi Dikelas Kamu</p>
            </div>
            <p class="total-materi-VkR">Total Materi</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
