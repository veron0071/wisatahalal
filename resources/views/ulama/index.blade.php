<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Ulama - Wisata Jabal Nur</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'jabal-green': '#255F38', 
                        'jabal-light': '#1F7D53', 
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        .custom-shadow {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }
        .custom-shadow-hover:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }
    </style>
</head>
<body class="bg-slate-50 font-sans">

    <header class="bg-jabal-green sticky top-0 z-50">
        <nav class="container mx-auto flex justify-between items-center p-4 text-white">
            <a href="{{ route('home') }}" class="text-xl font-semibold">Wisata Jabal Nur</a>
            </nav>
    </header>

    <main class="container mx-auto px-6 md:px-12 py-12">
        
        <section>
            <h1 class="text-3xl font-medium text-jabal-green">Sejarah Ulama</h1>
            <hr class="my-8 border-jabal-green border-t-2">
        </section>

        <section class="mt-12 flex flex-col md:flex-row items-start gap-8 md:gap-16">
            <div class="md:w-3/5 text-gray-600">
                <h2 class="text-2xl font-medium text-jabal-green mb-4">Ulama 0</h2>
                <p class="text-base leading-relaxed text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu magna et sapien volutpat commodo. Ut quis porta arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur interdum efficitur luctus. Curabitur bibendum mattis eros. Sed auctor, dui id sollicitudin fringilla, est enim sodales ipsum, et pharetra erat lorem pulvinar lorem. Curabitur condimentum mi sed sollicitudin pharetra. Praesent interdum mauris at dapibus mollis.
                </p>
            </div>
            <div class="md:w-2/5 flex justify-center">
                <img src="https://www.paramountshop.com/cdn/shop/files/spongebob-squarepants-life-sized-cardboard-cutout-standee-725187_750x.jpg?v=1718292084" alt="Ilustrasi Ulama 0" class="max-w-xs w-full">
            </div>
        </section>

        <section class="mt-16">
            <h1 class="text-3xl font-medium text-jabal-green mb-8">Daftar Ulama</h1>
            <hr class="my-8 border-jabal-green border-t-2">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                
            <section class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                <div style="background-image: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSpUS6CA_897G3KUknO6uYpDhXNWyXjpDz8cHR9Sq1i9gXWkDFE2r0uQizHANf5d8b8j6CAYWn8idK7CNBeLvhYTzNU2RNjauB5O2juJxjpWg');"  class="bg-gray-200 h-40 rounded-md mb-4 flex items-center justify-center" >
                </div>
                <p class="font-semibold text-jabal_">Ulama 1</p>
            </section>
            
            <section class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                <p class="font-semibold text-jabal_">Ulama 2</p>
            </section>

            <section class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                <p class="font-semibold text-jabal_">Ulama 3</p>
            </section>

            <section class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                <p class="font-semibold text-jabal_">Ulama 4</p>
            </section>

            <section class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                <p class="font-semibold text-jabal_">Ulama 5</p>
            </section>

            <section class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                <p class="font-semibold text-jabal_">Ulama 6</p>
            </section>

            <section class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                <p class="font-semibold text-jabal_">Ulama 7</p>
            </section>

            <section class="bg-white rounded-lg custom-shadow p-4 text-center transition-transform duration-300 custom-shadow-hover hover:-translate-y-1.5">
                <div class="bg-gray-200 h-40 rounded-md mb-4"></div>
                <p class="font-semibold text-jabal_">Ulama 8</p>
            </section>


            </div>
        </section>
    </main>

    <footer class="text-center py-8 mt-12 bg-white border-t">
        <p class="text-gray-500 text-sm">&copy; 2025 Wisata Halal Jabal Nur. Dikembangkan oleh PD MES Kendal.</p>
    </footer>

</body>
</html>