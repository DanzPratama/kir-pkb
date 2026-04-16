<main class="flex-1 px-4 md:px-8 py-6">

  <!-- LOGO -->
  <div class="flex flex-col items-center mb-8">
    <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 
                flex items-center justify-center text-white text-3xl shadow-lg 
                hover:scale-110 transition duration-300 cursor-pointer">
      🚗
    </div>
    <h1 class="mt-3 text-lg font-bold text-slate-800">
      Arsip KIR PKB
    </h1>
    <p class="text-sm text-slate-500">
      Sistem Manajemen Data Kendaraan
    </p>
  </div>

  <!-- MENU -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- CARD -->
    <a href="data_arsip.php"
       class="group relative overflow-hidden rounded-2xl p-6 bg-white border border-slate-100 shadow 
              transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl"  onclick="showLoading()" >

      <div class="absolute inset-0 bg-gradient-to-br from-blue-500/0 to-blue-500/10 
                  opacity-0 group-hover:opacity-100 transition"></div>

      <div class="relative flex flex-col gap-4">
        <div class="text-4xl transition group-hover:scale-125 duration-300">📁</div>
        <h2 class="text-lg font-semibold text-slate-800 group-hover:text-blue-600">
          Data Arsip
        </h2>
        <p class="text-sm text-slate-500">
          Kelola data kendaraan KIR
        </p>
      </div>
    </a>

    <!-- CARD -->
      <a href="#"
        onclick="openModal()"
        class="group relative overflow-hidden rounded-2xl p-6 bg-white border border-slate-100 shadow 
                transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl">

        <div class="absolute inset-0 bg-gradient-to-br from-green-500/0 to-green-500/10 
                    opacity-0 group-hover:opacity-100 transition"></div>

        <div class="relative flex flex-col gap-4">
          <div class="text-4xl transition group-hover:scale-125 duration-300">➕</div>
          <h2 class="text-lg font-semibold text-slate-800 group-hover:text-green-600">
            Input Data
          </h2>
          <p class="text-sm text-slate-500">
            Tambah data kendaraan
          </p>
        </div>
      </a>
    <!-- CARD -->
    <a href="laporan.php"
       class="group relative overflow-hidden rounded-2xl p-6 bg-white border border-slate-100 shadow 
              transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl">

      <div class="absolute inset-0 bg-gradient-to-br from-purple-500/0 to-purple-500/10 
                  opacity-0 group-hover:opacity-100 transition"></div>

      <div class="relative flex flex-col gap-4">
        <div class="text-4xl transition group-hover:scale-125 duration-300">📊</div>
        <h2 class="text-lg font-semibold text-slate-800 group-hover:text-purple-600">
          Laporan
        </h2>
        <p class="text-sm text-slate-500">
          Rekap data KIR
        </p>
      </div>
    </a>

    <!-- CARD -->
    <a href="search.php"
       class="group relative overflow-hidden rounded-2xl p-6 bg-white border border-slate-100 shadow 
              transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl">

      <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/0 to-yellow-500/10 
                  opacity-0 group-hover:opacity-100 transition"></div>

      <div class="relative flex flex-col gap-4">
        <div class="text-4xl transition group-hover:scale-125 duration-300">🔍</div>
        <h2 class="text-lg font-semibold text-slate-800 group-hover:text-yellow-600">
          Pencarian
        </h2>
        <p class="text-sm text-slate-500">
          Cari No Uji / Polisi
        </p>
      </div>
    </a>

    <!-- CARD -->
    <a href="user.php"
       class="group relative overflow-hidden rounded-2xl p-6 bg-white border border-slate-100 shadow 
              transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl">

      <div class="absolute inset-0 bg-gradient-to-br from-red-500/0 to-red-500/10 
                  opacity-0 group-hover:opacity-100 transition"></div>

      <div class="relative flex flex-col gap-4">
        <div class="text-4xl transition group-hover:scale-125 duration-300">👤</div>
        <h2 class="text-lg font-semibold text-slate-800 group-hover:text-red-600">
          User
        </h2>
        <p class="text-sm text-slate-500">
          Kelola pengguna
        </p>
      </div>
    </a>

    <!-- CARD -->
    <a href="logout.php"
       class="group relative overflow-hidden rounded-2xl p-6 bg-white border border-slate-100 shadow 
              transition duration-300 transform hover:-translate-y-2 hover:shadow-2xl">

      <div class="absolute inset-0 bg-gradient-to-br from-slate-400/0 to-slate-400/20 
                  opacity-0 group-hover:opacity-100 transition"></div>

      <div class="relative flex flex-col gap-4">
        <div class="text-4xl transition group-hover:scale-125 duration-300">🚪</div>
        <h2 class="text-lg font-semibold text-slate-800">
          Logout
        </h2>
        <p class="text-sm text-slate-500">
          Keluar sistem
        </p>
      </div>
    </a>

  </div>

</main>
<div id="modalInput"
     class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center 
            opacity-0 pointer-events-none transition duration-300 z-50">

  <div class="bg-white rounded-2xl p-6 w-[90%] max-w-md shadow-2xl 
              transform scale-90 transition duration-300"
       id="modalContent">

    <h2 class="text-lg font-semibold text-slate-800 mb-4 text-center">
      Pilih Jenis Kendaraan
    </h2>

    <div class="grid grid-cols-2 gap-4">

      <!-- ANGKUTAN UMUM -->
      <a href="http://localhost:8081/kir-pkb/Sistem_controller/umum"
         class="bg-blue-50 hover:bg-blue-100 rounded-xl p-4 text-center transition">
        <div class="text-3xl mb-2"  onclick="showLoading()">🚌</div>
        <p class="text-sm font-medium text-blue-600">Angkutan Umum</p>
      </a>

      <!-- BARANG -->
      <a href="http://localhost:8081/kir-pkb/Sistem_controller/barang"
         class="bg-green-50 hover:bg-green-100 rounded-xl p-4 text-center transition">
        <div class="text-3xl mb-2"  onclick="showLoading()">🚚</div>
        <p class="text-sm font-medium text-green-600">Barang</p>
      </a>

    </div>

    <!-- CLOSE -->
    <button onclick="closeModal()"
            class="mt-6 w-full bg-slate-100 hover:bg-slate-200 rounded-xl py-2 text-sm">
      Batal
    </button>

  </div>
</div>
<div id="loadingOverlay"
     class="fixed inset-0 bg-white/70 backdrop-blur-sm flex items-center justify-center 
            hidden z-50">

  <div class="flex flex-col items-center gap-3">

    <!-- SPINNER -->
    <div class="w-12 h-12 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"></div>

    <p class="text-sm text-slate-600">Memuat...</p>

  </div>
</div>
<script>
function openModal() {
  const modal = document.getElementById('modalInput');
  const content = document.getElementById('modalContent');

  modal.classList.remove('opacity-0', 'pointer-events-none');
  content.classList.remove('scale-90');

  content.classList.add('scale-100');
}

function closeModal() {
  const modal = document.getElementById('modalInput');
  const content = document.getElementById('modalContent');

  modal.classList.add('opacity-0', 'pointer-events-none');
  content.classList.remove('scale-100');

  content.classList.add('scale-90');
}
function showLoading() {
  document.getElementById('loadingOverlay').classList.remove('hidden');
}
</script>