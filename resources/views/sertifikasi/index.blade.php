@extends('layouts.app')
@section('title', 'Wisata Halal Jabal Nur')

@section('content')

                <div class="container mx-auto px-6 md:px-12 py-12">
                    <section>
                        <h1 class="text-4xl font-bold text-jabal-green">Sertifikasi Halal</h1>
                        <hr class="mt-4 mb-12 border-jabal-green border-t-2">
                    </section>
                    
                    <section class="section-lsk">
                    <div class="container">
                        
                        <!-- Filter -->
                        <div class="filter-bar">
                        <div class="filter-item">
                            <label for="show">Tampilkan</label>
                            <select id="show">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            </select>
                        </div>
                        <div class="filter-item">
                            <label for="search">Cari:</label>
                            <input type="text" id="search" placeholder="Masukan pencarian...">
                        </div>
                        </div>

                        <!-- Table -->
                        <div class="table-wrapper">
                        <table class="lsk-table" id="lskTable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>LSK</th>
                                <th>Keterampilan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody id="tableBody">
                            <!-- isi row tabel otomatis dari JS -->
                            </tbody>
                        </table>
                        </div>

                        <!-- Pagination -->
                        <div class="pagination" id="pagination"></div>

                    </div>
</section>

    <style>
    .section-lsk {
    padding: 20px;
    background: #f9f9f9;
    font-family: Arial, sans-serif;
    }

    .container {
    max-width: 1100px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    }

    .filter-bar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
    }

    .filter-item {
    display: flex;
    align-items: center;
    gap: 10px;
    }

    .filter-item input,
    .filter-item select {
    padding: 6px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    }

    .table-wrapper {
    overflow-x: auto;
    }

    .lsk-table {
    width: 100%;
    border-collapse: collapse;
    }

    .lsk-table th {
    background: #66bb6a;
    color: #fff;
    padding: 10px;
    text-align: left;
    }

    .lsk-table td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
    vertical-align: top;
    }

    .lsk-table a {
    color: #1a73e8;
    text-decoration: none;
    }

    .level {
    color: #e53935;
    font-weight: bold;
    }

    .btn-profil {
    display: inline-block;
    padding: 6px 14px;
    background: #1dd1a1;
    color: #fff; !important;
    text-decoration: none;
    border-radius: 6px;
    font-weight: bold;
    transition: background 0.2s;
    }

    /* Tambahan kalau masih ketimpa */
    .btn-profil:link,
    .btn-profil:visited,
    .btn-profil:hover,
    .btn-profil:active {
        color: #fff !important;
    }

    .btn-profil:hover {
    background: #10ac84;
    }

    .pagination {
    display: flex;
    justify-content: center;
    gap: 5px;
    margin-top: 15px;
    }

    .pagination button {
    border: none;
    padding: 6px 12px;
    border-radius: 5px;
    background: #eee;
    cursor: pointer;
    }

    .pagination button.active {
    background: #6c5ce7;
    color: #fff;
    }

    .pagination button:hover {
    background: #dfe6e9;
    }
    </style>

    <script>
    const data = [
    {
        lsk: "Lembaga Sertifikasi Kompetensi Pitra Indonesia",
        skills: [
        "Pijat Urut Tradisional Indonesia : Pemijat tradisional kebugaran <span class='level'>Level 3 (Rp. 800.000)</span>"
        ]
    },
    {
        lsk: "LEMBAGA SERTIFIKASI KOMPETENSI PEKARYA KESEHATAN",
        skills: [
        "Care Giver <span class='level'>Level 3 (Rp. 1.000.000)</span>",
        "Pekarya Kesehatan <span class='level'>Level 2 (Rp. 750.000)</span>"
        ]
    },
    {
        lsk: "Lembaga Sertifikasi Kompetensi Pijat Refleksi Persatuan Indonesia",
        skills: [
        "Pijat Pengobatan Refleksi <span class='level'>Level 2 (Rp. 600.000)</span>",
        "Pijat Pengobatan Refleksi <span class='level'>Level 3 (Rp. 750.000)</span>",
        "Pijat Pengobatan Refleksi <span class='level'>Level 4 (Rp. 900.000)</span>"
        ]
    },
    {
        lsk: "Lembaga Sertifikasi Kompetensi Pengasuh Anak",
        skills: [
        "Baby Sitter <span class='level'>Level 2 (Rp. 600.000)</span>",
        "Baby Sitter <span class='level'>Level 3 (Rp. 600.000)</span>",
        "Pengasuh Anak <span class='level'>Level 3 (Rp. 600.000)</span>"
        ]
    },
    {
        lsk: "LEMBAGA SERTIFIKASI KOMPETENSI (LSK) BROADCASTING",
        skills: [
        "Kamerawan <span class='level'>Level 3 (Rp. 700.000)</span>",
        "Penyiar Radio <span class='level'>Level 3 (Rp. 700.000)</span>",
        "Penyiar Berita Televisi <span class='level'>Level 3 (Rp. 800.000)</span>",
        "Video Editing <span class='level'>Level 3 (Rp. 700.000)</span>"
        ]
    },
    {
        lsk: "Lembaga Sertifikasi Kompetensi Hantaran",
        skills: [
        "Hantaran <span class='level'>Level 2 (Rp. 500.000)</span>"
        ]
    },
    {
        lsk: "Lembaga Sertifikasi Kompetensi Tata Busana",
        skills: [
        "Tata Busana <span class='level'>Level 2 (Rp. 700.000)</span>",
        "Tata Busana <span class='level'>Level 3 (Rp. 1.100.000)</span>"
        ]
    },
    {
        lsk: "LEMBAGA SERTIFIKASI KOMPETENSI BAHASA INGGRIS",
        skills: [
        "Bahasa Inggris : Survival English <span class='level'>Level Non KKNI (Rp. 500.000)</span>",
        "Bahasa Inggris : English for Communication <span class='level'>Level Non KKNI (Rp. 500.000)</span>",
        "Bahasa Inggris : Advance Communication in English <span class='level'>Level Non KKNI (Rp. 500.000)</span>",
        "Bahasa Inggris : English for Spesific Purposes <span class='level'>Level Non KKNI (Rp. 500.000)</span>"
        ]
    },
    {
        lsk: "Lembaga Sertifikasi Kompetensi Sekretaris",
        skills: [
        "Sekretaris <span class='level'>Level 2 (Rp. 450.000)</span>",
        "Sekretaris <span class='level'>Level 3 (Rp. 550.000)</span>"
        ]
    },
    {
        lsk: "Lembaga Sertifikasi Kompetensi Tata Rias Pengantin (LSK TRP)",
        skills: [
        "Tata Rias Pengantin <span class='level'>Level 3 (Rp. 820.000)</span>"
        ]
    },
    // contoh tambahan data dummy biar bisa coba pagination
    ...Array.from({length: 35}, (_,i) => ({
        lsk: "Dummy LSK " + (i+11),
        skills: ["Skill Dummy " + (i+11) + " <span class='level'>(Rp. 500.000)</span>"]
    }))
    ];

    let currentPage = 1;
    let rowsPerPage = 10;

    function displayTable(page) {
    const tableBody = document.getElementById("tableBody");
    tableBody.innerHTML = "";
    let start = (page-1) * rowsPerPage;
    let end = start + rowsPerPage;
    let paginatedItems = data.slice(start, end);

    paginatedItems.forEach((item, index) => {
        let tr = document.createElement("tr");
        tr.innerHTML = `
        <td>${start+index+1}</td>
        <td><a href="#">${item.lsk}</a></td>
        <td>${item.skills.join("<br>")}</td>
        <td><a href="#" class="btn-profil">Profil</a></td>
        `;
        tableBody.appendChild(tr);
    });
    }

    function setupPagination() {
    const pagination = document.getElementById("pagination");
    pagination.innerHTML = "";
    let pageCount = Math.ceil(data.length / rowsPerPage);

    for (let i=1; i<=pageCount; i++) {
        let btn = document.createElement("button");
        btn.textContent = i;
        if (i === currentPage) btn.classList.add("active");
        btn.addEventListener("click", () => {
        currentPage = i;
        displayTable(currentPage);
        setupPagination();
        });
        pagination.appendChild(btn);
    }
    }

    displayTable(currentPage);
    setupPagination();
    </script>

    </div>
@endsection
