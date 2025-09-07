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
        background: #0f172a;
    }


    header {
      text-align: center;
      margin-bottom: 2rem;
    }

    header h1 {
      font-size: 2.5rem;
      color: #3b82f6;
    }

    header p {
      font-size: 1.2rem;
      margin-top: 0.5rem;
      color:white;
    }

    .card {
      background-color: #1e40afcc;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      max-width: 900px;
      margin: 0 auto;
      transition: transform 0.3s ease;
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .card.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .section {
      margin-top: 1.5rem;
    }

    .section p{
        color: white;
    }

    .section ul{
        color: white;
    }

    .section h2 {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
      color: #fbbf24;
    }

    ul {
      list-style: none;
      padding-left: 1rem;
    }

    ul li::before {
      content: "✔️ ";
      color: #10b981;
    }

    footer {
      text-align: center;
      margin-top: 3rem;
      font-size: 0.9rem;
      color: #9ca3af;
    }

    .btn-contacto {
      background-color: #10b981;
      color: white;
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: 9999px;
      cursor: pointer;
      margin: 0.5rem 0.5rem 0 0;
      font-weight: bold;
      transition: background-color 0.3s ease, transform 0.2s ease;
      display: inline-block;
      text-decoration: none;
    }

    .btn-contacto:hover {
      background-color: #059669;
      transform: scale(1.05);
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
      <h2>Sobre mí</h2>
      <p>Soy un apasionado por la tecnología y el desarrollo de soluciones digitales. Me destaco por mi capacidad de aprendizaje, trabajo en equipo y curiosidad constante. Me enfoco en el desarrollo web, bases de datos y programación en distintos lenguajes.</p>
    </div>

 

  <footer>
    © 2025 Keiner Mateo Sandoval Barreto. Todos los derechos reservados.
  </footer>

  <script>
    // Partículas animadas
    tsParticles.load("particles-js", {
      fullScreen: { enable: false },
      particles: {
        number: { value: 60 },
        color: { value: "#3b82f6" },
        shape: { type: "circle" },
        opacity: { value: 0.5 },
        size: { value: 3 },
        move: { enable: true, speed: 1 }
      },
      background: { color: "#0f172a" }
    });

    // Animación de entrada
    window.addEventListener('scroll', () => {
      const card = document.getElementById('perfil');
      const cardTop = card.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (cardTop < windowHeight - 100) {
        card.classList.add('visible');
      }
    });

    document.addEventListener("DOMContentLoaded", () => {
      const card = document.getElementById('perfil');
      const cardTop = card.getBoundingClientRect().top;
      if (cardTop < window.innerHeight - 100) {
        card.classList.add('visible');
      }
    });
  </script>
</body>
</html>
