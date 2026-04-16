<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Arsip KIR PKB</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- NAVBAR -->
<nav class="bg-white shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-indigo-600">Arsip KIR PKB</h1>
        <div class="space-x-6 hidden md:flex">
            <a href="#fitur" class="hover:text-indigo-600">Fitur</a>
            <a href="#alur" class="hover:text-indigo-600">Alur</a>
            <a href="#kontak" class="hover:text-indigo-600">Kontak</a>
        </div>
        <button onclick="openLogin()" class="bg-indigo-600 text-white px-4 py-2 rounded-lg">Login</button>
    </div>
</nav>

<!-- LOGIN MODAL -->
<div id="loginModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded-xl w-80">
        <h2 class="text-xl font-bold mb-4 text-center">Login Admin</h2>
        <input id="username" type="text" placeholder="Username" class="w-full mb-3 px-3 py-2 border rounded">
        <input id="password" type="password" placeholder="Password" class="w-full mb-3 px-3 py-2 border rounded">
        <button onclick="login()" class="w-full bg-indigo-600 text-white py-2 rounded">Login</button>
        <p id="error" class="text-red-500 text-sm mt-2 hidden">Login gagal</p>
    </div>
</div>

<!-- HERO -->
<section class="pt-32 pb-20 bg-gradient-to-r from-indigo-600 to-blue-500 text-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-4xl font-bold mb-4">DataKIR PKB</h2>
            <p class="mb-6">Kelola data uji kendaraan dengan cepat, aman, dan terstruktur tanpa ribet.</p>
            <button class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-semibold">
                Mulai Sekarang
            </button>
        </div>
        <div>
            <img src="https://illustrations.popsy.co/gray/work-from-home.svg" alt="">
        </div>
    </div>
</section>

<script>
function openLogin(){
    document.getElementById('loginModal').classList.remove('hidden');
    document.getElementById('loginModal').classList.add('flex');
}

function login(){
    const user = document.getElementById('username').value;
    const pass = document.getElementById('password').value;

    if(user === 'adminpkb' && pass === 'pkb123'){
        alert('Login berhasil!');
        window.location.href = '/kir-pkb/Sistem_controller'; // bebas arahkan
    }else{
        document.getElementById('error').classList.remove('hidden');
    }
}
</script>

</body>
</html>