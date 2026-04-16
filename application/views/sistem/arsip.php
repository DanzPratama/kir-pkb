
      <!-- Content -->
      <main class="flex-1 px-4 md:px-8 py-6 space-y-5">
        <!-- Tabs + filters + actions -->
        <div class="flex flex-col gap-4">
          <!-- Tabs -->
          <div class="flex flex-wrap items-center justify-between gap-3">
            <!-- <div class="inline-flex rounded-2xl bg-slate-200/70 p-1 text-xs text-slate-600 shadow-sm dark:bg-white/10 dark:text-slate-200">
              <button id="tabAll"
                      class="px-3 py-1.5 rounded-2xl font-medium bg-white shadow-sm text-slate-900 dark:bg-slate-900 dark:text-slate-100">
                Semua
              </button>
              <button id="tabLulus"
                      class="px-3 py-1.5 rounded-2xl font-medium border-transparent">
                Lulus UJI
              </button>
              <button id="tabTidak"
                      class="px-3 py-1.5 rounded-2xl font-medium border-transparent">
                Tidak Lulus UJI
              </button>
            </div> -->

            <div class="flex flex-wrap items-center gap-2 text-xs">
              <!-- Filter tanggal uji -->
              <div class="flex items-center gap-2">
                <span class="text-[11px] text-slate-600 dark:text-slate-300">Tanggal UJI:</span>
                <input id="filterStart" type="date"
                       class="rounded-xl border border-slate-300 bg-white/80 px-2 py-1 text-xs text-slate-700 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-white/15 dark:bg-slate-900/60 dark:text-slate-100" />
                <span class="text-[11px] text-slate-500 dark:text-slate-300">s.d</span>
                <input id="filterEnd" type="date"
                       class="rounded-xl border border-slate-300 bg-white/80 px-2 py-1 text-xs text-slate-700 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-white/15 dark:bg-slate-900/60 dark:text-slate-100" />
                <button id="btnClearFilter"
                        class="rounded-xl border border-slate-300 bg-white/80 px-2 py-1 text-[11px] text-slate-600 hover:bg-slate-100 dark:border-white/15 dark:bg-slate-900/60 dark:text-slate-200 dark:hover:bg-slate-900">
                  Reset
                </button>
              </div>
            </div>
          </div>

          <!-- Actions: Add + Export -->
          <div class="flex flex-wrap items-center justify-between gap-3 text-xs">
            <div class="flex items-center gap-2">
           <button id="btnAdd"
        class="inline-flex items-center gap-1.5 rounded-2xl bg-gradient-to-r from-indigo-400 via-sky-400 to-cyan-300 px-4 py-1.5 font-semibold text-slate-900 shadow-md shadow-sky-900/40 hover:brightness-105 active:scale-[0.98] transition">
  <span>＋</span>
  <span>Tambah Data</span>
</button>

            </div>

            <div class="flex items-center gap-2">
              <button id="btnExport"
                      class="inline-flex items-center gap-1.5 rounded-2xl border border-emerald-400/60 bg-emerald-400/10 px-4 py-1.5 font-semibold text-emerald-700 hover:bg-emerald-400/20 active:scale-[0.98] transition dark:text-emerald-100">
                <span>📊</span>
                <span>Export Berdasarkan Tab</span>
              </button>
            </div>
          </div>
        </div>

        <!-- Table -->
        <section class="rounded-3xl border border-slate-200/80 bg-white/80 backdrop-blur-2xl shadow-lg shadow-slate-900/10 overflow-hidden dark:border-white/15 dark:bg-white/5 dark:shadow-[0_18px_40px_rgba(0,0,0,0.75)]">
          <div class="px-4 md:px-5 py-3 border-b border-slate-200/80 flex items-center justify-between gap-2 dark:border-white/10">
            <div>
              <p class="text-sm font-medium text-slate-900 dark:text-slate-50">Data Kendaraan</p>
              <p class="text-[11px] text-slate-500 mt-0.5 dark:text-slate-300">
                Daftar kendaraan berdasarkan hasil UJI loadda.
              </p>
            </div>
          </div>

         <div class="overflow-x-auto rounded-2xl border border-slate-200 dark:border-white/10">
  <table id="table" class="min-w-full text-xs md:text-sm text-left">
    
    <!-- HEADER -->
    <thead class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white text-xs uppercase tracking-wide">
      <tr>
        <th class="px-4 py-3">No Uji</th>
        <th class="px-4 py-3">Pemilik</th>
        <th class="px-4 py-3">No Kendaraan</th>
        <th class="px-4 py-3">Merk</th>
        <th class="px-4 py-3">Jenis</th>
        <th class="px-4 py-3">Tgl Uji</th>
        <th class="px-4 py-3">Selanjutnya</th>
        <th class="px-4 py-3 text-center">Aksi</th>
      </tr>
    </thead>

    <!-- BODY -->
    <tbody id="tableBody" class="divide-y divide-slate-200 dark:divide-white/10 bg-white dark:bg-slate-900">
      <!-- isi dari JS -->
    </tbody>

  </table>
</div>
        </section>
      </main>
    </div>
  </div>



  <!-- Modal Input -->
  <div id="modalOverlay"
       class="hidden fixed inset-0 z-40 flex items-center justify-center bg-black/40 backdrop-blur-sm">
    <div class="w-full max-w-lg mx-4 rounded-3xl border border-slate-200 bg-white/95 shadow-2xl shadow-slate-900/20 dark:border-white/15 dark:bg-slate-900">
      <div class="flex items-center justify-between px-5 pt-4 pb-2 border-b border-slate-200 dark:border-slate-700">
        <div>
          <p id="modalTitle" class="text-sm font-semibold text-slate-900 dark:text-slate-50">
            Tambah Data PKB
          </p>
          <p class="text-[11px] text-slate-500 dark:text-slate-300">
            Lengkapi informasi kendaraan dan hasil UJI PKB.
          </p>
        </div>
        <button id="modalClose"
                class="h-8 w-8 rounded-2xl border border-slate-200 bg-white text-xs text-slate-600 hover:bg-slate-100 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 dark:hover:bg-slate-700">
          ✕
        </button>
      </div>

   <form id="pkbForm" class="px-5 pt-4 pb-5 space-y-3 text-xs">

  <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

    <!-- Kepemilikan -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Kepemilikan
      </label>
      <select id="kategori_kendaraan" name="kategori_kendaraan"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
        <option value="">Pilih...</option>
        <option value="pribadi">Pribadi</option>
        <option value="perusahaan">Perusahaan</option>
      </select>
    </div>

    <!-- Nama -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Nama Pemilik
      </label>
      <input type="text" name="nama_pemilik"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- HP -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        No HP
      </label>
      <input type="text" name="no_hp"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- No Kendaraan -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Nomor Kendaraan
      </label>
      <input type="text" name="no_kendaraan"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- No Uji -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        No Uji KIR
      </label>
      <input type="text" name="no_uji_kir"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- Mesin -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Nomor Mesin
      </label>
      <input type="text" name="no_mesin"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- Rangka -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Nomor Rangka
      </label>
      <input type="text" name="no_rangka"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- Merk -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Merk
      </label>
      <input type="text" name="merek"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- Kapasitas -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Kapasitas Penumpang
      </label>
      <input type="number" name="kapasitas"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- Jenis -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Jenis Kendaraan
      </label>
      <input type="text" name="jenis_kendaraan"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- Tgl Uji -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Tanggal Uji KIR
      </label>
      <input type="date" name="tgl_uji_kir" id="tgl_uji_kir"
        class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
    </div>

    <!-- Tgl Selanjutnya -->
    <div>
      <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">
        Tanggal Uji Selanjutnya
      </label>
      <input type="date" name="tgl_uji_selanjutnya" id="tgl_uji_selanjutnya"
        readonly
        class="w-full rounded-2xl border border-slate-300 bg-slate-100 px-3 py-1.5 text-xs text-slate-800 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-100">
    </div>

  </div>

  <!-- BUTTON -->
  <div class="flex justify-end gap-2 pt-3">
    <button type="button" id="modalCancel"
      class="rounded-2xl border border-slate-300 bg-white/80 px-4 py-1.5 text-[11px] text-slate-700 hover:bg-slate-100 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-200 dark:hover:bg-slate-700">
      Batal
    </button>

    <button type="submit"
      class="rounded-2xl bg-gradient-to-r from-indigo-400 via-sky-400 to-cyan-300 px-4 py-1.5 text-[11px] font-semibold text-slate-900 shadow-md hover:brightness-105 active:scale-[0.98]">
      Simpan
    </button>
  </div>

</form>
    </div>
  </div>

  <script>
    // ==== THEME TOGGLE ====
    const root = document.documentElement;
    const themeToggle = document.getElementById("themeToggle");
    const iconSun = document.getElementById("iconSun");
    const iconMoon = document.getElementById("iconMoon");

    function applyTheme(isDark) { 
      if (isDark) {
        root.classList.add("dark");
        iconSun?.classList.add("hidden");
        iconMoon?.classList.remove("hidden");
        localStorage.setItem("theme", "dark");
      } else {
        root.classList.remove("dark");
        iconSun?.classList.remove("hidden");
        iconMoon?.classList.add("hidden");
        localStorage.setItem("theme", "light");
      }
    }

    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
      applyTheme(true);
    } else {
      applyTheme(false);
    }

    themeToggle?.addEventListener("click", () => {
      const isDark = !root.classList.contains("dark");
      applyTheme(isDark);
    });

    // ==== SIDEBAR TOGGLE MOBILE ====
    const sidebarBtn = document.getElementById("sidebarButton");
    const sidebar = document.getElementById("sidebarMenu");
    if (sidebarBtn && sidebar) {
      sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("hidden");
      });
    }

    // ==== TABS & FILTER LOGIC ====
    let activeTab = "all"; // all, lulus, tidak
    const tabAll = document.getElementById("tabAll");
    const tabLulus = document.getElementById("tabLusus") || document.getElementById("tabLulus");
    const tabTidak = document.getElementById("tabTidak");
    const rows = Array.from(document.querySelectorAll("#tablePKB tbody tr"));

    const filterStart = document.getElementById("filterStart");
    const filterEnd = document.getElementById("filterEnd");
    const btnClearFilter = document.getElementById("btnClearFilter");

    function setActiveTab(tab) {
      activeTab = tab;

      // styling tab
      const baseTabClasses = "px-3 py-1.5 rounded-2xl font-medium border-transparent";
      [tabAll, tabLulus, tabTidak].forEach(btn => {
        if (!btn) return;
        btn.className = baseTabClasses;
      });

      if (tab === "all") {
        tabAll.className = baseTabClasses + " bg-white shadow-sm text-slate-900 dark:bg-slate-900 dark:text-slate-100";
      } else if (tab === "lulus") {
        tabLulus.className = baseTabClasses + " bg-white shadow-sm text-slate-900 dark:bg-slate-900 dark:text-slate-100";
      } else if (tab === "tidak") {
        tabTidak.className = baseTabClasses + " bg-white shadow-sm text-slate-900 dark:bg-slate-900 dark:text-slate-100";
      }

      applyFilters();
    }

    function parseDateStr(str) {
      // expecting yyyy-mm-dd
      const parts = str.split("-");
      if (parts.length !== 3) return null;
      return new Date(parts[0], parts[1] - 1, parts[2]);
    }

    function applyFilters() {
      const startVal = filterStart.value;
      const endVal = filterEnd.value;
      const startDate = startVal ? parseDateStr(startVal) : null;
      const endDate = endVal ? parseDateStr(endVal) : null;

      rows.forEach(row => {
        const status = row.dataset.status; // lulus / tidak
        const dateStr = row.dataset.date; // yyyy-mm-dd
        const rowDate = dateStr ? parseDateStr(dateStr) : null;

        let visible = true;

        // filter tab
        if (activeTab === "lulus" && status !== "lulus") visible = false;
        if (activeTab === "tidak" && status !== "tidak") visible = false;

        // filter tanggal
        if (visible && startDate && rowDate && rowDate < startDate) visible = false;
        if (visible && endDate && rowDate && rowDate > endDate) visible = false;

        row.style.display = visible ? "" : "none";
      });
    }

    tabAll?.addEventListener("click", () => setActiveTab("all"));
    tabLulus?.addEventListener("click", () => setActiveTab("lulus"));
    tabTidak?.addEventListener("click", () => setActiveTab("tidak"));

    filterStart?.addEventListener("change", applyFilters);
    filterEnd?.addEventListener("change", applyFilters);
    btnClearFilter?.addEventListener("click", () => {
      filterStart.value = "";
      filterEnd.value = "";
      applyFilters();
    });

 //   setActiveTab("all"); // initial

   // ==== ADD BUTTON & MODAL PILIHAN ====
const btnAdd = document.getElementById("btnAdd");

const choiceOverlay = document.getElementById("choiceOverlay");
const choiceClose = document.getElementById("choiceClose");
const choiceCancel = document.getElementById("choiceCancel");
const choiceLulus = document.getElementById("choiceLulus");
const choiceTidak = document.getElementById("choiceTidak");

// sudah ada dari sebelumnya:
const modalOverlay = document.getElementById("modalOverlay");
const modalClose = document.getElementById("modalClose");
const modalCancel = document.getElementById("modalCancel");
const modalTitle = document.getElementById("modalTitle");
const hasilUjiField = document.getElementById("hasilUjiField");
const hasilUjiLabel = document.getElementById("hasilUjiLabel");
const pkbForm = document.getElementById("pkbForm");

btnAdd?.addEventListener("click", () => {
  modalOverlay.classList.remove("hidden");
});
// fungsi buka modal form (ini boleh tetap seperti sebelumnya)
function openModal(status) {
  const isLulus = status === "LULUS";
  modalTitle.textContent = isLulus
    ? "Tambah Data PKB - Lulus UJI"
    : "Tambah Data PKB - Tidak Lulus UJI";

  hasilUjiField.value = isLulus ? "LULUS" : "TIDAK LULUS";
  hasilUjiLabel.textContent = isLulus ? "Lulus UJI" : "Tidak Lulus UJI";
  hasilUjiLabel.className = isLulus
    ? "font-semibold text-emerald-600 dark:text-emerald-300"
    : "font-semibold text-rose-600 dark:text-rose-300";

  modalOverlay.classList.remove("hidden");
}

// pilihan di modal pertama
choiceLulus?.addEventListener("click", () => {
  choiceOverlay.classList.add("hidden");
  openModal("LULUS");
});

choiceTidak?.addEventListener("click", () => {
  choiceOverlay.classList.add("hidden");
  openModal("TIDAK");
});

function closeChoice() {
  choiceOverlay.classList.add("hidden");
}

choiceClose?.addEventListener("click", closeChoice);
choiceCancel?.addEventListener("click", closeChoice);
choiceOverlay?.addEventListener("click", (e) => {
  if (e.target === choiceOverlay) closeChoice();
});

// modal form: close tetap seperti sebelumnya
function closeModal() {
  modalOverlay.classList.add("hidden");
}

modalClose?.addEventListener("click", closeModal);
modalCancel?.addEventListener("click", closeModal);
modalOverlay?.addEventListener("click", (e) => {
  if (e.target === modalOverlay) closeModal();
});

document.getElementById("tgl_uji_kir").addEventListener("change", function(){
  let tgl = new Date(this.value);

  if(!isNaN(tgl)){
    tgl.setMonth(tgl.getMonth() + 6);

    let yyyy = tgl.getFullYear();
    let mm = String(tgl.getMonth() + 1).padStart(2, '0');
    let dd = String(tgl.getDate()).padStart(2, '0');

    document.getElementById("tgl_uji_selanjutnya").value = `${yyyy}-${mm}-${dd}`;
  }
});

function loadData(){
  $.get("<?= base_url('Sistem_controller/getData') ?>", function(data){
    let rows = JSON.parse(data);
    let html = "";

    rows.forEach(r => {
      html += `
        <tr>
          <td>${r.no_uji_kir}</td>
          <td>${r.nama_pemilik}</td>
          <td>${r.no_kendaraan}</td>
          <td>${r.merek}</td>
          <td>${r.jenis_kendaraan}</td>
          <td>${r.tgl_uji_kir}</td>
          <td>${r.tgl_uji_selanjutnya}</td>
          <td>
            <button onclick="editData(${r.id})">Edit</button>
            <button onclick="deleteData(${r.id})">Hapus</button>
          </td>
        </tr>
      `;
       
    });

    $("#tableBody").html(html);
    loadData();
  });
}




$("#pkbForm").submit(function(e){
  e.preventDefault();

  $.ajax({
    url: "<?= base_url('Sistem_controller/store') ?>",
    type: "POST",
    data: $(this).serialize(),
    success: function(res){
      let response = JSON.parse(res);

      if(response.status){
        alert("Data berhasil disimpan");
        loadData();
        $("#modalOverlay").addClass("hidden");
        $("#pkbForm")[0].reset();
      }
    }
  });
});

function editData(id){
  $.get("<?= base_url('Sistem_controller/edit/') ?>" + id, function(data){
    let r = JSON.parse(data);

    $("select[name=kategori_kendaraan]").val(r.kategori_kendaraan);
    $("input[name=nama_pemilik]").val(r.nama_pemilik);
    $("input[name=no_hp]").val(r.no_hp);
    $("input[name=no_kendaraan]").val(r.no_kendaraan);
    $("input[name=no_uji_kir]").val(r.no_uji_kir);
    $("input[name=no_mesin]").val(r.no_mesin);
    $("input[name=no_rangka]").val(r.no_rangka);
    $("input[name=merek]").val(r.merek);
    $("input[name=kapasitas]").val(r.kapasitas);
    $("input[name=jenis_kendaraan]").val(r.jenis_kendaraan);
    $("input[name=tgl_uji_kir]").val(r.tgl_uji_kir);
    $("input[name=tgl_uji_selanjutnya]").val(r.tgl_uji_selanjutnya);

    modalOverlay.classList.remove("hidden");

    $("#pkbForm").off("submit").on("submit", function(e){
      e.preventDefault();

      $.post("<?= base_url('Sistem_controller/update/') ?>" + id,
        $(this).serialize(),
        function(){
          alert("Data berhasil diupdate");
          loadData();
          modalOverlay.classList.add("hidden");
        }
      );
    });
  });
}

function deleteData(id){
  if(confirm("Yakin hapus data?")){
    $.get("<?= base_url('Sistem_controller/delete/') ?>" + id, function(){
      loadData();
    });
  }
}

    // ==== EXPORT BUTTON ====
    const btnExport = document.getElementById("btnExport");
    btnExport?.addEventListener("click", () => {
      let label = "Semua";
      if (activeTab === "lulus") label = "Lulus UJI";
      if (activeTab === "tidak") label = "Tidak Lulus UJI";

      // Nanti di-backend: pakai nilai activeTab utk filter query sebelum export Excel
      alert("Export data berdasarkan tab: " + label);
    });
  </script>

  <script>
  const dataKendaraan = {
    pribadi: [
      "Mobil Penumpang",
      "Pick Up"
    ],
    perusahaan: [
      "Truk",
      "Bus",
      "Pick Up"
    ]
  };

  const kategori = document.getElementById("kategori_kendaraan");
  const jenis = document.getElementById("jenis_kendaraan");

  kategori.addEventListener("change", function () {
    const selected = this.value;

    // reset isi
    jenis.innerHTML = '<option value="">Pilih jenis...</option>';

    if (dataKendaraan[selected]) {
      dataKendaraan[selected].forEach(item => {
        const option = document.createElement("option");
        option.value = item;
        option.textContent = item;
        jenis.appendChild(option);
      });
    }
  });

   loadData();
</script>
</body>
</html>
