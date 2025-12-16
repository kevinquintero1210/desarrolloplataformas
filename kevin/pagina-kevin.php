<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="perfil.css" />
  <title>Portfolio | Kevin Quintero</title>
</head>
<body>

  <!-- NAV -->
  <nav>
  <div class="nav__content">

    <!-- LOGO -->
    <div class="logo">
      <!-- BOTÓN HOME (DESKTOP) -->
      <a
        href="http://localhost:3000/Project4/inicio/home.html"
        class="home-app-btn"
        title="Inicio principal"
      >
        <i class="fa-solid fa-house"></i>
      </a>

      <!-- NOMBRE -->
      <a href="#home" class="logo-text">
        <span class="logo-first">Kevin</span>
        <span class="logo-last">Quintero</span>
      </a>
    </div>

    <!-- MENÚ HAMBURGUESA -->
    <label for="check" class="checkbox">
      <i class="ri-menu-line"></i>
    </label>
    <input type="checkbox" id="check" />

    <ul>
      <!-- HOME SOLO EN MOBILE -->
      <li class="mobile-home">
        <a href="http://localhost:3000/Project4/inicio/home.html">
          <i class="fa-solid fa-house"></i>
          Inicio principal
        </a>
      </li>

      <li><a href="#home" class="active">Inicio</a></li>
      <li><a href="#skills">Habilidades</a></li>
      <li><a href="#education">Educacion</a></li>
      <li><a href="#experience">Experiencia</a></li>
      <li><a href="#projects">Proyectos</a></li>
      <li><a href="#contact">Contacto</a></li>
    </ul>

  </div>
</nav>


  <!-- HOME -->
  <section class="section" id="home">
    <div class="section__container">
      <div class="image">
        <img src="/Project4/portfolio/kevin/img/perfil_portafolio.png" alt="profile" />
      </div>
      <div class="content">
        <p class="subtitle">HOLA</p>
        <h1 class="title"> Yo soy <span>Kevin</span> Estudiante de Ingeniería de Sistemas-Desarrollador </h1>
        <p class="description">
          Bienvenido a mi portafolio. Soy Kevin, estudiante y desarrollador junior en formación, enfocado en crear soluciones y seguir aprendiendo cada día.
        </p>

        <div class="social-icons">
          <a href="https://www.linkedin.com/in/kevin-quintero-a02985377/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://github.com/Sebasquinter/progrmacionuniversidad.git" target="_blank"><i class="fa-brands fa-github"></i></a>
          <a href="https://x.com/KevinQuin1210" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="https://www.instagram.com/sebatianquinter?igsh=NDUwNDh2YTB5Mnpy" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        </div>

        <div class="action__btns">
          <a href="https://wa.me/+573007402933" target="_blank">
            <button class="hire__me">Contactame</button>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- SKILLS -->
  <section id="skills" class="section services min-h-full w-full pb-7">
    <div class="section__container">

      <div class="content">
        <p class="subtitle">MIS HABILIDADES</p>
        <h1 class="title">Habilidades <span>Tecnicas</span></h1>
        <p class="description">Algunas de las tecnologías y herramientas que uso:</p>
      </div>

      <div class="services__card w-full grid grid-nogutter mt-7 gap-5">

        <div class="card flex align-items-center col-12 sm:col-6 lg:col-4 gap-3 p-2">
          <div class="service__logo flex align-items-center justify-content-center">
            <i class="fa-brands fa-html5"></i>
          </div>
          <div class="service__name"><p>HTML</p></div>
        </div>

        <div class="card flex align-items-center col-12 sm:col lg:col-4 gap-3 p-2">
          <div class="service__logo flex align-items-center justify-content-center">
            <i class="fa-brands fa-wordpress"></i>
          </div>
          <div class="service__name"><p>Wordpress</p></div>
        </div>

        <div class="card flex align-items-center col-12 sm:col-6 md:col-3 lg:col gap-3 p-2">
          <div class="service__logo flex align-items-center justify-content-center">
            <i class="fa-brands fa-angular"></i>
          </div>
          <div class="service__name"><p>Angular</p></div>
        </div>

        <div class="card flex align-items-center col-12 sm:col md:col lg:col-4 gap-3 p-2">
          <div class="service__logo flex align-items-center justify-content-center">
            <i class="fa-brands fa-react"></i>
          </div>
          <div class="service__name"><p>React Js</p></div>
        </div>

        <div class="card flex align-items-center col-12 sm:col-6 md:col-4 lg:col-4 gap-3 p-2">
          <div class="service__logo flex align-items-center justify-content-center">
            <i class="fa-solid fa-mobile-screen-button"></i>
          </div>
          <div class="service__name"><p>Desarrollo Móvil</p></div>
        </div>

        <div class="card flex align-items-center col-12 sm:col md:col-4 lg:col gap-3 p-2">
          <div class="service__logo flex align-items-center justify-content-center">
            <i class="fa-solid fa-code"></i>
          </div>
          <div class="service__name"><p>Desarrollo web</p></div>
        </div>

      </div> <!-- cierre de services__card -->

    </div> <!-- cierre de section__container -->
  </section>

  <!-- EDUCATION -->
  <section class="section" id="education">
    <div class="section__container">
      <div class="content">
        <p class="subtitle">EDUCACION</p>
        <h1 class="title">Mi <span>Educacion</span></h1>
        <p class="description">Antecedentes académicos y certificaciones:</p>

        <!-- Estructura idéntica a Experience (línea de tiempo) -->
        <div class="experience-container">
          <div class="timeline">

            <!-- Educación 1 -->
            <div class="timeline-item">
              <div class="timeline-content">
                <div class="experience-item">
                  <span class="experience-dot"></span>
                  <div class="experience-header">
                    <p class="experience-year">2016 – 2019</p>
                    <h3 class="experience-company">Colegio Nacional / Bachillerato</h3>
                  </div>
                  <p class="experience-desc">
                    Estudios de educación secundaria con énfasis en ciencias y tecnología. Participación en proyectos de software escolar y club de robótica.
                  </p>
                </div>
              </div>
            </div>

            <!-- Educación 2 -->
            <div class="timeline-item">
              <div class="timeline-content">
                <div class="experience-item">
                  <span class="experience-dot"></span>
                  <div class="experience-header">
                    <p class="experience-year">2020 – 2023</p>
                    <h3 class="experience-company">Universidad Ejemplo — Ingeniería de Software</h3>
                  </div>
                  <p class="experience-desc">
                    Carrera universitaria orientada a desarrollo web y aplicaciones. Cursos destacados: Estructuras de datos, Bases de datos, Desarrollo web frontend.
                  </p>
                </div>
              </div>
            </div>

            <!-- Educación 3 (certificación) -->
            <div class="timeline-item">
              <div class="timeline-content">
                <div class="experience-item">
                  <span class="experience-dot"></span>
                  <div class="experience-header">
                    <p class="experience-year">2024</p>
                    <h3 class="experience-company">Frontend Developer Certification — Plataforma X</h3>
                  </div>
                  <p class="experience-desc">
                    Certificación en desarrollo frontend moderna: HTML, CSS avanzado, JavaScript y frameworks (React/Angular). Proyecto final: SPA responsiva.
                  </p>
                </div>
              </div>
            </div>

          </div> <!-- .timeline -->
        </div> <!-- .experience-container -->

      </div> <!-- .content -->
    </div> <!-- .section__container -->
  </section>

  <!-- EXPERIENCE -->
  <section class="section" id="experience">
    <div class="section__container">
      <div class="content">
        <p class="subtitle">EXPERIENCIA</p>
        <h1 class="title">Experiencia <span>Laboral</span></h1>
        <p class="description">Experiencia relevante que he adquirido:</p>
        <div class="experience-container">
          <div class="timeline">
            <!-- Experiencia 1 -->
            <div class="timeline-item">
              <div class="timeline-content">
                <div class="experience-item">
                  <span class="experience-dot"></span>
                  <div class="experience-header">
                    <p class="experience-year">2022 – Present</p>
                    <h3 class="experience-company">Company Name</h3>
                  </div>
                  <p class="experience-desc">
                    Developed and maintained web applications, collaborating with the design team to implement responsive UI components.
                  </p>
                  <div class="experience-tech-container">
                    <span class="tech-item">HTML5</span>
                    <span class="tech-item">CSS3</span>
                    <span class="tech-item">JavaScript</span>
                    <span class="tech-item">React</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Experiencia 2 -->
            <div class="timeline-item">
              <div class="timeline-content">
                <div class="experience-item">
                  <span class="experience-dot"></span>
                  <div class="experience-header">
                    <p class="experience-year">2021 – 2022</p>
                    <h3 class="experience-company">Freelance Frontend Developer</h3>
                  </div>
                  <p class="experience-desc">
                    Built custom websites for clients, implementing UI/UX improvements and ensuring cross-browser compatibility.
                  </p>
                  <div class="experience-tech-container">
                    <span class="tech-item">HTML</span>
                    <span class="tech-item">CSS</span>
                    <span class="tech-item">JavaScript</span>
                    <span class="tech-item">Bootstrap</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Experiencia 3 -->
            <div class="timeline-item">
              <div class="timeline-content">
                <div class="experience-item">
                  <span class="experience-dot"></span>
                  <div class="experience-header">
                    <p class="experience-year">2020 – 2021</p>
                    <h3 class="experience-company">Personal Projects / UI Designer</h3>
                  </div>
                  <p class="experience-desc">
                    Designed and prototyped UI/UX for personal projects, focusing on responsive design and user-friendly interfaces.
                  </p>
                  <div class="experience-tech-container">
                    <span class="tech-item">Figma</span>
                    <span class="tech-item">Adobe XD</span>
                    <span class="tech-item">CSS</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Experiencia 4 -->
            <div class="timeline-item">
              <div class="timeline-content">
                <div class="experience-item">
                  <span class="experience-dot"></span>
                  <div class="experience-header">
                    <p class="experience-year">2020 – 2021</p>
                    <h3 class="experience-company">Personal Projects / UI Designer</h3>
                  </div>
                  <p class="experience-desc">
                    Designed and prototyped UI/UX for personal projects, focusing on responsive design and user-friendly interfaces.
                  </p>
                  <div class="experience-tech-container">
                    <span class="tech-item">Figma</span>
                    <span class="tech-item">Adobe XD</span>
                    <span class="tech-item">CSS</span>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section class="section" id="projects">
    <div class="section__container">
      <div class="content">
        <p class="subtitle">PROYECTOS</p>
        <h1 class="title">Mis <span>Proyectos</span></h1>
        <p class="description">Algunos proyectos que he desarrollado recientemente:</p>
        <div class="content-list">

          <div class="project-card">
            <div class="project-img">
              <img src="/Project4/portfolio/kevin/img/proyecto.png" alt="proyecto 1">
            </div>
            <div class="project-info">
              <h3>App de Gestión de tareas</h3>
              <p>Aplicación diseñada para gestionar diferentes tareas de tu día a día</p>
              <div class="project-tech">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </div>
              <div class="project-links">
                <a href="#" target="_blank"><i class="fas fa-link"></i>Demo</a>
                <a href="#" target="_blank"><i class="fab fa-github"></i>Codigo</a>
              </div>
            </div>
          </div>

          <div class="project-card">
            <div class="project-img">
              <img src="/Project4/portfolio/kevin/img/proyecto.png" alt="proyecto 2">
            </div>
            <div class="project-info">
              <h3>App de reservas de citas</h3>
              <p>Aplicación diseñada para gestionar diferentes tareas de tu día a día</p>
              <div class="project-tech">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </div>
              <div class="project-links">
                <a href="#" target="_blank"><i class="fas fa-link"></i>Demo</a>
                <a href="#" target="_blank"><i class="fab fa-github"></i>Codigo</a>
              </div>
            </div>
          </div>

          <div class="project-card">
            <div class="project-img">
              <img src="/Project4/portfolio/kevin/img/proyecto.png" alt="proyecto 3">
            </div>
            <div class="project-info">
              <h3>App de control de gastos e ingresos</h3>
              <p>Aplicación diseñada para gestionar diferentes tareas de tu día a día</p>
              <div class="project-tech">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </div>
              <div class="project-links">
                <a href="#" target="_blank"><i class="fas fa-link"></i>Demo</a>
                <a href="#" target="_blank"><i class="fab fa-github"></i>Codigo</a>
              </div>
            </div>
          </div>

          <div class="project-card">
            <div class="project-img">
              <img src="/Project4/portfolio/kevin/img/proyecto.png" alt="proyecto 4">
            </div>
            <div class="project-info">
              <h3>App de reservas de citas</h3>
              <p>Aplicación diseñada para gestionar diferentes tareas de tu día a día</p>
              <div class="project-tech">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </div>
              <div class="project-links">
                <a href="#" target="_blank"><i class="fas fa-link"></i>Demo</a>
                <a href="#" target="_blank"><i class="fab fa-github"></i>Codigo</a>
              </div>
            </div>
          </div>

          <div class="project-card">
            <div class="project-img">
              <img src="/Project4/portfolio/kevin/img/proyecto.png" alt="proyecto 5">
            </div>
            <div class="project-info">
              <h3>App de reservas de citas</h3>
              <p>Aplicación diseñada para gestionar diferentes tareas de tu día a día</p>
              <div class="project-tech">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
              </div>
              <div class="project-links">
                <a href="#" target="_blank"><i class="fas fa-link"></i>Demo</a>
                <a href="#" target="_blank"><i class="fab fa-github"></i>Codigo</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer" id="contact">
    <div class="footer__container">
      <h2 class="footer__name">Kevin Quintero</h2>
      <div class="footer-icons">
        <a href="https://www.linkedin.com/in/kevin-quintero-a02985377/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        <a href="https://github.com/Sebasquinter/progrmacionuniversidad.git" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="https://x.com/KevinQuin1210" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="https://www.instagram.com/sebatianquinter?igsh=NDUwNDh2YTB5Mnpy" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      </div>
      <p class="footer__text">No dudes en contactarme para consultas de colaboración o trabajo:</p>
      <div class="footer__info">
        <p>Email: kevinqvargas10@gmail.com</p>
        <p>Phone: +57 300 740 2933</p>
        <p>Location: Colombia</p>
      </div>
      <p class="footer__rights">© 2025 Kevin — Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- SCRIPT -->
  <script>
    const sectionsAndFooter = document.querySelectorAll("section, footer");
    const navLinks = document.querySelectorAll("nav ul li a");
    const checkbox = document.getElementById("check");

    // cerrar menú movil al pulsar enlace
    navLinks.forEach(link => {
      link.addEventListener("click", () => {
        checkbox.checked = false;
      });
    });

    navLinks.forEach(link => {
      link.addEventListener("click", (e) => {
        const href = link.getAttribute('href');
        if (!href || !href.startsWith('#')) return;
        e.preventDefault();
        const target = document.querySelector(href);
        if (!target) return;
        navLinks.forEach(l => l.classList.remove('active'));
        link.classList.add('active');
        target.scrollIntoView({ behavior: 'auto', block: 'start' });
        if (checkbox) checkbox.checked = false;
      });
    });

    const observerOptions = { root: null, rootMargin: '-35% 0px -35% 0px', threshold: 0 };
    const observerCallback = (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute('id');
          if (!id) return;
          navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === '#' + id);
          });
        }
      });
    };
    const observer = new IntersectionObserver(observerCallback, observerOptions);
    sectionsAndFooter.forEach(el => observer.observe(el));
  </script>
</body>
</html>
