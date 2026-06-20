<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laundry 3 Semprul</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#38bdf8" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#0ea5e9" media="(prefers-color-scheme: dark)" />

    <link rel="stylesheet" href="{{ asset('bebas/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
/* ======================================================
   LAUNDRY ANDI — TEMA BERSIH & SEGAR
   Palet: Langit biru + putih busa + aksen toska
====================================================== */

:root {
  --sky:        #0ea5e9;
  --sky-dark:   #0284c7;
  --sky-light:  #e0f2fe;
  --foam:       #f0f9ff;
  --teal:       #14b8a6;
  --bubble:     #bae6fd;

  --sidebar-bg: #ffffff;
  --header-bg:  #ffffff;
  --body-bg:    #f0f9ff;
  --card-bg:    #ffffff;

  --text:       #0c4a6e;
  --text-muted: #64748b;
  --border:     #e0f2fe;

  --success:    #10b981;
  --danger:     #f43f5e;

  --radius:     20px;
  --shadow-card: 0 4px 24px rgba(14,165,233,.10);
}

/* ======================================================
   BODY — latar putih bersih kayak pakaian abis dicuci
====================================================== */

body {
  font-family: 'Nunito', sans-serif;
  background-color: #f0f9ff;
  background-image:
    radial-gradient(circle at 20% 10%, rgba(186,230,253,.55) 0%, transparent 40%),
    radial-gradient(circle at 80% 90%, rgba(20,184,166,.12) 0%, transparent 40%);
  background-attachment: fixed;
  color: var(--text);
  overflow-x: hidden;
}

/* gelembung sabun dekoratif */
body::before {
  content: '';
  position: fixed;
  width: 420px; height: 420px;
  background: radial-gradient(circle, rgba(186,230,253,.50) 0%, transparent 70%);
  top: -120px; left: -100px;
  border-radius: 50%;
  z-index: -1;
}

body::after {
  content: '';
  position: fixed;
  width: 320px; height: 320px;
  background: radial-gradient(circle, rgba(20,184,166,.18) 0%, transparent 70%);
  bottom: -80px; right: -80px;
  border-radius: 50%;
  z-index: -1;
}

/* ======================================================
   HEADER
====================================================== */

.app-header {
  background: #ffffff !important;
  border-bottom: 2px solid var(--bubble) !important;
  box-shadow: 0 2px 16px rgba(14,165,233,.12);
  animation: slideDown .5s ease;
}

.app-header .nav-link,
.app-header i {
  color: var(--sky-dark) !important;
}

.app-header h4 {
  font-weight: 800;
  font-size: 20px;
  color: var(--sky-dark) !important;
  letter-spacing: .3px;
}

.app-header h4 b {
  color: var(--sky) !important;
}

/* ikon toggle sidebar */
.app-header .bi-list {
  font-size: 22px;
  color: var(--sky) !important;
}

/* ======================================================
   SIDEBAR — bersih putih dengan aksen langit
====================================================== */

.app-sidebar {
  background: #ffffff !important;
  border-right: 2px solid var(--bubble) !important;
  box-shadow: 4px 0 24px rgba(14,165,233,.08);
}

.sidebar-brand {
  padding: 20px 18px;
  background: linear-gradient(135deg, var(--sky), var(--teal));
  border-bottom: none;
}

.brand-text {
  color: #ffffff !important;
  font-size: 22px;
  font-weight: 800 !important;
  letter-spacing: .5px;
}

/* ikon mesin cuci kecil di brand — teks emoji lewat CSS */
.brand-link::before {
  content: '🫧 ';
}

/* ======================================================
   MENU ITEM
====================================================== */

.app-sidebar .nav-link {
  color: var(--text-muted) !important;
  margin: 6px 12px;
  border-radius: 14px;
  padding: 12px 16px;
  border: 1.5px solid transparent;
  transition: .3s ease;
  font-weight: 600;
  font-size: 14px;
  position: relative;
  overflow: hidden;
}

/* kilap air */
.app-sidebar .nav-link::before {
  content: '';
  position: absolute;
  top: 0; left: -110%;
  width: 80%; height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,.6), transparent);
  transition: .5s;
}

.app-sidebar .nav-link:hover::before {
  left: 130%;
}

.app-sidebar .nav-link:hover {
  background: var(--sky-light) !important;
  border-color: var(--bubble);
  color: var(--sky-dark) !important;
  transform: translateX(4px);
}

.app-sidebar .nav-link.active {
  background: linear-gradient(135deg, var(--sky), var(--teal)) !important;
  color: #ffffff !important;
  border-color: transparent;
  box-shadow: 0 6px 20px rgba(14,165,233,.30);
  transform: translateX(3px);
}

.nav-icon {
  color: var(--sky) !important;
  font-size: 15px;
}

.app-sidebar .nav-link.active .nav-icon {
  color: #ffffff !important;
}

.nav-arrow {
  color: var(--bubble) !important;
  transition: .3s;
}

.app-sidebar .nav-link.active .nav-arrow {
  color: rgba(255,255,255,.8) !important;
}

.nav-link:hover .nav-arrow {
  transform: translateX(4px);
}

/* label treeview parent */
.app-sidebar .nav-link p {
  margin: 0;
  font-size: 13.5px;
  font-weight: 700;
  color: inherit;
}

/* ======================================================
   MAIN CONTENT
====================================================== */

.app-main {
  background: transparent !important;
}

/* ======================================================
   CARD — putih bersih, shadow lembut
====================================================== */

.card {
  background: #ffffff !important;
  border: 1.5px solid var(--bubble) !important;
  border-radius: var(--radius) !important;
  box-shadow: var(--shadow-card);
  overflow: hidden;
  transition: .35s ease;
  animation: fadeUp .6s ease;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 40px rgba(14,165,233,.18);
  border-color: var(--sky) !important;
}

.card-header {
  background: linear-gradient(135deg, var(--sky), var(--teal)) !important;
  border: none !important;
  padding: 16px 22px;
  font-weight: 800;
  color: #ffffff !important;
  font-size: 15px;
  letter-spacing: .3px;
}

.card-body {
  color: var(--text);
  background: #ffffff !important;
}

/* ======================================================
   TABLE — ringan, kontras terang
====================================================== */

.table,
.table-responsive,
table {
  background: #ffffff !important;
  color: var(--text) !important;
}

.table tbody,
.table thead,
.table tr,
.table td,
.table th {
  background: #ffffff !important;
  color: var(--text) !important;
  border-color: var(--bubble) !important;
}

.table thead th {
  background: linear-gradient(90deg, var(--sky), var(--sky-dark)) !important;
  color: #ffffff !important;
  font-weight: 700;
  font-size: 13px;
  letter-spacing: .5px;
  text-transform: uppercase;
}

.table-hover tbody tr:hover td {
  background: var(--sky-light) !important;
  color: var(--sky-dark) !important;
}

/* ======================================================
   PAGINATION
====================================================== */

.pagination { gap: 8px; }

.page-item .page-link {
  background: #ffffff !important;
  color: var(--sky-dark) !important;
  border: 1.5px solid var(--bubble) !important;
  border-radius: 12px !important;
  min-width: 42px;
  height: 42px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  transition: .3s ease;
}

.page-item .page-link:hover {
  background: var(--sky-light) !important;
  border-color: var(--sky) !important;
  color: var(--sky-dark) !important;
  transform: translateY(-2px);
}

.page-item.active .page-link {
  background: linear-gradient(135deg, var(--sky), var(--teal)) !important;
  border-color: transparent !important;
  color: #ffffff !important;
  box-shadow: 0 6px 18px rgba(14,165,233,.30);
}

.page-item.disabled .page-link {
  background: var(--foam) !important;
  color: #cbd5e1 !important;
  border-color: var(--border) !important;
}

/* ======================================================
   BUTTON
====================================================== */

.btn {
  border: none !important;
  border-radius: 12px !important;
  font-weight: 700 !important;
  padding: 10px 18px !important;
  transition: .3s ease;
  font-size: 14px !important;
}

.btn-primary {
  background: linear-gradient(135deg, var(--sky), var(--teal)) !important;
  color: #ffffff !important;
  box-shadow: 0 6px 20px rgba(14,165,233,.28);
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(14,165,233,.40);
}

.btn-danger {
  background: linear-gradient(135deg, #f43f5e, #e11d48) !important;
}

.btn-success {
  background: linear-gradient(135deg, #10b981, #059669) !important;
}

.btn-warning {
  background: linear-gradient(135deg, #f59e0b, #d97706) !important;
  color: #ffffff !important;
}

/* ======================================================
   FORM ELEMENTS
====================================================== */

.form-control,
.form-select {
  border: 1.5px solid var(--bubble) !important;
  border-radius: 12px !important;
  color: var(--text) !important;
  background: #f8faff !important;
  font-size: 14px;
  padding: 10px 14px !important;
  transition: .3s;
}

.form-control:focus,
.form-select:focus {
  border-color: var(--sky) !important;
  box-shadow: 0 0 0 3px rgba(14,165,233,.15) !important;
  background: #ffffff !important;
}

/* ======================================================
   ALERT
====================================================== */

.alert {
  border: none !important;
  border-radius: 16px !important;
  background: rgba(20,184,166,.12) !important;
  color: #065f46 !important;
  border-left: 4px solid var(--teal) !important;
  font-weight: 600;
}

.alert-success {
  background: rgba(16,185,129,.12) !important;
  color: #064e3b !important;
  border-left-color: var(--success) !important;
}

.alert-danger {
  background: rgba(244,63,94,.10) !important;
  color: #9f1239 !important;
  border-left-color: var(--danger) !important;
}

/* ======================================================
   BADGE / LABEL STATUS
====================================================== */

.badge {
  border-radius: 8px !important;
  font-size: 12px !important;
  padding: 5px 10px !important;
  font-weight: 700 !important;
}

/* ======================================================
   SCROLLBAR
====================================================== */

::-webkit-scrollbar { width: 7px; }
::-webkit-scrollbar-track { background: var(--foam); }
::-webkit-scrollbar-thumb {
  background: linear-gradient(var(--sky), var(--teal));
  border-radius: 20px;
}

/* ======================================================
   FOOTER
====================================================== */

.app-footer {
  background: #ffffff !important;
  border-top: 2px solid var(--bubble) !important;
  color: var(--text-muted);
  padding: 16px 24px;
  font-weight: 600;
  font-size: 14px;
}

.app-footer a {
  font-weight: 700;
  transition: .2s;
}

.app-footer a:hover {
  opacity: .75;
}

/* ======================================================
   ANIMATIONS
====================================================== */

@keyframes fadeUp {
  from { opacity: 0; transform: translateY(18px); }
  to   { opacity: 1; transform: translateY(0); }
}

@keyframes slideDown {
  from { opacity: 0; transform: translateY(-24px); }
  to   { opacity: 1; transform: translateY(0); }
}

@keyframes bubbleFloat {
  0%   { transform: translateY(0) scale(1); }
  50%  { transform: translateY(-6px) scale(1.02); }
  100% { transform: translateY(0) scale(1); }
}

.card:hover .card-header {
  animation: bubbleFloat 2.5s infinite ease-in-out;
}

/* ======================================================
   MOBILE RESPONSIVE
====================================================== */

@media (max-width: 768px) {

  .app-header h4 { font-size: 13px !important; margin: 0; }

  .app-sidebar { width: 260px !important; }
  .brand-text  { font-size: 18px !important; }

  .app-sidebar .nav-link {
    padding: 10px 12px;
    margin: 5px 8px;
  }

  .container-fluid {
    padding-left: 8px !important;
    padding-right: 8px !important;
  }

  .card {
    border-radius: 14px !important;
    margin-bottom: 14px;
  }

  .card-header { padding: 12px !important; font-size: 13px; }
  .card-body   { padding: 12px !important; }

  .table { font-size: 12px; white-space: nowrap; }

  .table-responsive {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }

  input, select, textarea { font-size: 16px !important; }

  .btn {
    width: 100%;
    margin-bottom: 8px;
  }

  .btn-sm {
    display: block;
    width: 100%;
    margin-bottom: 5px;
  }

  td:last-child { min-width: 140px; }

  .pagination {
    justify-content: center;
    flex-wrap: wrap;
    gap: 5px;
  }

  .page-link {
    min-width: 36px !important;
    height: 36px !important;
  }

  .app-footer {
    text-align: center;
    padding: 14px;
  }

  .float-end {
    float: none !important;
    display: block !important;
    margin-top: 8px;
  }

  .app-footer a { display: block; margin-top: 5px; }
}
    </style>
  </head>

  <body class="layout-fixed sidebar-mini sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">

      <!-- HEADER -->
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block">
              <a href="#" class="nav-link">
                <h4>
                  <i class="fa-solid fa-shirt me-2" style="color:#0ea5e9"></i>
                  <b>Selamat Datang Di Laundry 3 Semprul </b>
                </h4>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- SIDEBAR -->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="light">
        <div class="sidebar-brand">
          <a href="./index.html" class="brand-link">
            <span class="brand-text fw-bold">Dashboard</span>
          </a>
        </div>

        <div class="sidebar-wrapper">
          <nav class="mt-2">

            <!-- Data Laundry -->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Data Laundry" data-accordion="false">
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fa-solid fa-water me-2"></i>
                  <p>Data Laundry
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('costumer.index') }}" class="nav-link">
                      <i class="nav-icon fa-solid fa-users me-2"></i>
                      <p>Data-Data Costumer</p>
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('tambahc.index') }}" class="nav-link">
                      <i class="nav-icon fa-solid fa-user-plus me-2"></i>
                      <p>Tambah Costumer</p>
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('karyawan.index') }}" class="nav-link">
                      <i class="nav-icon fa-solid fa-id-badge me-2"></i>
                      <p>Data-Data Karyawan</p>
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('tambahk.index') }}" class="nav-link">
                      <i class="nav-icon fa-solid fa-user-tie me-2"></i>
                      <p>Tambah Karyawan</p>
                      <i class="nav-arrow bi bi-chevron-right"></i>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>

            <!-- Laporan -->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Laporan" data-accordion="false">
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fa-solid fa-file-invoice me-2"></i>
                  <p>Laporan
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('costumer/laporan/cetak') }}" target="_blank" class="nav-link">
                      <i class="nav-icon fa-solid fa-print me-2"></i>
                      <p>Laporan Costumer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('karyawan/laporan/cetak') }}" target="_blank" class="nav-link">
                      <i class="nav-icon fa-solid fa-print me-2"></i>
                      <p>Laporan Karyawan</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>

            <!-- Administrasi -->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Administrasi" data-accordion="false">
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fa-solid fa-folder-open me-2"></i>
                  <p>Administrasi
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('administrasi') }}" class="nav-link">
                      <i class="nav-icon fa-solid fa-table-list me-2"></i>
                      <p>Tampil Data</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('administrasi/create') }}" class="nav-link">
                      <i class="nav-icon fa-solid fa-plus me-2"></i>
                      <p>Tambah Data</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>

            <!-- Tentang -->
            

          </nav>
        </div>
      </aside>

      <!-- MAIN -->
      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <i class="fa-solid fa-circle-check me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
            @endif
            @yield('bebas')
          </div>
        </div>
      </main>

      <!-- FOOTER -->
      <footer class="app-footer">
        
        <span style="color:var(--sky-dark); font-weight:700">
          &copy; {{ date('Y') }} Laundry 3 Semprull
        </span>
      </footer>

    </div><!-- end app-wrapper -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('bebas/dist/js/adminlte.min.js') }}"></script>
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        const isMobile = window.innerWidth <= 992;
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined && !isMobile) {
          OverlayscrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: 'os-theme-dark',
              autoHide: 'leave',
              clickScroll: true,
            },
          });
        }
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" crossorigin="anonymous"></script>
    <script>
      const sortableEl = document.querySelector('.connectedSortable');
      if (sortableEl) {
        new Sortable(sortableEl, { group: 'shared', handle: '.card-header' });
        document.querySelectorAll('.connectedSortable .card-header').forEach(h => {
          h.style.cursor = 'move';
        });
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
    <script>
      const revenueChartEl = document.querySelector('#revenue-chart');
      if (revenueChartEl) {
        new ApexCharts(revenueChartEl, {
          series: [
            { name: 'Pakaian Reguler', data: [28,48,40,19,86,27,90] },
            { name: 'Express / Kilat',  data: [65,59,80,81,56,55,40] },
          ],
          chart: { height: 300, type: 'area', toolbar: { show: false } },
          legend: { show: true },
          colors: ['#0ea5e9', '#14b8a6'],
          dataLabels: { enabled: false },
          stroke: { curve: 'smooth' },
          xaxis: {
            type: 'datetime',
            categories: ['2023-01-01','2023-02-01','2023-03-01','2023-04-01','2023-05-01','2023-06-01','2023-07-01'],
          },
          tooltip: { x: { format: 'MMMM yyyy' } },
        }).render();
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>
    <script>
      const worldMapEl = document.querySelector('#world-map');
      if (worldMapEl) new jsVectorMap({ selector: '#world-map', map: 'world' });

      ['#sparkline-1','#sparkline-2','#sparkline-3'].forEach((sel, i) => {
        const el = document.querySelector(sel);
        if (!el) return;
        const data = [
          [1000,1200,920,927,931,1027,819,930,1021],
          [515,519,520,522,652,810,370,627,319,630,921],
          [15,19,20,22,33,27,31,27,19,30,21],
        ];
        new ApexCharts(el, {
          series: [{ data: data[i] }],
          chart: { type: 'area', height: 50, sparkline: { enabled: true } },
          stroke: { curve: 'straight' },
          fill: { opacity: 0.3 },
          yaxis: { min: 0 },
          colors: ['#0ea5e9'],
        }).render();
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>