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
      margin-bottom: 2rem;
      padding: 2rem 1rem;
    }

    header h1 {
      font-size: 3rem;
      color: #fbbf24;
      text-shadow: 0 2px 8px rgba(0,0,0,0.5);
    }

    header p {
      font-size: 1.2rem;
      margin-top: 0.5rem;
      color: #e5e7eb;
    }

    .card {
      background: linear-gradient(145deg, #1e40afcc, #1e3a8acc);
      padding: 2rem;
      border-radius: 1.2rem;
      box-shadow: 0 10px 25px rgba(0,0,0,0.3);
      max-width: 900px;
      margin: 3rem auto;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      
      transform: translateY(50px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .card:hover {   
      box-shadow: 0 15px 35px rgba(0,0,0,0.4);
    }

    .card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .section {
      margin-top: 1.5rem;
    }

    .section h2 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
      color: #facc15;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .section h2 span {
      font-size: 1.8rem;
    }

    .section p {
      color: #f9fafb;
      font-size: 1.05rem;
      line-height: 1.6;
    }

    .divider {
      height: 3px;
      width: 80px;
      background: #facc15;
      margin: 1rem auto 2rem;
      border-radius: 5px;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scaleX(1); opacity: 0.7; }
      50% { transform: scaleX(1.5); opacity: 1; }
    }

    footer {
      text-align: center;
      margin-top: 4rem;
      font-size: 0.9rem;
      color: #9ca3af;
    }
  </style>
</head>
<body>
  <div id="particles-js"></div>

  <header>
    <h1>Keiner Mateo Sandoval Barreto</h1>
    <p>Estudiante de Ingeniería de Sistemas | 18 años | UNAB - 5° semestre</p>
  </header>

  <div class="card" id="perfil">
    <div class="section">
      <h2><span>👨‍💻</span> Sobre mí</h2>
      <div class="divider"></div>
      <p>Soy un apasionado por la tecnología y el desarrollo de soluciones digitales. Me destaco por mi capacidad de aprendizaje, trabajo en equipo y curiosidad constante. Me enfoco en el desarrollo web, bases de datos y programación en distintos lenguajes.</p>
    </div>
  </div>

  <div class="card" id="historia">
    <div class="section">
      <h2><span>📖</span> Mi Historia</h2>
      <div class="divider"></div>
      <p>Nací en <strong>Santa Rosa del Sur, Bolívar</strong>. Tengo dos hermanas y actualmente soy foráneo, ya que mis padres aún viven en Santa Rosa. Esta experiencia me ha enseñado a ser independiente y valorar más a mi familia.</p>
    </div>
  </div>

  <div class="card" id="ninez">
    <div class="section">
        <h2><span>🧒</span> Mi Niñez</h2>
        <div class="divider"></div>
        <p>Crecí en <strong>Santa Rosa del Sur, Bolívar</strong>, rodeado de un ambiente tranquilo y familiar.  
        Desde pequeño aprendí el valor del esfuerzo y el apoyo de mis padres, quienes siempre me motivaron a dar lo mejor de mí.  
        Pasé gran parte de mi niñez compartiendo con mis hermanas, disfrutando de momentos sencillos pero muy significativos que me enseñaron a valorar la unión familiar.</p>
    </div>
  </div>

    <div class="card" id="adolescencia">
        <div class="section">
        <h2><span>🌟</span> Mi Adolescencia</h2>
        <div class="divider"></div>
        <p>
            Durante mi adolescencia empecé a descubrir con mayor claridad mis pasiones e intereses. 
            Fue una etapa donde crecí rodeado de amistades, experiencias nuevas y aprendizajes que me ayudaron 
            a fortalecer mi carácter. En este tiempo, empecé a interesarme más por la tecnología, 
            la programación y los retos académicos, siempre buscando destacar y superarme en cada meta 
            que me proponía.  
        </p>
        </div>
  </div>

  <div class="card" id="actualidad">
    <div class="section">
        <h2><span>🚀</span> Actualidad</h2>
        <div class="divider"></div>
        <p>
        Actualmente me dedico a mi formación académica como <strong>estudiante de Ingeniería de Sistemas en la UNAB</strong>.  
        Estoy en 5° semestre y me apasiona todo lo relacionado con la <strong>programación, el desarrollo de software y la tecnología</strong>.  
        Además de mis estudios, invierto tiempo en aprender nuevas herramientas, lenguajes y metodologías que me permitan crecer como profesional y destacar en el campo de la ingeniería.  
        Mi meta es convertirme en un desarrollador integral, capaz de aportar soluciones innovadoras y de alto impacto.
        </p>
    </div>
  </div>


  <div class="card" id="metas">
    <div class="section">
        <h2><span>🎯</span> Metas y Aspiraciones</h2>
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

    // Animación de entrada al hacer scroll
    const mostrarAnimado = (id) => {
      const card = document.getElementById(id);
      if (!card) return;

      const cardTop = card.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (cardTop < windowHeight - 50) { 
        card.classList.add('visible');
      }
    };

    const chequearCards = () => {
      mostrarAnimado('perfil');
      mostrarAnimado('historia');
      mostrarAnimado('ninez');
      mostrarAnimado('adolescencia');
      mostrarAnimado('actualidad');
      mostrarAnimado('metas');
    };

    window.addEventListener('scroll', chequearCards);
    document.addEventListener("DOMContentLoaded", chequearCards);
  </script>
</body>
</html>
