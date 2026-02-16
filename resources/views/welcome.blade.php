<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Biblioteca municipal</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind CSS (CDN) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    html { font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; }
  </style>
</head>

<body class="min-h-screen bg-slate-950 text-slate-100">
  <!-- Decorative background -->
  <div aria-hidden="true" class="fixed inset-0 -z-10 overflow-hidden">
    <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-emerald-500/20 blur-3xl"></div>
    <div class="absolute top-32 -right-24 h-80 w-80 rounded-full bg-cyan-500/20 blur-3xl"></div>
    <div class="absolute bottom-0 left-1/3 h-96 w-96 rounded-full bg-fuchsia-500/10 blur-3xl"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(16,185,129,0.12),transparent_55%),radial-gradient(ellipse_at_bottom,rgba(6,182,212,0.10),transparent_55%)]"></div>
    <div class="absolute inset-0 opacity-40 [background-image:linear-gradient(to_right,rgba(148,163,184,0.08)_1px,transparent_1px),linear-gradient(to_bottom,rgba(148,163,184,0.08)_1px,transparent_1px)] [background-size:44px_44px]"></div>
  </div>

  <!-- HEADER -->
  <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/70 backdrop-blur">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <!-- Logo -->
        <a href="#inicio" class="group flex items-center gap-3">
          <span class="relative inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-emerald-500/15 ring-1 ring-emerald-400/30">
            <span class="text-lg font-extrabold text-emerald-300">B</span>
            <span class="absolute -bottom-1 -right-1 h-3 w-3 rounded-full bg-emerald-400 shadow-[0_0_20px_rgba(16,185,129,.6)]"></span>
          </span>
          <div class="leading-tight">
            <p class="font-semibold tracking-tight group-hover:text-white">Biblioteca Municipal</p>
            <p class="text-xs text-slate-400">Tu rincón de lectura ✨</p>
          </div>
        </a>

        <!-- Menú escritorio -->
        <nav class="hidden md:block" aria-label="Navegación principal">
          <ul class="flex items-center gap-2">
            <li>
              <a href="#inicio"
                 class="rounded-xl px-3 py-2 text-sm font-semibold text-slate-200 hover:bg-white/5 hover:text-white">
                Inicio
              </a>
            </li>
            <li>
              <a href="#catalogo"
                 class="rounded-xl px-3 py-2 text-sm font-semibold text-slate-200 hover:bg-white/5 hover:text-white">
                Catálogo
              </a>
            </li>
            <li>
              <a href="{{route('login')}}"
                 class="rounded-xl bg-emerald-500 px-4 py-2 text-sm font-semibold text-slate-950 hover:bg-emerald-400">
                Login
              </a>
            </li>
          </ul>
        </nav>

        <!-- Botón hamburguesa (móvil) -->
        <button
          id="btnOpen"
          class="md:hidden inline-flex items-center justify-center rounded-xl p-2 hover:bg-white/5 focus:outline-none focus:ring-2 focus:ring-emerald-400"
          aria-label="Abrir menú"
          aria-controls="mobileMenu"
          aria-expanded="false"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-100" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Menú móvil desplegable -->
    <div id="mobileMenu" class="md:hidden hidden border-t border-white/10 bg-slate-950/90 backdrop-blur">
      <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-3" aria-label="Navegación móvil">
        <ul class="flex flex-col gap-2">
          <li>
            <a href="#inicio" class="block rounded-xl px-3 py-2 text-sm font-semibold text-slate-200 hover:bg-white/5">
              Inicio
            </a>
          </li>
          <li>
            <a href="#catalogo" class="block rounded-xl px-3 py-2 text-sm font-semibold text-slate-200 hover:bg-white/5">
              Catálogo
            </a>
          </li>
          <li>
            <a href="#login" class="block rounded-xl bg-emerald-500 px-3 py-2 text-sm font-semibold text-slate-950 hover:bg-emerald-400">
              Login
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- MAIN -->
  <main id="inicio">
    <!-- HERO -->
    <section class="relative">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
          <!-- Texto -->
          <div>
            <p class="inline-flex items-center gap-2 rounded-full bg-white/5 px-3 py-1 text-sm font-semibold text-emerald-200 ring-1 ring-white/10">
              🔎 Catálogo inteligente • Reservas rápidas
            </p>

            <h1 class="mt-4 text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight tracking-tight">
              Encuentra tu próxima lectura
              <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-300 to-cyan-300">
                en minutos
              </span>.
            </h1>

            <p class="mt-4 text-base sm:text-lg text-slate-300">
              Consulta disponibilidad, guarda favoritos y administra tus préstamos con una experiencia
              clara, rápida y moderna. Perfecta para estudiantes, docentes y lectores de corazón.
            </p>

            <div class="mt-6 flex flex-col sm:flex-row gap-3">
              <a href="#catalogo"
                 class="inline-flex items-center justify-center rounded-xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-slate-950 hover:bg-emerald-400">
                Explorar catálogo
              </a>
              <a href="#login"
                 class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-slate-100 hover:bg-white/10">
                Iniciar sesión
              </a>
            </div>

            <div class="mt-8 grid grid-cols-3 gap-3 max-w-md">
              <div class="rounded-2xl border border-white/10 bg-white/5 p-3">
                <p class="text-xs text-slate-400">Libros</p>
                <p class="text-lg font-bold">10k+</p>
              </div>
              <div class="rounded-2xl border border-white/10 bg-white/5 p-3">
                <p class="text-xs text-slate-400">Reservas</p>
                <p class="text-lg font-bold">1-click</p>
              </div>
              <div class="rounded-2xl border border-white/10 bg-white/5 p-3">
                <p class="text-xs text-slate-400">Soporte</p>
                <p class="text-lg font-bold">Rápido</p>
              </div>
            </div>

            <div class="mt-6 flex flex-wrap gap-2 text-xs text-slate-400">
              <span class="rounded-full bg-white/5 px-3 py-1 ring-1 ring-white/10">📌 Favoritos</span>
              <span class="rounded-full bg-white/5 px-3 py-1 ring-1 ring-white/10">⏳ Historial</span>
              <span class="rounded-full bg-white/5 px-3 py-1 ring-1 ring-white/10">🔔 Alertas</span>
            </div>
          </div>

          <!-- Imagen / Card -->
          <div class="relative">
            <div class="absolute -inset-6 -z-10 rounded-[2.5rem] bg-white/5 blur-2xl"></div>

            <div class="rounded-3xl border border-white/10 bg-white/5 shadow-[0_20px_80px_rgba(0,0,0,.35)] overflow-hidden">
              <div class="p-4 sm:p-5 flex items-center justify-between border-b border-white/10">
                <div class="flex items-center gap-2">
                  <span class="h-2.5 w-2.5 rounded-full bg-red-400/80"></span>
                  <span class="h-2.5 w-2.5 rounded-full bg-yellow-300/80"></span>
                  <span class="h-2.5 w-2.5 rounded-full bg-emerald-400/80"></span>
                </div>
                <p class="text-xs text-slate-300">biblioteca.local</p>
              </div>

              <img
                class="w-full object-cover aspect-[16/10]"
                src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=1400&q=80"
                alt="Persona leyendo en una biblioteca"
                loading="lazy"
              />

              <div class="p-5 sm:p-6">
                <div class="flex items-center justify-between gap-3">
                  <div>
                    <p class="text-sm font-semibold text-slate-100">Recomendación del día</p>
                    <p class="text-xs text-slate-400">Novedades para inspirarte</p>
                  </div>
                  <span class="rounded-full bg-emerald-500/15 px-3 py-1 text-xs font-semibold text-emerald-200 ring-1 ring-emerald-400/20">
                    ⭐ Top picks
                  </span>
                </div>

                <div class="mt-4 grid grid-cols-2 gap-4">
                  <img
                    class="rounded-2xl border border-white/10 bg-white/5 object-cover aspect-[4/3]"
                    src="https://images.unsplash.com/photo-1455885666463-8d69c7f37d49?auto=format&fit=crop&w=900&q=80"
                    alt="Libros apilados"
                    loading="lazy"
                  />
                  <img
                    class="rounded-2xl border border-white/10 bg-white/5 object-cover aspect-[4/3]"
                    src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=900&q=80"
                    alt="Estanterías de biblioteca"
                    loading="lazy"
                  />
                </div>

                <p class="mt-3 text-xs text-slate-400">
                  Imágenes de stock libres: Unsplash (licencia libre para uso comercial).
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CATÁLOGO -->
    <section id="catalogo" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-14">
      <div class="rounded-3xl border border-white/10 bg-white/5 p-6 sm:p-8 shadow-[0_20px_80px_rgba(0,0,0,.25)]">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
          <div>
            <h2 class="text-2xl font-bold tracking-tight">Explora el catálogo</h2>
            <p class="mt-2 text-slate-300">
              Busca por título, autor o categoría. Reserva sin complicaciones.
            </p>
          </div>

          <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
            <label class="sr-only" for="busqueda">Buscar</label>
            <input
              id="busqueda"
              type="search"
              placeholder="Buscar libros..."
              class="w-full sm:w-72 rounded-xl border border-white/10 bg-slate-950/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-emerald-400"
            />
            <button
              class="rounded-xl bg-slate-100 px-5 py-3 text-sm font-semibold text-slate-950 hover:bg-white"
              type="button"
            >
              Buscar
            </button>
          </div>
        </div>

        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
          <article class="rounded-2xl border border-white/10 bg-slate-950/30 p-5 hover:bg-white/5 transition">
            <p class="text-sm font-semibold">📌 Recomendados</p>
            <p class="mt-1 text-sm text-slate-300">Lecturas populares y nuevas adquisiciones.</p>
          </article>
          <article class="rounded-2xl border border-white/10 bg-slate-950/30 p-5 hover:bg-white/5 transition">
            <p class="text-sm font-semibold">🧭 Categorías</p>
            <p class="mt-1 text-sm text-slate-300">Ciencia, literatura, historia, tecnología y más.</p>
          </article>
          <article class="rounded-2xl border border-white/10 bg-slate-950/30 p-5 hover:bg-white/5 transition">
            <p class="text-sm font-semibold">⏳ Préstamos</p>
            <p class="mt-1 text-sm text-slate-300">Control de devoluciones con alertas claras.</p>
          </article>
        </div>

        <div class="mt-8 rounded-2xl border border-white/10 bg-slate-950/30 p-5">
          <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
              <p class="text-sm font-semibold">Tip rápido</p>
              <p class="text-sm text-slate-300">Usa palabras clave como “programación”, “novela”, “biografía”.</p>
            </div>
            <a href="#login"
               class="inline-flex items-center justify-center rounded-xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-slate-950 hover:bg-emerald-400">
              Entrar para reservar
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- LOGIN -->
    <!-- section id="login" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-16">
      <div class="grid gap-6 lg:grid-cols-2 lg:items-stretch">
        <div class="rounded-3xl border border-white/10 bg-white/5 p-6 sm:p-8 shadow-[0_20px_80px_rgba(0,0,0,.25)]">
          <h2 class="text-2xl font-bold tracking-tight">Login</h2>
          <p class="mt-2 text-slate-300">Accede para gestionar préstamos, reservas y favoritos.</p>

          <form class="mt-6 space-y-4">
            <div>
              <label class="text-sm font-semibold" for="email">Correo</label>
              <input
                id="email"
                type="email"
                placeholder="tu@correo.com"
                class="mt-1 w-full rounded-xl border border-white/10 bg-slate-950/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-emerald-400"
              />
            </div>

            <div>
              <label class="text-sm font-semibold" for="pass">Contraseña</label>
              <input
                id="pass"
                type="password"
                placeholder="••••••••"
                class="mt-1 w-full rounded-xl border border-white/10 bg-slate-950/40 px-4 py-3 text-sm text-slate-100 placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-emerald-400"
              />
            </div>

            <button
              type="button"
              class="w-full rounded-xl bg-emerald-500 px-5 py-3 text-sm font-semibold text-slate-950 hover:bg-emerald-400"
            >
              Entrar
            </button>

            <div class="flex items-center justify-between text-xs text-slate-400">
              <a class="hover:text-slate-200" href="#">¿Olvidaste tu contraseña?</a>
              <a class="hover:text-slate-200" href="#">Crear cuenta</a>
            </div>
          </form>
        </div>

        <div class="rounded-3xl border border-white/10 bg-white/5 p-6 sm:p-8 shadow-[0_20px_80px_rgba(0,0,0,.25)] flex flex-col">
          <h3 class="text-lg font-bold tracking-tight">Beneficios</h3>
          <ul class="mt-3 space-y-2 text-sm text-slate-300">
            <li>✅ Reservas rápidas y controladas</li>
            <li>✅ Historial de préstamos y devoluciones</li>
            <li>✅ Alertas y recordatorios</li>
            <li>✅ Recomendaciones personalizadas</li>
          </ul>

          <div class="mt-6 grid gap-4">
            <div class="rounded-2xl border border-white/10 bg-slate-950/30 p-4">
              <p class="text-sm font-semibold">Modo estudiante</p>
              <p class="mt-1 text-sm text-slate-300">Encuentra material por materia y autor.</p>
            </div>
            <img
              class="w-full rounded-2xl border border-white/10 object-cover aspect-[16/9]"
              src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=1400&q=80"
              alt="Persona leyendo con laptop"
              loading="lazy"
            />
          </div>
        </div>
      </div>
    </section>
  </main>
-->
  <!-- FOOTER -->
  <footer class="border-t border-white/10 bg-slate-950/70 backdrop-blur">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
      <div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
        <div class="flex items-center gap-3">
          <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-emerald-500/15 ring-1 ring-emerald-400/30">
            <span class="text-lg font-extrabold text-emerald-200">B</span>
          </span>
          <div>
            <p class="font-semibold">Biblioteca Municipal</p>
            <p class="text-sm text-slate-300">Conectando lectores con conocimiento.</p>
          </div>
        </div>

        <div class="text-sm text-slate-300">
          <p>Contacto: soporte@biblioteca.com</p>
          <p>Horario: Lun–Vie 8:00–18:00</p>
        </div>
      </div>

      <div class="mt-6 flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
        <p class="text-sm text-slate-400">© <span id="year"></span> Biblioteca. Todos los derechos reservados.</p>
        <p class="text-xs text-slate-500">Diseño responsive (Tailwind CDN + JS vanilla)</p>
      </div>
    </div>
  </footer>

  <!-- JS Vanilla: Menú hamburguesa -->
  <script>
    const btnOpen = document.getElementById('btnOpen');
    const mobileMenu = document.getElementById('mobileMenu');

    btnOpen.addEventListener('click', () => {
      const isHidden = mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden');
      btnOpen.setAttribute('aria-expanded', isHidden ? 'true' : 'false');
    });

    // Cerrar menú al seleccionar opción (móvil)
    document.querySelectorAll('#mobileMenu a[href^="#"]').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        btnOpen.setAttribute('aria-expanded', 'false');
      });
    });

    // Año en footer
    document.getElementById('year').textContent = new Date().getFullYear();

    // Si pasan a desktop, asegúrate que el menú móvil quede cerrado
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 768) {
        mobileMenu.classList.add('hidden');
        btnOpen.setAttribute('aria-expanded', 'false');
      }
    });
  </script>
</body>
</html>
