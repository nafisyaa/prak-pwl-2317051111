<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #e0f7fa; /* biru muda */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
    }
    .profile-card {
      background-color: #ffffff;
      border-radius: 12px;
      padding: 24px 20px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 340px;
    }
    .profile img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 2px solid #90caf9;
      object-fit: cover;
      margin-bottom: 16px;
    }
    .info-box {
      background-color: #f1f1f1;
      padding: 10px 14px;
      margin: 8px 0;
      border-radius: 6px;
      font-weight: 500;
      font-size: 15px;
    }
    .label {
      color: #555;
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="profile-card">
    <!-- Foto Profil -->
    <div class="profile">
      <img src="{{ asset('foto2.jpg') }}" alt="Foto Profil">
    </div>

    <!-- Informasi -->
    <div class="info-box"><span class="label">Nama:</span> {{ $Nama }}</div>
    <div class="info-box"><span class="label">NPM:</span> {{ $NPM }}</div>
    <div class="info-box"><span class="label">Kelas:</span> {{ $Kelas }}</div>
  </div>
</body>
</html>
