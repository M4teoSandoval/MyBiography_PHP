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
      transform: translateY(-5px);
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
    <p>Estudiante de Ingeniería de Sistemas | 18 años | UNAB - 4° semestre</p>
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
    };

    window.addEventListener('scroll', chequearCards);
    document.addEventListener("DOMContentLoaded", chequearCards);
  </script>
</body>
</html>
