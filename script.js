// Configuração das partículas
particlesJS("container", {
  particles: {
    number: {
      value: 300,
    },
    line_linked: {
      color: "#0099c9", // Cor das ligações
      opacity: 100,
    },
    size: {
      value: 0, // Tamanho das partículas (0 para remover as bolas)
    },
  },
  interactivity: {
    events: {
      onhover: {
        enable: false,
        mode: "repulse",
      },
    },
  },
});

// Configuração do countdown
var countdownDate = new Date("July 22, 2024 14:00:00").getTime();
var countdown = document.getElementById("countdown");

var x = setInterval(function () {
  var now = new Date(
    new Date()
      .toLocaleString("en-US", { timeZone: "America/Sao_Paulo" })
      .toString()
  ).getTime();
  var distance = countdownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  countdown.style.color = "#00ff0a";
  countdown.innerHTML = days + "D " + hours + "H " + minutes + "M ";

  if (distance < 0) {
    clearInterval(x);
    executeFireworks();
    countdown.style.color = "#8bc34a";
    countdown.innerHTML = "Aguardando lançamento!";
    var checkStatus = setInterval(function () {
      fetch(`${window.location.href}/index.html`, { mode: 'no-cors', cache: 'no-cache' })
        .then(response => {
          if (response.ok) {
            console.log("Verificação realizada, resposta bem-sucedida.");
          } else {
            clearInterval(checkStatus);
            countdown.style.color = "#4BB543";
            countdown.innerHTML = "Lançamento Executado!";
            window.location.href = `${window.location.origin}/?launch=true`;
          }
        })
        .catch(error => {
          console.error('Erro ao buscar status:', error);
        });
    }, 5000);
  }
}, 1000);

// Desabilitar arraste e soltar da bandeira
document.getElementById("flag").ondragstart = function () {
  return false;
};



//Preloader
window.addEventListener('load', function () {
  const preloaderElement = document.querySelector('.preloader');
  const imageContainerElement = document.querySelector('.image-container');
  const imageElement = document.querySelector('.image-container img');

  preloaderElement.classList.add('hidden');
  imageContainerElement.classList.add('loaded');
  imageElement.style.opacity = '0';

  // Load the colored image gradually
  imageElement.addEventListener('load', function () {
    imageElement.style.opacity = '1';
  });
});





function executeFireworks() {
  // Your existing function logic
  console.log('Function Fireworks working');

  // Add the script
  let script = document.createElement('script');
  script.src = 'assets/js/fireworks.js';
  script.id = 'fireworksScript';
  document.body.appendChild(script);

  // Add the CSS
  let link = document.createElement('link');
  link.rel = 'stylesheet';
  link.href = 'assets/css/fireworks.css';
  link.id = 'fireworksCSS';
  document.head.appendChild(link);

  // Add the canvas
  let canvas = document.createElement('canvas');
  canvas.id = 'canvasfireworks';
  document.body.appendChild(canvas);

  // Wait for the script to load before starting the fireworks
  script.onload = () => {
      onLoad();

      // Stop the fireworks and remove elements after 30 seconds
      // setTimeout(() => {
      //     stopFireworks();
      //     removeFireworksElements();
      // }, 30000);
  };
}

function removeFireworksElements() {
  // Remove the script
  let script = document.getElementById('fireworksScript');
  if (script) {
      script.remove();
  }

  // Remove the CSS link
  let link = document.getElementById('fireworksCSS');
  if (link) {
      link.remove();
  }

  // Remove the canvas
  let canvas = document.getElementById('canvasfireworks');
  if (canvas) {
      canvas.remove();
  }
}