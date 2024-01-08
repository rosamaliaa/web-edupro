<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Profile User</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant%3A400%2C600%2C700"/>
  <link rel="stylesheet" href="{{ asset('user/styles/profile-user.css') }}"/>
</head>
<body>
<div class="profile-user-Hkh">
  <div class="auto-group-2wes-B5P">
    <div class="auto-group-dy5m-9yF">
      <p class="edupro-b4Z">EduPro</p>
      <img class="ic-round-list-oAd" src="{{ asset('user/assets/ic-round-list.png') }}"/>
    </div>
    <div class="rectangle-2575-fid">
    </div>
  </div>
  <div class="auto-group-vkvq-MbT">
    <div class="auto-group-yrp1-r2R">
      <div class="ellipse-4-tzh">
      </div>
      <p class="username-zXw">Username</p>
      <p class="siswa-edupro-JoX">Siswa EduPro</p>
      <div class="auto-group-3nxt-S93">
        <img class="icon-park-twotone-dashboard-car-LVK" src="{{ asset('user/assets/icon-park-twotone-dashboard-car-rA9.png') }}"/>
        <a href="{{ route('user.dashboard') }}"><p class="dashboard-1rM">Dashboard</p></a>
      </div>
      <p class="siswa-menu-L7w">siswa MENU</p>
      <div class="auto-group-shuw-r6H">
        <img class="ph-book-open-duotone-yRo" src="{{ asset('user/assets/ph-book-open-duotone-5vd.png') }}"/>
        <a href="{{ route('user.aksesmateri') }}"><p class="materi-gr1">Materi</p></a>
      </div>
      <div class="auto-group-zdnb-o9w">
        <img class="ph-book-duotone-6uj" src="{{ asset('user/assets/ph-book-duotone.png') }}"/>
        <a href="{{ route('user.tugasuser') }}"><p class="tugas-F1w">Tugas</p></a>
      </div>
      <div class="auto-group-ampp-yCq">
        <img class="healthicons-i-exam-multiple-choice-JW1" src="{{ asset('user/assets/healthicons-i-exam-multiple-choice-kwX.png') }}"/>
        <a href="{{ route('user.pengerjaanto') }}"><p class="try-out-nvy">Try Out</p></a>
      </div>
      <p class="user-menu-JPX">user MENU</p>
      <div class="auto-group-7u5d-E2H">
        <img class="iconamoon-profile-8NZ" src="{{ asset('user/assets/iconamoon-profile.png') }}"/>
        <a href="{{ route('user.profileuser') }}"><p class="profile-FTB">Profile</p></a>
      </div>
      <div class="auto-group-dr3z-Zim">
        <img class="material-symbols-logout-rounded-Uaq" src="{{ asset('user/assets/material-symbols-logout-rounded.png') }}"/>
        <a href="{{ route('user.landingpage') }}"><p class="logout-m49">Logout</p></a>
      </div>
    </div>
    <div class="auto-group-so3r-rbP">
      <div class="auto-group-1akm-njw">
        <p class="my-profile-Wfw">My Profile</p>
        <div class="auto-group-t3j9-FdX">
          <div class="ellipse-5-WpM">
          </div>
          <p class="dewi-rosita-NEH">Dewi Rosita</p>
          <p class="dewirositagmailcom-tyK">dewirosita@gmail.com</p>
          <p class="edupro-exclusive-student-RTT">EduPro Exclusive Student</p>
        </div>
      </div>
      <div class="auto-group-krwv-r2y">
        <div class="auto-group-rovm-zey">
          <p class="update-profile-Jff">Update Profile</p>
          <p class="nama-Cm3">Nama</p>
          <div class="rectangle-2578-LsF">
          </div>
          <p class="email-sMP">Email</p>
          <div class="rectangle-2579-Dg9">
          </div>
          <p class="foto-x7w">Foto</p>
          <div class="auto-group-fg83-JBo">
            <p class="choose-file-2Nh">Choose file...</p>
            <div class="auto-group-hbrd-WHs">Browse</div>
          </div>
          <div class="auto-group-mvyh-XTs">Save</div>
        </div>
        <div class="auto-group-4bjj-W4u">
          <p class="password-nHK">Password</p>
          <p class="current-password-6oo">Current Password</p>
          <div class="rectangle-2581-DdX">
          </div>
          <p class="new-password-i4V">New Password</p>
          <div class="rectangle-2582-eD3">
          </div>
          <div class="auto-group-6v67-n4M">Save</div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
