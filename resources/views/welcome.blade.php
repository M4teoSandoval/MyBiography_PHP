<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Keiner Mateo Sandoval Barreto - Perfil</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow-x: hidden;
    }

    #particles-js {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: -1;
      background: linear-gradient(to right, #1e3a8a, #1e40af, #3b82f6);
    }

    header {
      text-align: center;
      margin-bottom: 1rem;
      padding: 1.5rem 1rem;
    }

    header h1 {
      font-size: 2.5rem;
      color: #fbbf24;
      text-shadow: 0 2px 8px rgba(0,0,0,0.5);
    }

    header p {
      font-size: 1.1rem;
      margin-top: 0.5rem;
      color: #e5e7eb;
    }

    .card-container {
      max-width: 900px;
      margin: 0 auto 1rem;
    }

    .card {
      background: linear-gradient(145deg, #1e40afcc, #1e3a8acc);
      border-radius: 1.2rem;
      box-shadow: 0 10px 25px rgba(0,0,0,0.3);
      margin-bottom: 1rem;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      transform: translateY(20px);
      opacity: 0;
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .card p {
      color: #e5e7eb;
    }

    .card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .card-header {
      padding: 1.2rem 2rem;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .card-header h2 {
      font-size: 1.5rem;
      color: #facc15;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin: 0;
    }

    .card-header span {
      font-size: 1.5rem;
    }

    .card-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.8s ease;
    }

    .card-content-inner {
      padding: 0 2rem;
      opacity: 0;
      transition: opacity 0.5s ease, padding 0.8s ease;
    }

    .card.active .card-content {
      max-height: 1200px; /* Aumenté la altura para las 3 habilidades */
    }

    .card.active .card-content-inner {
      padding: 0 2rem 1.5rem;
      opacity: 1;
    }

    .card.active .card-header .toggle-icon {
      transform: rotate(180deg);
    }

    .toggle-icon {
      transition: transform 0.3s ease;
      font-size: 1.5rem;
      color: #facc15;
    }

    .divider {
      height: 2px;
      width: 60px;
      background: #facc15;
      margin: 0.8rem 0;
      border-radius: 5px;
    }

    .section p {
      color: #f9fafb;
      font-size: 1rem;
      line-height: 1.6;
    }

    /* Estilos para habilidades */
    .habilidades-container {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      margin-top: 1rem;
    }

    .habilidad {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 0.8rem;
      padding: 1rem;
      flex: 1 0 calc(33.333% - 1rem); /* Cambiado para 3 columnas */
      min-width: 250px;
      border-left: 4px solid #facc15;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .habilidad:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .habilidad h3 {
      color: #facc15;
      margin-bottom: 0.5rem;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .habilidad p {
      color: #e5e7eb;
      font-size: 0.95rem;
      line-height: 1.5;
    }

    footer {
      text-align: center;
      margin-top: 2rem;
      padding: 1.5rem;
      font-size: 0.9rem;
      color: #9ca3af;
    }

    @media (max-width: 900px) {
      .habilidad {
        flex: 1 0 calc(50% - 1rem); /* 2 columnas en tablets */
      }
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }
      
      .card-header {
        padding: 1rem;
      }
      
      .card-header h2 {
        font-size: 1.2rem;
      }
      
      .card.active .card-content {
        max-height: 2500px; /* Valor más alto para móviles con 3 habilidades */
      }
      
      .habilidad {
        flex: 1 0 100%; /* 1 columna en móviles */
      }
    }
  </style>
</head>
<body>
  <div id="particles-js"></div>

  <header>
    <h1>Keiner Mateo Sandoval Barreto</h1>
    <p>Estudiante de Ingeniería de Sistemas | 18 años | UNAB - 5° semestre</p>
  </header>

  <div class="card-container">
    <div class="card visible" id="perfil">
      <div class="card-header">
        <h2><span>👨‍💻</span> Sobre mí</h2>
        <div class="toggle-icon">▼</div>
      </div>
      <div class="card-content">
        <div class="card-content-inner">
          <div class="divider"></div>
          <p>Soy un apasionado por la tecnología y el desarrollo de soluciones digitales. Me destaco por mi capacidad de aprendizaje, trabajo en equipo y curiosidad constante. Me enfoco en el desarrollo web, bases de datos y programación en distintos lenguajes.</p>
        </div>
      </div>
    </div>

    <!-- SECCIÓN DE HABILIDADES -->
    <div class="card visible" id="habilidades">
      <div class="card-header">
        <h2><span>🚀</span> Habilidades</h2>
        <div class="toggle-icon">▼</div>
      </div>
      <div class="card-content">
        <div class="card-content-inner">
          <div class="divider"></div>
          <div class="habilidades-container">
            <div class="habilidad">
              <h3><span>💻</span> Desarrollo Web</h3>
              <p>Creación de sitios y aplicaciones web utilizando HTML, CSS y JavaScript. Experiencia en el desarrollo de interfaces responsivas y modernas, con enfoque en la experiencia de usuario.</p>
            </div>
            
            <div class="habilidad">
              <h3><span>🗃️</span> Bases de Datos</h3>
              <p>Manejo de sistemas de gestión de bases de datos relacionales como MySQL y PostgreSQL. Diseño de esquemas, consultas SQL avanzadas, optimización y administración de bases de datos.</p>
            </div>
            
            <!-- TERCERA HABILIDAD AGREGADA: DESARROLLO MÓVIL ANDROID -->
            <div class="habilidad">
              <h3><span>📱</span> Desarrollo Móvil Android</h3>
              <p>Desarrollo de aplicaciones nativas para Android usando Android Studio, Java y Kotlin. Creación de interfaces de usuario, consumo de APIs REST, y publicación en Google Play Store.</p>
            </div>
            <!-- Más habilidades se pueden agregar aquí -->
          </div>
        </div>
      </div>
    </div>

    <div class="card visible" id="historia">
      <div class="card-header">
        <h2><span>📖</span> Mi Historia</h2>
        <div class="toggle-icon">▼</div>
      </div>
      <div class="card-content">
        <div class="card-content-inner">
          <div class="divider"></div>
          <p>Nací en <strong>Santa Rosa del Sur, Bolívar</strong>. Tengo dos hermanas y actualmente soy foráneo, ya que mis padres aún viven en Santa Rosa. Esta experiencia me ha enseñado a ser independiente y valorar más a mi familia.</p>
        </div>
      </div>
    </div>

    <div class="card visible" id="ninez">
      <div class="card-header">
        <h2><span>🧒</span> Mi Niñez</h2>
        <div class="toggle-icon">▼</div>
      </div>
      <div class="card-content">
        <div class="card-content-inner">
          <div class="divider"></div>
          <p>Crecí en <strong>Santa Rosa del Sur, Bolívar</strong>, rodeado de un ambiente tranquilo y familiar.  
          Desde pequeño aprendí el valor del esfuerzo y el apoyo de mis padres, quienes siempre me motivaron a dar lo mejor de mí.  
          Pasé gran parte de mi niñez compartiendo con mis hermanas, disfrutando de momentos sencillos pero muy significativos que me enseñaron a valorar la unión familiar.</p>
        </div>
      </div>
    </div>

    <div class="card visible" id="adolescencia">
      <div class="card-header">
        <h2><span>🌟</span> Mi Adolescencia</h2>
        <div class="toggle-icon">▼</div>
      </div>
      <div class="card-content">
        <div class="card-content-inner">
          <div class="divider"></div>
          <p>
            Durante mi adolescencia empecé a descubrir con mayor claridad mis pasiones e intereses. 
            Fue una etapa donde crecí rodeado de amistades, experiencias nuevas y aprendizajes que me ayudaron 
            a fortalecer mi carácter. En este tiempo, empecé a interesarme más por la tecnología, 
            la programación y los retos académicos, siempre buscando destacar y superarme en cada meta 
            that me proponía.  
          </p>
        </div>
      </div>
    </div>

    <div class="card visible" id="actualidad">
      <div class="card-header">
        <h2><span>🚀</span> Actualidad</h2>
        <div class="toggle-icon">▼</div>
      </div>
      <div class="card-content">
        <div class="card-content-inner">
          <div class="divider"></div>
          <p>
          Actualmente me dedico a mi formación académica como <strong>estudiante de Ingeniería de Sistemas en la UNAB</strong>.  
          Estoy en 5° semestre y me apasiona todo lo relacionado con la <strong>programación, el desarrollo de software y la tecnología</strong>.  
          Además de mis estudios, invierto tiempo en aprender nuevas herramientas, lenguajes y metodologías que me permitan crecer como profesional y destacar en el campo de la ingeniería.  
          Mi meta es convertirme en un desarrollador integral, capaz de aportar soluciones innovadoras y de alto impacto.
          </p>
        </div>
      </div>
    </div>

    <div class="card visible" id="metas">
      <div class="card-header">
        <h2><span>🎯</span> Metas y Aspiraciones</h2>
        <div class="toggle-icon">▼</div>
      </div>
      <div class="card-content">
        <div class="card-content-inner">
          <div class="divider"></div>
          <p>
          Aspiro a convertirme en un <strong>profesional destacado en el campo de la Ingeniería de Sistemas</strong>, 
          desarrollando proyectos innovadores que generen un impacto positivo en la sociedad.  
          Mis metas incluyen <strong>terminar mi carrera universitaria con excelencia</strong>, 
          fortalecer mis habilidades en el desarrollo de software, la seguridad informática y la gestión de proyectos, 
          además de participar en iniciativas que promuevan la tecnología como herramienta de transformación.  
          A mediano plazo, sueño con trabajar en una empresa reconocida del sector tecnológico o incluso crear mi propio emprendimiento digital, 
          siempre con el objetivo de crecer como persona y aportar al bienestar de mi familia y comunidad.
          </p>
        </div>
      </div>
    </div>

    <div class="card visible" id="experiencia">
      <div class="card-header">
        <h2><span>💼</span>Experiencia Laboral</h2>
        <div class="toggle-icon">▼</div>
      </div>
      <div class="card-content">
        <div class="card-content-inner">
          <div class="divider"></div>
          <p>
            <strong>- Primera experiencia laboral</strong>.<br><strong>- Segunda experiencia laboral</strong>.<br><strong>- Tercera experiencia laboral </strong>.       
          </p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    © 2025 Keiner Mateo Sandoval Barreto. Todos los derechos reservados.
  </footer>

  <script>
    // Partículas animadas
    tsParticles.load("particles-js", {
      fullScreen: { enable: false },
      particles: {
        number: { value: 80 },
        color: { value: "#fbbf24" },
        shape: { type: "circle" },
        opacity: { value: 0.6 },
        size: { value: 3 },
        move: { enable: true, speed: 1 }
      }
    });

    // Funcionalidad del acordeón
    document.querySelectorAll('.card-header').forEach(header => {
      header.addEventListener('click', () => {
        const card = header.parentElement;
        
        // Si la tarjeta ya está activa, la cerramos
        if (card.classList.contains('active')) {
          card.classList.remove('active');
        } else {
          // Cerramos todas las tarjetas primero
          document.querySelectorAll('.card').forEach(otherCard => {
            otherCard.classList.remove('active');
          });
          
          // Abrimos la tarjeta clickeada
          card.classList.add('active');
        }
      });
    });

    // Abrir la primera sección por defecto
    document.addEventListener("DOMContentLoaded", function() {
      document.getElementById('perfil').classList.add('active');
      
      // Forzar un reflow para asegurar que las animaciones funcionen
      document.querySelectorAll('.card').forEach(card => {
        card.style.animation = 'none';
        card.offsetHeight; /* trigger reflow */
        card.style.animation = null; 
      });
    });
  </script>
</body>
</html>