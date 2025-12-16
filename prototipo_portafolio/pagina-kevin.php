<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet"/>
  <link rel="stylesheet" href="perfil.css" />
  <title>Portfolio | Mitchell</title>
</head>
<body>
  <!-- NAV -->
  <nav>
    <div class="nav__content">
      <div class="logo"><a href="#home">Kevin Quintero</a></div>
      <label for="check" class="checkbox">
        <i class="ri-menu-line"></i>
      </label>
      <input type="checkbox" name="check" id="check" />
      <ul>
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- HOME -->
  <section class="section" id="home">
    <div class="section__container">
      <div class="image">
        <img src="/img/perfilkevin.png" alt="profile" />
      </div>
      <div class="content">
        <p class="subtitle">HELLO</p>
        <h1 class="title"> I'm <span>Mitchell</span> Web Developer </h1>
        <p class="description">
          Welcome to my web developer portfolio! I'm Mitchell, a skilled and creative web developer with a passion for creating beautiful, responsive, and user-friendly websites.
        </p>
        <div class="social-icons">
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          <a href="#"><i class="fa-brands fa-github"></i></a>
          <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="action__btns">
          <button class="hire__me">Hire Me</button>
          <button class="portfolio">Portfolio</button>
        </div>
      </div>
    </div>
  </section>

  <!-- SKILLS -->
  <section class="section" id="skills">
    <div class="section__container">
      <div class="content">
        <p class="subtitle">MY SKILLS</p>
        <h1 class="title">Technical <span>Skills</span></h1>
        <p class="description">Some of the technologies and tools I use:</p>
        <div class="content-list">
          <p class="list-item">HTML5 / CSS3</p>
          <p class="list-item">JavaScript / ES6+</p>
          <p class="list-item">React / Node.js</p>
          <p class="list-item">Git / GitHub</p>
          <p class="list-item">Responsive Design</p>
        </div>
      </div>
    </div>
  </section>

  <!-- EDUCATION -->
  <section class="section" id="education">
    <div class="section__container">
      <div class="content">
        <p class="subtitle">EDUCATION</p>
        <h1 class="title">My <span>Education</span></h1>
        <p class="description">Academic background & certifications:</p>
        <div class="content-list">
          <p class="list-item">Software Engineering – University Name</p>
          <p class="list-item">Frontend Developer Certification – Platform</p>
          <p class="list-item">Web Design Mastery – Online Bootcamp</p>
        </div>
      </div>
    </div>
  </section>

  <!-- EXPERIENCE -->
  <section class="section" id="experience">
    <div class="section__container">
      <div class="content">
        <p class="subtitle">EXPERIENCE</p>
        <h1 class="title">Work <span>Experience</span></h1>
        <p class="description">Relevant experience I've gained:</p>
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
        <p class="subtitle">PROJECTS</p>
        <h1 class="title">My <span>Projects</span></h1>
        <p class="description">Some projects I have developed recently:</p>
        <div class="content-list">

          <div class="project-card">
            <div class="project-img">
              <img src="/img/proyecto.png" alt="proyecto 1">
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
              <img src="/img/proyecto.png" alt="proyecto 2">
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
              <img src="/img/proyecto.png" alt="proyecto 3">
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
              <img src="/img/proyecto.png" alt="proyecto 2">
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
                <img src="/img/proyecto.png" alt="proyecto 2">
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
      <h2 class="footer__name">Mitchell</h2>
      <div class="footer-icons">
        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#"><i class="fa-brands fa-github"></i></a>
        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
      </div>
      <p class="footer__text">Feel free to reach me for collaboration or work inquiries:</p>
      <div class="footer__info">
        <p>Email: example@mail.com</p>
        <p>Phone: +57 000 000 0000</p>
        <p>Location: Colombia</p>
      </div>
      <p class="footer__rights">© 2025 Mitchell — Todos los derechos reservados.</p>
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
