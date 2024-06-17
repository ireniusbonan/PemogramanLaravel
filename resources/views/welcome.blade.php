<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f0f0f0;
        /* Warna latar belakang agak abu-abu */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        text-align: center;
        color: #333;
        /* Warna teks */
    }

    .container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        padding: 2rem;
        background-color: rgba(255, 255, 255, 0.9);
        /* Warna latar belakang konten */
        border-radius: 15px;
        /* Border radius untuk konten */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        /* Shadow untuk konten */
        color: #333;
        /* Warna teks untuk konten */
    }

    .main-content,
    .additional-content {
        flex: 1;
        margin: 1rem;
    }

    .main-content {
        max-width: 600px;
    }

    h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
    }

    p {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.3);
    }

    .btn-primary {
        padding: 0.75rem 1.5rem;
        font-size: 1.25rem;
        background: #6e8efb;
        /* Warna background tombol */
        color: #fff;
        /* Warna teks tombol */
        border: none;
        border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: background 0.3s, box-shadow 0.3s;
    }

    .btn-primary:hover {
        background: #a777e3;
        /* Warna background tombol saat hover */
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .card {
        background: rgba(255, 255, 255, 0.9);
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        color: #333;
        margin: 1rem;
        padding: 1rem;
        text-align: left;
    }

    .card h2 {
        color: #6e8efb;
        /* Warna judul card */
        margin-bottom: 0.5rem;
        font-size: 1.8rem;
    }

    .card p {
        color: #555;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 0.5rem;
    }

    @media (max-width: 768px) {
        .card h2 {
            font-size: 1.5rem;
        }

        .card p {
            font-size: 1rem;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="main-content">
            <h1>Welcome to My Blog</h1>
            <p>This is the welcome page of my Laravel application.</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">View All Posts</a>
        </div>

        <div class="additional-content">
            <div class="card">
                <h2>Visi</h2>
                <p>Universitas Teknologi Bandung menjadi perguruan tinggi yang berdaya saing dan unggul secara
                    nasional pada tahun 2020.</p>
            </div>
            <div class="card">
                <h2>Misi</h2>
                <p>Menyelenggarakan program pendidikan, penelitian, dan pengabdian kepada masyarakat secara efisien,
                    terpadu, tepat waktu, dan berkesinambungan.</p>
                <p>Menyelenggarakan pendidikan dengan keunggulan mutu yang diselaraskan dengan perkembangan ilmu
                    pengetahuan, teknologi dan seni. Adaptif terhadap tantangan sosial, budaya dan lingkungan.</p>
                <p>Mengupayakan terobosan dan inovatif dalam mencari teknologi tepat guna yang memberi manfaat bagi
                    pembangunan berwawasan lingkungan.</p>
                <p>Berpartisipasi aktif dalam kajian teknologi tepat guna bagi industri sedang dan menengah.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>