<main class="flex-1 px-4 md:px-8 py-6 space-y-6">

  <!-- HEADER -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
    <div>
      <h1 class="text-base font-semibold text-slate-900 dark:text-slate-50">
        🚚 Dashboard Kendaraan Barang
      </h1>
      <p class="text-xs text-slate-500 dark:text-slate-300">
        Data khusus kendaraan angkutan barang (Truk, Pickup, dll)
      </p>
    </div>
 <!-- KANAN: FILTER -->
    <div class="flex flex-wrap items-center gap-2">

      <!-- SEARCH -->
      <input type="text" id="searchInput"
        placeholder="Cari No Uji / No Kendaraan..."
        class="rounded-xl border px-3 py-2 text-sm">

      <!-- JENIS -->
   
  <!-- JENIS -->
 <select id="filterJenis"
  class="rounded-xl border px-3 py-2 text-sm">

  <option value="">Semua Jenis</option>
  <option value="truk">Truk</option>
  <option value="pickup">Pick Up</option>
  <option value="box">Mobil Box</option>
  <option value="tangki">Tangki</option>
  <option value="dump">Dump Truck</option>
  <option value="trailer">Trailer</option>

</select>

      <!-- TANGGAL -->
      <input type="date" id="filterStart"
        class="rounded-xl border px-3 py-2 text-sm">

      <span class="text-sm">-</span>

      <input type="date" id="filterEnd"
        class="rounded-xl border px-3 py-2 text-sm">

      <!-- RESET -->
      <button id="resetFilter"
        class="rounded-xl bg-gray-200 px-3 py-2 text-sm hover:bg-gray-300">
        Reset
      </button>

    </div>
  </div>

  <!-- TOMBOL TAMBAH (DIBAWAH & BESAR) -->
  <div>
    <button id="btnAdd"
      class="w-full md:w-auto rounded-2xl bg-indigo-500 text-white px-6 py-3 text-base font-semibold shadow hover:bg-indigo-600 transition">
      ➕ Tambah Data Kendaraan
    </button>
  </div>


    
  
  <!-- STATS -->
  <section class="grid grid-cols-1 lg:grid-cols-3 gap-4">

    <div class="rounded-3xl border bg-white/70 p-4 shadow">
      <p class="text-[11px] text-slate-500 uppercase">Total Kendaraan Barang</p>
      <p class="mt-2 text-2xl font-semibold text-slate-900">
        <span id="totalData">0</span>
      </p>
    </div>

    <div class="rounded-3xl border bg-white/70 p-4 shadow">
      <p class="text-[11px] text-slate-500 uppercase">Masih Berlaku</p>
      <p class="mt-2 text-2xl font-semibold text-emerald-600">
        <span id="totalAktif">0</span>
      </p>
    </div>

    <div class="rounded-3xl border bg-white/70 p-4 shadow">
      <p class="text-[11px] text-slate-500 uppercase">Expired</p>
      <p class="mt-2 text-2xl font-semibold text-rose-600">
        <span id="totalExpired">0</span>
      </p>
    </div>

  </section>

  <!-- TABLE -->
  <section class="rounded-3xl border bg-white/80 shadow overflow-hidden">

    <div class="px-5 py-3 border-b">
      <p class="text-sm font-medium text-slate-900">
        Data Kendaraan Barang Terbaru
      </p>
    </div>

    <div class="overflow-x-auto">
      <table class="min-w-full text-xs md:text-sm">

        <thead class="bg-slate-100">
          <tr>
            <th class="px-4 py-2 text-left">No Uji</th>
            <th class="px-4 py-2 text-left">Nama</th>
             <th class="px-4 py-2 text-left">Nama Perusahaan</th>
            <th class="px-4 py-2 text-left">No Kendaraan</th>
            <th class="px-4 py-2 text-left">No Mesin</th>
            <th class="px-4 py-2 text-left">No Rangka</th>
           
            <th class="px-4 py-2 text-left">JBB</th>
            <th class="px-4 py-2 text-left">Tgl Uji</th>
            <th class="px-4 py-2 text-left">Selanjutnya</th>
            <th class="px-4 py-2 text-left">Status</th>
            <th class="px-4 py-2 text-center">Aksi</th>
          </tr>
        </thead>

        <tbody id="tableDashboard"></tbody>

      </table>
      <div class="flex justify-between items-center p-3 text-xs">
  <span id="pageInfo"></span>
  <div id="pagination" class="flex gap-1"></div>
</div>
    </div>

  </section>

</main>
<div id="modalOverlay"
  class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/40">

  <div class="w-full max-w-4xl bg-white rounded-3xl p-6">

    <div class="flex justify-between mb-4">
      <h2 class="text-sm font-semibold">Tambah Kendaraan Barang</h2>
      <button id="closeModal">✕</button>
    </div>

    <form id="formBarang" class="grid grid-cols-1 md:grid-cols-2 gap-5 text-sm">

  <!-- Nama Perusahaan -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">Nama Perusahaan</label>
    <input type="text" name="merek"
      class="w-full rounded-xl border border-slate-300 px-4 py-3 text-base focus:ring-2 focus:ring-indigo-400 focus:outline-none">
  </div>

  <!-- Nama Pemilik -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">Nama Pemilik</label>
    <input type="text" name="nama_pemilik"
      class="w-full rounded-xl border border-slate-300 px-4 py-3 text-base focus:ring-2 focus:ring-indigo-400 focus:outline-none">
  </div>

  <!-- No Kendaraan -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">Nomor Kendaraan</label>
    <input type="text" name="no_kendaraan"
      class="w-full rounded-xl border border-slate-300 px-4 py-3 text-base focus:ring-2 focus:ring-indigo-400 focus:outline-none">
  </div>

  <!-- No Uji -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">Nomor Uji KIR</label>
    <input type="text" name="no_uji_kir"
      class="w-full rounded-xl border border-slate-300 px-4 py-3 text-base focus:ring-2 focus:ring-indigo-400 focus:outline-none">
  </div>

  <!-- No Mesin -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">Nomor Mesin</label>
    <input type="text" name="no_mesin"
      class="w-full rounded-xl border border-slate-300 px-4 py-3 text-base focus:ring-2 focus:ring-indigo-400 focus:outline-none">
  </div>

  <!-- No Rangka -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">Nomor Rangka</label>
    <input type="text" name="no_rangka"
      class="w-full rounded-xl border border-slate-300 px-4 py-3 text-base focus:ring-2 focus:ring-indigo-400 focus:outline-none">
  </div>

  <!-- JBB -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">JBB (Berat Kendaraan)</label>
    <input type="number" name="kapasitas"
      class="w-full rounded-xl border border-slate-300 px-4 py-3 text-base focus:ring-2 focus:ring-indigo-400 focus:outline-none">
  </div>

  <!-- Jenis Kendaraan -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">Jenis Kendaraan</label>
    <input type="text" name="jenis_kendaraan"
      class="w-full rounded-xl border border-slate-300 px-4 py-3 text-base focus:ring-2 focus:ring-indigo-400 focus:outline-none">
  </div>

  <!-- Tanggal Uji -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">Tanggal Uji KIR</label>
    <input type="date" name="tgl_uji_kir" id="tgl_uji_kir"
      class="w-full rounded-xl border border-slate-300 px-4 py-3 text-base focus:ring-2 focus:ring-indigo-400 focus:outline-none">
  </div>

  <!-- Tanggal Selanjutnya -->
  <div>
    <label class="block mb-1 font-medium text-slate-700">Tanggal Uji Selanjutnya</label>
    <input type="date" name="tgl_uji_selanjutnya" id="tgl_uji_selanjutnya" readonly
      class="w-full rounded-xl border border-slate-300 bg-slate-100 px-4 py-3 text-base">
  </div>

  <!-- BUTTON -->
  <div class="col-span-2 mt-4">
    <button type="submit"
      class="w-full rounded-xl bg-indigo-500 text-white text-base font-semibold py-3 hover:bg-indigo-600 transition">
      💾 Simpan Data
    </button>
  </div>

</form>

  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  // OPEN MODAL
$("#btnAdd").click(function(){
  $("#modalOverlay").removeClass("hidden");
});

// CLOSE
$("#closeModal").click(function(){
  $("#modalOverlay").addClass("hidden");
});

// AUTO TGL +6 BULAN
$("#tgl_uji_kir").on("change", function(){
  let t = new Date(this.value);
  if(!isNaN(t)){
    t.setMonth(t.getMonth()+6);
    let y = t.getFullYear();
    let m = String(t.getMonth()+1).padStart(2,'0');
    let d = String(t.getDate()).padStart(2,'0');
    $("#tgl_uji_selanjutnya").val(`${y}-${m}-${d}`);
  }
});

// SUBMIT
$("#formBarang").submit(function(e){
  e.preventDefault();

  let data = $(this).serializeArray();
  data.push({name:'jenis_angkutan', value:'barang'});

  $.post("<?= base_url('Sistem_controller/store') ?>", data, function(res){
    let r = JSON.parse(res);

    if(r.status){
      alert("Berhasil tambah 🚚");
      $("#modalOverlay").addClass("hidden");
      $("#formBarang")[0].reset();
      loadData();
    }
  });
});

let currentPage = 1;
let limit = 50;
let currentSearch = "";

function getStatus(tgl){
  let today = new Date();
  let target = new Date(tgl);
  return target >= today ? "aktif" : "expired";
}

let filterJenis = "";
let filterStart = "";
let filterEnd = "";

function loadData(){

  $.get("<?= base_url('Sistem_controller/getBarangPaginate') ?>", {
    page: currentPage,
    limit: limit,
    search: currentSearch,
    jenis: filterJenis,
    start: filterStart,
    end: filterEnd
  }, function(res){

    let result = JSON.parse(res);
    renderTable(result.data);
    renderPagination(result.total);
  });
}

// FILTER JENIS
$("#filterJenis").on("change", function(){
  filterJenis = $(this).val();
  currentPage = 1;
  loadData();
});

// FILTER TANGGAL
$("#filterStart, #filterEnd").on("change", function(){
  filterStart = $("#filterStart").val();
  filterEnd = $("#filterEnd").val();
  currentPage = 1;
  loadData();
});

// RESET
$("#resetFilter").click(function(){
  $("#filterJenis").val("");
  $("#filterStart").val("");
  $("#filterEnd").val("");

  filterJenis = "";
  filterStart = "";
  filterEnd = "";

  loadData();
});

function renderTable(data){

  let html = "";
  let aktif = 0, expired = 0;

  data.forEach(r => {

    let status = getStatus(r.tgl_uji_selanjutnya);

    let badge = status === "aktif"
      ? `<span class="bg-emerald-100 text-emerald-700 px-2 py-1 rounded-full text-xs">Aktif</span>`
      : `<span class="bg-rose-100 text-rose-700 px-2 py-1 rounded-full text-xs">Expired</span>`;

    if(status === "aktif") aktif++;
    else expired++;

    html += `
    <tr class="hover:bg-slate-50">
      <td class="px-4 py-2">${r.no_uji_kir}</td>
      <td class="px-4 py-2">${r.nama_pemilik}</td>
      <td class="px-4 py-2">${r.merek}</td>
      <td class="px-4 py-2">🚚 ${r.no_kendaraan}</td>
      <td class="px-4 py-2">${r.no_mesin}</td>
      <td class="px-4 py-2">${r.no_rangka}</td>
      <td class="px-4 py-2">${r.kapasitas}</td>
      <td class="px-4 py-2">${r.tgl_uji_kir}</td>
      <td class="px-4 py-2">${r.tgl_uji_selanjutnya}</td>
      <td class="px-4 py-2">${badge}</td>

      <td class="px-4 py-2 text-center">
        <div class="flex flex-col gap-2">

          <button onclick="editData(${r.id})"
            class="w-full bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 rounded-xl text-sm">
            ✏️ Edit
          </button>

          <button onclick="deleteData(${r.id})"
            class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 rounded-xl text-sm">
            🗑 Hapus
          </button>

        </div>
      </td>
    </tr>
    `;
  });

  // 🔥 TARUH DI LUAR LOOP
  $("#tableDashboard").html(html);

  $("#totalData").text(data.length);
  $("#totalAktif").text(aktif);
  $("#totalExpired").text(expired);
}

// PAGINATION
function renderPagination(total){
  let totalPages = Math.ceil(total / limit);
  let html = "";

  for(let i = 1; i <= totalPages; i++){
    html += `
      <button class="px-2 py-1 rounded ${i == currentPage ? 'bg-indigo-500 text-white' : 'bg-slate-200'}"
        onclick="goPage(${i})">
        ${i}
      </button>
    `;
  }

  $("#pagination").html(html);
  $("#pageInfo").text(`Page ${currentPage} of ${totalPages} | Total ${total} data`);
}

function goPage(page){
  currentPage = page;
  loadData();
}

// EDIT
function editData(id){
  $.get("<?= base_url('Sistem_controller/edit/') ?>" + id, function(res){

    let r = JSON.parse(res);

    $("input[name=merek]").val(r.merek);
    $("input[name=nama_pemilik]").val(r.nama_pemilik);
    $("input[name=no_kendaraan]").val(r.no_kendaraan);
    $("input[name=no_uji_kir]").val(r.no_uji_kir);
    $("input[name=no_mesin]").val(r.no_mesin);
    $("input[name=no_rangka]").val(r.no_rangka);
    $("input[name=kapasitas]").val(r.kapasitas);
    $("input[name=jenis_kendaraan]").val(r.jenis_kendaraan);
    $("input[name=tgl_uji_kir]").val(r.tgl_uji_kir);
    $("input[name=tgl_uji_selanjutnya]").val(r.tgl_uji_selanjutnya);

    $("#modalOverlay").removeClass("hidden");

    $("#formBarang").off("submit").on("submit", function(e){
      e.preventDefault();

      let data = $(this).serializeArray();
      data.push({name:'jenis_angkutan', value:'barang'});

      $.post("<?= base_url('Sistem_controller/update/') ?>" + id, data, function(){
        alert("Data berhasil diupdate ✏️");

        $("#modalOverlay").addClass("hidden");
        $("#formBarang")[0].reset();
        loadData();
      });
    });

  });
}

// DELETE
function deleteData(id){
  if(confirm("Yakin hapus data?")){
    $.get("<?= base_url('Sistem_controller/delete/') ?>" + id, function(){
      alert("Data berhasil dihapus 🗑");
      loadData();
    });
  }
}

// SEARCH
$("#searchInput").on("keyup", function(){
  currentSearch = $(this).val();
  currentPage = 1;
  loadData();
});

// INIT
loadData();
</script>