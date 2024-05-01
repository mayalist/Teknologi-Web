<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3498db; 
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden; 
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); 
            transition: box-shadow 0.3s ease; 
        }
        .container:hover {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5); 
        }
        h1 {
            text-align: center;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        .profile-img { 
            display: block;
            margin: 0 auto;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 20px;
        }
        .biodata {
            margin-top: 30px;
        }
        .biodata-item {
            margin-bottom: 15px;
            color: #555;
            transition: background-color 0.3s ease; 
            cursor: pointer; 
            padding: 10px;
            border-radius: 5px;
        }
        .biodata-item:hover {
            background-color: #f1f189;
        }
        .biodata-item label {
            font-weight: bold;
            color: #000;
        }
        .biodata-item span {
            display: inline-block;
            margin-left: 10px;
            color: #777;
        }
        .icon {
            margin-right: 10px;
            transition: transform 0.3s ease; 
        }
        .icon:hover {
            transform: scale(1.1); 
        }
        /* Tambahan */
        .quote {
            text-align: center;
            margin-top: 30px;
            color: #444;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }
        .gallery-item {
            margin: 10px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .gallery-item img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
        .social-icons {
            text-align: center;
            margin-top: 30px;
        }
        .social-icons a {
            color: #555;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        .social-icons a:hover {
            color: #3498db;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="profile-img" src="https://i.pinimg.com/564x/9f/0b/91/9f0b918e35def00182f88350f9c0e5d9.jpg" alt="Profile Picture"> <!-- gambar profil -->
        <h1>My Biodata</h1>
        <div class="biodata">
            <div class="biodata-item">
                <i class="fas fa-user icon"></i>
                <label>Nama</label>
                <span>Maya Listyani</span>
            </div>
            <div class="biodata-item">
                <i class="fas fa-venus icon"></i>
                <label>Jenis Kelamin</label>
                <span>Perempuan</span>
            </div>
            <div class="biodata-item">
                <i class="fas fa-map-marker-alt icon"></i>
                <label>Tempat/Tanggal Lahir</label>
                <span>Sidoarjo, 07 Maret 2003</span>
            </div>
            <div class="biodata-item">
                <i class="fas fa-flag icon"></i>
                <label>Kewarganegaraan</label>
                <span>Indonesia</span>
            </div>
            <div class="biodata-item">
                <i class="fas fa-heart icon"></i>
                <label>Status</label>
                <span>Belum Menikah</span>
            </div>
            <div class="biodata-item">
                <i class="fas fa-mosque icon"></i>
                <label>Agama</label>
                <span>Islam</span>
            </div>
            <div class="biodata-item">
                <i class="fas fa-home icon"></i>
                <label>Domisili</label>
                <span>Sidoarjo</span>
            </div>
            <div class="biodata-item">
                <i class="fas fa-phone icon"></i>
                <label>No. Hp</label>
                <span>089523343435</span>
            </div>
            <div class="biodata-item">
                <i class="fas fa-envelope icon"></i>
                <label>Email</label>
                <span>listyanimayaa@gmail.com</span>
            </div>
            <!-- Tambahkan biodata akun Instagram -->
        </div>
        <!-- Kutipan Inspiratif -->
        <div class="quote">
            <p>"Jadilah perubahan yang ingin kamu lihat di dunia." - Mahatma Gandhi</p>
        </div>
        <!-- Tombol Sosial Media -->
        <div class="social-icons">
            <a href="https://instagram.com/maylisttt" target="_blank"><i class="fab fa-instagram"></i></a>
    
        </div>
    </div>
</body>
</html>
