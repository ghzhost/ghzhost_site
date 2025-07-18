function preloader(immune, background, color) {
  $("body").prepend('<div class="preloader"><span class="loading-bar"></span><i class="radial-loader"></i></div>');
  $("body").prepend('<div class="preloader2"><div class="image-container"><img src="//ghzhost.com/logo.png" alt="Imagem"></div></div>');

  if (immune == true) {
    $("body > div.preloader").addClass('immune');
  }

  if (background == 'white') {
    $("body > div.preloader").addClass('white');
  }
  
  else if (background == 'black') {
    $("body > div.preloader").addClass('black');
  }

  if (color == 'red') {
    $("body > div.preloader span.loading-bar").addClass('red-colored');
    $("body > div.preloader i.radial-loader").addClass('red-colored');
  } else if (color == 'blue') {
    $("body > div.preloader span.loading-bar").addClass('blue-colored');
    $("body > div.preloader i.radial-loader").addClass('blue-colored');
  } else if (color == 'green') {
    $("body > div.preloader span.loading-bar").addClass('green-colored');
    $("body > div.preloader i.radial-loader").addClass('green-colored');
  } else if (color == 'yellow') {
    $("body > div.preloader span.loading-bar").addClass('yellow-colored');
    $("body > div.preloader i.radial-loader").addClass('yellow-colored');
  }
  $(window).load(function () {
    const preloaderElement = document.querySelector('.preloader2');
    const imageContainerElement = document.querySelector('.image-container');
    const imageElement = document.querySelector('.image-container img');
    setTimeout(function () {
      $('.preloader').fadeOut(1000);
      imageContainerElement.classList.add('loaded');
      imageElement.style.opacity = '0';
      // Load the colored image gradually
      imageElement.addEventListener('load', function () {
        imageElement.style.opacity = '1';
      });
    }, 1000);
    setTimeout(function () {
      $('.preloader').remove();
      preloaderElement.classList.add('hidden');
    }, 2000);
  })
};

preloader(true, 'black', 'blue');



