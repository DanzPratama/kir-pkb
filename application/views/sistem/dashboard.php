
      <!-- Content -->
      <main class="flex-1 px-4 md:px-8 py-6 space-y-6">
        <!-- Top actions -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3">
          <div class="md:hidden">
            <h1 class="text-base font-semibold text-slate-900 dark:text-slate-50">Dashboard Arsip PKB</h1>
            <p class="text-xs text-slate-500 mt-0.5 dark:text-slate-300">
              Ringkasan hasil UJI & arsip terakhir.
            </p>
          </div>

          <div class="flex flex-wrap items-center gap-2 text-xs">
            <button
              class="inline-flex items-center gap-1.5 rounded-2xl border border-slate-300 bg-white/80 px-3 py-1.5 text-slate-800 hover:bg-slate-100 transition dark:border-white/15 dark:bg-white/10 dark:text-slate-100 dark:hover:bg-white/15">
              <span>📅</span>
              <span>Periode: 2025</span>
            </button>
            <button
              class="inline-flex items-center gap-1.5 rounded-2xl border border-slate-200 bg-white/70 px-3 py-1.5 text-slate-700 hover:bg-slate-100 transition dark:border-white/10 dark:bg-white/5 dark:text-slate-200 dark:hover:bg-white/10">
              <span>🔍</span>
              <span>Filter cepat</span>
            </button>
          </div>

          <div class="flex flex-wrap items-center gap-2 text-xs">
            <!-- Tombol aksi bisa diaktifkan lagi nanti -->
            <!--
            <button
              id="btnAdd"
              class="inline-flex items-center gap-1.5 rounded-2xl bg-gradient-to-r from-indigo-400 via-sky-400 to-cyan-300 px-4 py-1.5 font-semibold text-slate-900 shadow-lg shadow-sky-900/50 hover:brightness-105 active:scale-[0.98] transition">
              <span>＋</span>
              <span>Tambah Data PKB</span>
            </button>
            <button
              id="btnExport"
              class="inline-flex items-center gap-1.5 rounded-2xl border border-emerald-400/60 bg-emerald-400/10 px-4 py-1.5 font-semibold text-emerald-700 hover:bg-emerald-400/20 active:scale-[0.98] transition dark:text-emerald-100">
              <span>📊</span>
              <span>Export Excel</span>
            </button>
            -->
          </div>
        </div>

    <!-- Stats cards by periode -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-4">
  <!-- HARI INI -->
  <div class="relative rounded-3xl border border-slate-200/80 bg-white/70 backdrop-blur-2xl px-4 py-4 shadow-lg shadow-slate-900/5 dark:border-white/15 dark:bg-white/5 dark:shadow-[0_18px_40px_rgba(0,0,0,0.7)]">
    <div class="absolute right-4 top-3 text-[22px] opacity-70">📅</div>
    <p class="text-[11px] text-slate-500 uppercase tracking-[0.18em] dark:text-slate-300">
      Hari Ini
    </p>
    <p class="mt-2 text-2xl font-semibold text-slate-900 dark:text-slate-50">
      8<span class="ml-1 text-xs font-normal text-slate-500 dark:text-slate-300">data</span>
    </p>
    <p class="mt-1 text-[11px] text-slate-500 dark:text-slate-300">
      Rekap hasil UJI PKB yang diinput hari ini.
    </p>

    <div class="mt-3 grid grid-cols-3 gap-2 text-[11px]">
      <div class="rounded-2xl bg-slate-100 px-2 py-1 text-slate-700 dark:bg-slate-900/70 dark:text-slate-200">
        <p class="text-[10px] uppercase tracking-wide">Total</p>
        <p class="font-semibold text-sm">8</p>
      </div>
      <div class="rounded-2xl bg-emerald-50 px-2 py-1 text-emerald-700 dark:bg-emerald-400/15 dark:text-emerald-300">
        <p class="text-[10px] uppercase tracking-wide">Lulus</p>
        <p class="font-semibold text-sm">6</p>
      </div>
      <div class="rounded-2xl bg-rose-50 px-2 py-1 text-rose-700 dark:bg-rose-400/15 dark:text-rose-200">
        <p class="text-[10px] uppercase tracking-wide">Tidak</p>
        <p class="font-semibold text-sm">2</p>
      </div>
    </div>
  </div>

  <!-- BULAN INI -->
  <div class="relative rounded-3xl border border-slate-200/80 bg-white/70 backdrop-blur-2xl px-4 py-4 shadow-lg shadow-slate-900/5 dark:border-white/15 dark:bg-white/5 dark:shadow-[0_18px_40px_rgba(0,0,0,0.7)]">
    <div class="absolute right-4 top-3 text-[22px] opacity-70">📆</div>
    <p class="text-[11px] text-slate-500 uppercase tracking-[0.18em] dark:text-slate-300">
      Bulan Ini
    </p>
    <p class="mt-2 text-2xl font-semibold text-slate-900 dark:text-slate-50">
      42<span class="ml-1 text-xs font-normal text-slate-500 dark:text-slate-300">data</span>
    </p>
    <p class="mt-1 text-[11px] text-slate-500 dark:text-slate-300">
      Semua hasil UJI PKB yang tercatat di bulan berjalan.
    </p>

    <div class="mt-3 grid grid-cols-3 gap-2 text-[11px]">
      <div class="rounded-2xl bg-slate-100 px-2 py-1 text-slate-700 dark:bg-slate-900/70 dark:text-slate-200">
        <p class="text-[10px] uppercase tracking-wide">Total</p>
        <p class="font-semibold text-sm">42</p>
      </div>
      <div class="rounded-2xl bg-emerald-50 px-2 py-1 text-emerald-700 dark:bg-emerald-400/15 dark:text-emerald-300">
        <p class="text-[10px] uppercase tracking-wide">Lulus</p>
        <p class="font-semibold text-sm">35</p>
      </div>
      <div class="rounded-2xl bg-rose-50 px-2 py-1 text-rose-700 dark:bg-rose-400/15 dark:text-rose-200">
        <p class="text-[10px] uppercase tracking-wide">Tidak</p>
        <p class="font-semibold text-sm">7</p>
      </div>
    </div>
  </div>

  <!-- TOTAL SEMUA -->
  <div class="relative rounded-3xl border border-slate-200/80 bg-white/70 backdrop-blur-2xl px-4 py-4 shadow-lg shadow-slate-900/5 dark:border-white/15 dark:bg-white/5 dark:shadow-[0_18px_40px_rgba(0,0,0,0.7)]">
    <div class="absolute right-4 top-3 text-[22px] opacity-70">📂</div>
    <p class="text-[11px] text-slate-500 uppercase tracking-[0.18em] dark:text-slate-300">
      Total Data
    </p>
    <p class="mt-2 text-2xl font-semibold text-slate-900 dark:text-slate-50">
      128<span class="ml-1 text-xs font-normal text-slate-500 dark:text-slate-300">data</span>
    </p>
    <p class="mt-1 text-[11px] text-slate-500 dark:text-slate-300">
      Akumulasi arsip hasil UJI PKB Tahun ini.
    </p>

    <div class="mt-3 grid grid-cols-3 gap-2 text-[11px]">
      <div class="rounded-2xl bg-slate-100 px-2 py-1 text-slate-700 dark:bg-slate-900/70 dark:text-slate-200">
        <p class="text-[10px] uppercase tracking-wide">Total</p>
        <p class="font-semibold text-sm">128</p>
      </div>
      <div class="rounded-2xl bg-emerald-50 px-2 py-1 text-emerald-700 dark:bg-emerald-400/15 dark:text-emerald-300">
        <p class="text-[10px] uppercase tracking-wide">Lulus</p>
        <p class="font-semibold text-sm">102</p>
      </div>
      <div class="rounded-2xl bg-rose-50 px-2 py-1 text-rose-700 dark:bg-rose-400/15 dark:text-rose-200">
        <p class="text-[10px] uppercase tracking-wide">Tidak</p>
        <p class="font-semibold text-sm">26</p>
      </div>
    </div>
  </div>
</section>


        <!-- Table + info -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-4">
          <!-- Table -->
          <div class="lg:col-span-2 rounded-3xl border border-slate-200/80 bg-white/80 backdrop-blur-2xl shadow-lg shadow-slate-900/10 overflow-hidden dark:border-white/15 dark:bg-white/5 dark:shadow-[0_18px_40px_rgba(0,0,0,0.75)]">
            <div class="px-4 md:px-5 py-3 border-b border-slate-200/80 flex items-center justify-between gap-2 dark:border-white/10">
              <div>
                <p class="text-sm font-medium text-slate-900 dark:text-slate-50">Data PKB Terbaru</p>
                <p class="text-[11px] text-slate-500 mt-0.5 dark:text-slate-300">Beberapa hasil UJI PKB terakhir.</p>
              </div>
              <button id="btnRefresh"
                      class="hidden sm:inline-flex items-center gap-1.5 rounded-2xl border border-slate-200 bg-white/70 px-3 py-1.5 text-[11px] text-slate-700 hover:bg-slate-100 transition dark:border-white/10 dark:bg-white/5 dark:text-slate-200 dark:hover:bg-white/10">
                <span>↻</span>
                <span>Refresh</span>
              </button>
            </div>

            <div class="overflow-x-auto">
              <table id="tablePKB" class="min-w-full text-xs md:text-sm transition-opacity duration-300">
                <thead class="bg-slate-100/90 border-b border-slate-200 text-slate-700 dark:bg-white/5 dark:border-white/10 dark:text-slate-200">
                  <tr>
                    <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">No. PKB</th>
                    <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">Nama Pemilik</th>
                    <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">No. Polisi</th>
                    <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">Tanggal UJI</th>
                    <th class="px-3 md:px-4 py-2 text-left font-medium whitespace-nowrap">Hasil UJI</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 dark:divide-white/5">
                  <tr class="hover:bg-slate-50 dark:hover:bg-white/5/50">
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">PKB-2025-0012</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">Dedi Hadiat</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">Z 1234 AA</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">12-01-2025</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">
                      <span class="inline-flex items-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-[11px] text-emerald-700 border border-emerald-200 dark:bg-emerald-400/15 dark:text-emerald-300 dark:border-emerald-400/40">
                        Lulus UJI
                      </span>
                    </td>
                  </tr>
                  <tr class="hover:bg-slate-50 dark:hover:bg-white/5/50">
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">PKB-2025-0013</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">Muksin</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">Z 5678 BB</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">05-02-2025</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">
                      <span class="inline-flex items-center rounded-full bg-rose-100 px-2.5 py-0.5 text-[11px] text-rose-700 border border-rose-200 dark:bg-rose-400/15 dark:text-rose-200 dark:border-rose-400/40">
                        Tidak Lulus UJI
                      </span>
                    </td>
                  </tr>
                  <tr class="hover:bg-slate-50 dark:hover:bg-white/5/50">
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">PKB-2025-0014</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">Asep Nurdin</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">Z 9090 CC</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">20-12-2024</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">
                      <span class="inline-flex items-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-[11px] text-emerald-700 border border-emerald-200 dark:bg-emerald-400/15 dark:text-emerald-300 dark:border-emerald-400/40">
                        Lulus UJI
                      </span>
                    </td>
                  </tr>
                  <tr class="hover:bg-slate-50 dark:hover:bg-white/5/50">
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">PKB-2025-0015</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">Yani S.</td>
                    <td class="px-3 md:px-4 py-2 whitespace-nowrap">Z 1122 DD</td>
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

            <div class="px-4 md:px-5 py-2.5 border-t border-slate-200 flex items-center justify-between text-[11px] text-slate-500 dark:border-white/10 dark:text-slate-300">
              <span>Menampilkan 4 data contoh.</span>
              <button class="inline-flex items-center gap-1 hover:text-slate-800 transition dark:hover:text-slate-100">
                <span>Lihat semua arsip</span>
                <span>⟶</span>
              </button>
            </div>
          </div>

          <!-- Side info panel -->
          <div class="space-y-4">
            <div class="rounded-3xl border border-slate-200/80 bg-white/80 backdrop-blur-2xl shadow-lg shadow-slate-900/10 px-4 py-4 dark:border-white/15 dark:bg-white/5 dark:shadow-[0_18px_40px_rgba(0,0,0,0.7)]">
              <p class="text-sm font-medium text-slate-900 dark:text-slate-50">Catatan Sistem</p>
              <p class="mt-1 text-[11px] text-slate-500 dark:text-slate-300">
                Data PKB diarsipkan hanya dengan dua status utama:
              </p>
              <ul class="mt-3 space-y-1.5 text-[11px] text-slate-600 dark:text-slate-200">
                <li>• <span class="font-semibold text-emerald-600 dark:text-emerald-300">Lulus UJI</span> — kendaraan dinyatakan layak.</li>
                <li>• <span class="font-semibold text-rose-600 dark:text-rose-300">Tidak Lulus UJI</span> — perlu perbaikan / uji ulang.</li>
              </ul>
              <p class="mt-3 text-[11px] text-slate-500 dark:text-slate-300">
                Dashboard ini hanya tampilan awal, nanti angka akan diambil dari database secara dinamis.
              </p>
            </div>

            <div class="rounded-3xl border border-slate-200/80 bg-gradient-to-br from-sky-200/60 via-indigo-200/60 to-cyan-200/60 backdrop-blur-2xl shadow-lg shadow-slate-900/10 px-4 py-4 dark:border-white/15 dark:from-sky-500/10 dark:via-indigo-500/10 dark:to-cyan-500/10 dark:shadow-[0_18px_40px_rgba(0,0,0,0.7)]">
              <p class="text-sm font-medium text-slate-900 dark:text-slate-50">Rencana Fitur Berikutnya</p>
              <ul class="mt-2 space-y-1.5 text-[11px] text-slate-600 dark:text-slate-200">
                <li>• Form input data PKB (No PKB, No Polisi, Nama, Hasil UJI).</li>
                <li>• Filter Lulus / Tidak Lulus.</li>
                <li>• Export tabel ke Excel (berdasarkan filter).</li>
              </ul>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>

  <script>
    // Fade-in animation saat halaman dibuka
    document.addEventListener("DOMContentLoaded", () => {
      document.body.classList.add("opacity-100");
    });

    // Sidebar Toggle (mobile)
    const sidebarBtn = document.getElementById("sidebarButton");
    const sidebar = document.getElementById("sidebarMenu");

    if (sidebarBtn && sidebar) {
      sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("hidden");
      });
    }

    // Button ripple effect
    document.querySelectorAll("button").forEach((btn) => {
      btn.addEventListener("click", function (e) {
        let ripple = document.createElement("span");
        ripple.classList.add("ripple");
        this.appendChild(ripple);

        let rect = this.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;
        ripple.style.left = x + "px";
        ripple.style.top = y + "px";

        setTimeout(() => ripple.remove(), 500);
      });
    });

    // Fake loading (kalau nanti btnAdd / btnExport diaktifkan)
    function fakeLoading(btn) {
      let old = btn.innerHTML;
      btn.innerHTML = "Loading...";
      btn.disabled = true;
      btn.classList.add("opacity-60");

      setTimeout(() => {
        btn.innerHTML = old;
        btn.disabled = false;
        btn.classList.remove("opacity-60");
      }, 800);
    }

    document.getElementById("btnExport")?.addEventListener("click", function () {
      fakeLoading(this);
    });

    document.getElementById("btnAdd")?.addEventListener("click", function () {
      fakeLoading(this);
    });

    // Refresh tabel data
    document.getElementById("btnRefresh")?.addEventListener("click", () => {
      const table = document.getElementById("tablePKB");
      if (!table) return;
      table.style.opacity = "0.3";
      setTimeout(() => {
        table.style.opacity = "1";
      }, 400);
    });

    // Tooltip mini
    document.querySelectorAll("[data-tip]").forEach((el) => {
      el.addEventListener("mouseenter", function () {
        let tip = document.createElement("div");
        tip.className =
          "fixed bg-black/70 text-white text-[10px] px-2 py-1 rounded-lg pointer-events-none z-50";
        tip.id = "tooltip";
        tip.innerHTML = this.dataset.tip;
        document.body.appendChild(tip);
      });

      el.addEventListener("mousemove", function (e) {
        const tip = document.getElementById("tooltip");
        if (tip) {
          tip.style.left = e.pageX + 10 + "px";
          tip.style.top = e.pageY + 10 + "px";
        }
      });

      el.addEventListener("mouseleave", () => {
        document.getElementById("tooltip")?.remove();
      });
    });

    // THEME TOGGLE (light default, simpan ke localStorage)
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

    // Initial theme: cek localStorage (default: light)
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
  </script>

  <style>
    /* Fade-in */
    body {
      opacity: 0;
      transition: opacity 0.6s ease;
    }

    /* Biar ripple stay di dalam button */
    button {
      position: relative;
      overflow: hidden;
    }

    /* Ripple */
    .ripple {
      position: absolute;
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.35);
      border-radius: 50%;
      transform: translate(-50%, -50%) scale(0);
      animation: rippleAnim 0.5s linear;
      pointer-events: none;
    }

    @keyframes rippleAnim {
      to {
        transform: translate(-50%, -50%) scale(4);
        opacity: 0;
      }
    }
  </style>

</body>
</html>
