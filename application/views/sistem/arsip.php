
      <!-- Content -->
      <main class="flex-1 px-4 md:px-8 py-6 space-y-5">
        <!-- Tabs + filters + actions -->
        <div class="flex flex-col gap-4">
          <!-- Tabs -->
          <div class="flex flex-wrap items-center justify-between gap-3">
            <div class="inline-flex rounded-2xl bg-slate-200/70 p-1 text-xs text-slate-600 shadow-sm dark:bg-white/10 dark:text-slate-200">
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
            </div>

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
                Daftar kendaraan berdasarkan hasil UJI PKB.
              </p>
            </div>
          </div>

          <div class="overflow-x-auto">
            <table id="tablePKB" class="min-w-full text-xs md:text-sm transition-opacity duration-300">
              <thead class="bg-slate-100/90 border-b border-slate-200 text-slate-700 dark:bg-white/5 dark:border-white/10 dark:text-slate-200">
                <tr>
                  <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">No. PKB</th>
                  <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">Nama Pemilik</th>
                  <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">No. Polisi</th>
                  <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">Jenis Kendaraan</th>
                  <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">Tanggal UJI</th>
                  <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">Hasil UJI</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-100 dark:divide-white/5">
                <!-- data-status: lulus / tidak, data-date: yyyy-mm-dd -->
                <tr class="hover:bg-slate-50 dark:hover:bg-white/5/50"
                    data-status="lulus"
                    data-date="2025-01-12">
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">PKB-2025-0012</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Dedi Hadiat</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Z 1234 AA</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Truk</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">12-01-2025</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">
                    <span class="inline-flex items-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-[11px] text-emerald-700 border border-emerald-200 dark:bg-emerald-400/15 dark:text-emerald-300 dark:border-emerald-400/40">
                      Lulus UJI
                    </span>
                  </td>
                </tr>

                <tr class="hover:bg-slate-50 dark:hover:bg-white/5/50"
                    data-status="tidak"
                    data-date="2025-02-05">
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">PKB-2025-0013</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Muksin</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Z 5678 BB</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Pick Up</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">05-02-2025</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">
                    <span class="inline-flex items-center rounded-full bg-rose-100 px-2.5 py-0.5 text-[11px] text-rose-700 border border-rose-200 dark:bg-rose-400/15 dark:text-rose-200 dark:border-rose-400/40">
                      Tidak Lulus UJI
                    </span>
                  </td>
                </tr>

                <tr class="hover:bg-slate-50 dark:hover:bg-white/5/50"
                    data-status="lulus"
                    data-date="2024-12-20">
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">PKB-2025-0014</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Asep Nurdin</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Z 9090 CC</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Bus</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">20-12-2024</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">
                    <span class="inline-flex items-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-[11px] text-emerald-700 border border-emerald-200 dark:bg-emerald-400/15 dark:text-emerald-300 dark:border-emerald-400/40">
                      Lulus UJI
                    </span>
                  </td>
                </tr>

                <tr class="hover:bg-slate-50 dark:hover:bg-white/5/50"
                    data-status="tidak"
                    data-date="2025-03-01">
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">PKB-2025-0015</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Yani S.</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Z 1122 DD</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">Truk</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">01-03-2025</td>
                  <td class="px-3 md:px-4 py-2 whitespace-nowrap">
                    <span class="inline-flex items-center rounded-full bg-rose-100 px-2.5 py-0.5 text-[11px] text-rose-700 border border-rose-200 dark:bg-rose-400/15 dark:text-rose-200 dark:border-rose-400/40">
                      Tidak Lulus UJI
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </main>
    </div>
  </div>

  <!-- Modal PILIHAN: Lulus / Tidak -->
<div id="choiceOverlay"
     class="hidden fixed inset-0 z-40 flex items-center justify-center bg-black/40 backdrop-blur-sm">
  <div class="w-full max-w-xs mx-4 rounded-3xl border border-slate-200 bg-white/95 shadow-2xl shadow-slate-900/20 dark:border-white/15 dark:bg-slate-900">
    <div class="flex items-center justify-between px-4 pt-3 pb-2 border-b border-slate-200 dark:border-slate-700">
      <p class="text-sm font-semibold text-slate-900 dark:text-slate-50">
        Pilih Jenis Input
      </p>
      <button id="choiceClose"
              class="h-7 w-7 rounded-2xl border border-slate-200 bg-white text-[11px] text-slate-600 hover:bg-slate-100 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200 dark:hover:bg-slate-700">
        ✕
      </button>
    </div>

    <div class="px-4 pt-3 pb-4 space-y-2 text-xs">
      <p class="text-[11px] text-slate-600 dark:text-slate-300 mb-1">
        Data yang akan diinputkan untuk kendaraan:
      </p>
      <button id="choiceLulus"
              class="w-full rounded-2xl border border-emerald-300 bg-emerald-50 px-3 py-2 text-left text-[11px] text-emerald-700 hover:bg-emerald-100 dark:border-emerald-400/70 dark:bg-emerald-900/40 dark:text-emerald-100 dark:hover:bg-emerald-900/70">
        ✅ Input kendaraan <b>Lulus UJI</b>
      </button>
      <button id="choiceTidak"
              class="w-full rounded-2xl border border-rose-300 bg-rose-50 px-3 py-2 text-left text-[11px] text-rose-700 hover:bg-rose-100 dark:border-rose-400/70 dark:bg-rose-900/40 dark:text-rose-100 dark:hover:bg-rose-900/70">
        ⚠️ Input kendaraan <b>Tidak Lulus UJI</b>
      </button>
      <button id="choiceCancel"
              class="mt-1 w-full rounded-2xl border border-slate-300 bg-white px-3 py-1.5 text-[11px] text-slate-600 hover:bg-slate-100 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-200 dark:hover:bg-slate-700">
        Batal
      </button>
    </div>
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
        <!-- status hidden -->
        <input type="hidden" id="hasilUjiField" name="hasil_uji" value="LULUS" />

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
          <div>
            <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">No. PKB</label>
            <input type="text" name="no_pkb"
                   class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
          </div>
          <div>
            <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">No. Polisi</label>
            <input type="text" name="no_polisi"
                   class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
          <div>
            <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">Nama Pemilik</label>
            <input type="text" name="nama_pemilik"
                   class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
          </div>
          <div>
            <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">Jenis Kendaraan</label>
            <select name="jenis_kendaraan"
                    class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100">
              <option value="">Pilih jenis...</option>
              <option>Truk</option>
              <option>Pick Up</option>
              <option>Bus</option>
              <option>Mobil Penumpang</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
          <div>
            <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">Tanggal UJI</label>
            <input type="date" name="tanggal_uji"
                   class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
          </div>
          <div>
            <label class="block mb-1 text-[11px] text-slate-600 dark:text-slate-300">Catatan</label>
            <input type="text" name="catatan"
                   class="w-full rounded-2xl border border-slate-300 bg-white/90 px-3 py-1.5 text-xs text-slate-800 focus:outline-none focus:ring-1 focus:ring-indigo-400 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-100" />
          </div>
        </div>

        <div class="flex items-center justify-between pt-2">
          <p class="text-[11px] text-slate-500 dark:text-slate-300">
            Hasil UJI: <span id="hasilUjiLabel" class="font-semibold text-emerald-600 dark:text-emerald-300">Lulus UJI</span>
          </p>
          <div class="flex gap-2">
            <button type="button" id="modalCancel"
                    class="rounded-2xl border border-slate-300 bg-white/80 px-4 py-1.5 text-[11px] text-slate-700 hover:bg-slate-100 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-200 dark:hover:bg-slate-700">
              Batal
            </button>
            <button type="submit"
                    class="rounded-2xl bg-gradient-to-r from-indigo-400 via-sky-400 to-cyan-300 px-4 py-1.5 text-[11px] font-semibold text-slate-900 shadow-md shadow-sky-900/40 hover:brightness-105 active:scale-[0.98]">
              Simpan
            </button>
          </div>
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

    setActiveTab("all"); // initial

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
  choiceOverlay.classList.remove("hidden");
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


    pkbForm?.addEventListener("submit", (e) => {
      e.preventDefault();
      // Di sini nanti ganti dengan AJAX / submit ke backend
      alert("Data PKB tersimpan (dummy). Hasil UJI: " + hasilUjiField.value);
      closeModal();
      pkbForm.reset();
    });

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
</body>
</html>
