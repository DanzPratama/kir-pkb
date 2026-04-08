<head>
  <meta charset="UTF-8" />
  <title>Data Arsip PKB - Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind Config (aktifkan dark mode via class) -->
  <script>
    tailwind.config = {
      darkMode: 'class'
    }
  </script>

  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "SF Pro Text", "Segoe UI", sans-serif;
    }
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="min-h-screen bg-slate-100 text-slate-900 transition-colors duration-300 dark:bg-slate-950 dark:text-slate-100">
  <!-- Background -->
  <div class="fixed inset-0 -z-10 pointer-events-none">
    <div class="absolute inset-0 bg-gradient-to-br from-slate-100 via-slate-200 to-slate-100 dark:from-slate-900 dark:via-slate-950 dark:to-slate-900"></div>
    <div class="absolute -top-32 -left-20 h-80 w-80 bg-indigo-300/40 rounded-full blur-3xl dark:bg-indigo-500/30"></div>
    <div class="absolute -bottom-40 right-0 h-96 w-96 bg-cyan-300/40 rounded-full blur-3xl dark:bg-cyan-400/25"></div>
  </div>

  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <aside id="sidebarMenu" class="hidden md:flex md:flex-col w-64 border-r border-slate-200/80 bg-white/70 backdrop-blur-2xl shadow-xl shadow-slate-900/10 dark:border-white/10 dark:bg-white/5 dark:shadow-[0_18px_60px_rgba(0,0,0,0.65)]">
      <div class="px-5 pt-5 pb-3 border-b border-slate-200/80 dark:border-white/10">
        <div class="inline-flex items-center gap-3">
          <div class="h-10 w-10 rounded-2xl bg-slate-900/5 border border-slate-300/80 flex items-center justify-center dark:bg-slate-900/70 dark:border-white/10">
            <span class="text-sm font-semibold tracking-tight">PK</span>
          </div>
          <div>
            <p class="text-sm font-semibold leading-tight">Arsip PKB</p>
            <p class="text-[11px] text-slate-500/90 dark:text-slate-300/80">Sistem Arsip Ringan</p>
          </div>
        </div>
      </div>

      <nav class="flex-1 px-3 pt-4 space-y-1 text-sm">
        <a href="/kir-pkb/Sistem_controller"
           class="flex items-center gap-2 rounded-xl px-3 py-2 text-slate-700 hover:bg-slate-900/5 hover:border-slate-300/80 border border-transparent transition dark:text-slate-200/85 dark:hover:bg-white/5 dark:hover:border-white/10">
          <span class="text-base">🏠</span>
          <span>Dashboard</span>
        </a>
        <a href="/kir-pkb/Sistem_controller/arsip"
           class="flex items-center gap-2 rounded-xl px-3 py-2 bg-slate-900/5 text-slate-900 border border-slate-300/80 dark:bg-white/10 dark:text-slate-50 dark:border-white/10">
          <span class="text-base">📂</span>
          <span>Data Arsip PKB</span>
        </a>
        <a href="pengaturan.html"
           class="flex items-center gap-2 rounded-xl px-3 py-2 text-slate-700 hover:bg-slate-900/5 hover:border-slate-300/80 border border-transparent transition dark:text-slate-200/85 dark:hover:bg-white/5 dark:hover:border-white/10">
          <span class="text-base">⚙️</span>
          <span>Pengaturan</span>
        </a>
          <!-- LOGOUT BUTTON -->
  <a href="index.html"
     class="flex items-center gap-2 mt-4 rounded-xl px-3 py-2 text-slate-700 border border-slate-300/70 bg-red-500/10 hover:bg-red-500/20 text-red-600 transition dark:text-red-300 dark:border-red-500/40 dark:bg-red-500/10 dark:hover:bg-red-500/20">
    <span class="text-base">🚪</span>
    <span>Logout</span>
  </a>
      </nav>

      <div class="px-4 pb-4 pt-3 border-t border-slate-200/80 text-[11px] text-slate-500 dark:border-white/10 dark:text-slate-400">
        <p>Versi awal · Arsip PKB</p>
        <p class="mt-0.5">© 2025</p>
      </div>
    </aside>

    <!-- Main area -->
    <div class="flex-1 flex flex-col">
      <!-- Topbar -->
      <header class="h-16 flex items-center justify-between px-4 md:px-8 border-b border-slate-200/80 bg-white/60 backdrop-blur-2xl dark:border-white/10 dark:bg-black/20">
        <div class="flex items-center gap-3 md:hidden">
          <button id="sidebarButton" class="h-9 w-9 rounded-2xl border border-slate-300 bg-white/80 flex items-center justify-center text-slate-800 dark:border-white/20 dark:bg-white/10 dark:text-slate-100">
            ☰
          </button>
          <div>
            <p class="text-sm font-semibold">Arsip PKB</p>
            <p class="text-[11px] text-slate-500/90 dark:text-slate-300/80">Data Arsip</p>
          </div>
        </div>

        <div class="hidden md:block">
          <h1 class="text-lg font-semibold tracking-tight text-slate-900 dark:text-slate-50">
            Data Arsip PKB
          </h1>
          <p class="text-xs text-slate-500 mt-0.5 dark:text-slate-300">
            Kelola dan filter data kendaraan berdasarkan hasil UJI PKB.
          </p>
        </div>

        <div class="flex items-center gap-3">
          <!-- Theme toggle -->
          <button id="themeToggle"
                  class="h-9 w-9 rounded-2xl border border-slate-300 bg-white/80 flex items-center justify-center text-slate-700 text-sm shadow-sm hover:bg-slate-100 transition dark:border-white/20 dark:bg-white/10 dark:text-slate-100 dark:hover:bg-white/15"
                  data-tip="Toggle tema">
            <span id="iconSun">☀️</span>
            <span id="iconMoon" class="hidden">🌙</span>
          </button>

          <div class="flex items-center gap-2">
            <div class="text-right hidden sm:block">
              <p class="text-xs font-medium text-slate-800 dark:text-slate-100">Admin Arsip</p>
              <p class="text-[11px] text-slate-500 dark:text-slate-400">admin@arsip-pkb.local</p>
            </div>
            <div class="h-9 w-9 rounded-2xl bg-gradient-to-tr from-indigo-400 via-sky-400 to-cyan-300 text-slate-900 flex items-center justify-center text-xs font-semibold shadow-lg shadow-sky-900/40">
              A
            </div>
          </div>
        </div>
      </header>
<script>
  const currentUrl = window.location.href;

  document.querySelectorAll('#sidebarMenu a').forEach(link => {
    if (currentUrl.includes(link.getAttribute('href'))) {
      
      // hapus active semua dulu
      document.querySelectorAll('#sidebarMenu a').forEach(l => {
        l.classList.remove(
          'bg-slate-900/5',
          'text-slate-900',
          'border-slate-300/80',
          'dark:bg-white/10',
          'dark:text-slate-50',
          'dark:border-white/10'
        );
      });

      // tambah active ke yang cocok
      link.classList.add(
        'bg-slate-900/5',
        'text-slate-900',
        'border-slate-300/80',
        'dark:bg-white/10',
        'dark:text-slate-50',
        'dark:border-white/10'
      );
    }
  });
</script>