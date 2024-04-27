window.onload = function() {

  // Inicializar Swiper
  const progressCircle = document.querySelector(".autoplay-progress svg");
  const progressContent = document.querySelector(".autoplay-progress span");
  const swiper = new Swiper('.swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      autoplay: {
          delay: 3000,
          disableOnInteraction: false
      },
      pagination: {
          el: ".swiper-pagination",
          clickable: true,
      },
      on: {
          autoplayTimeLeft(s, time, progress) {
              progressCircle.style.setProperty("--progress", 1 - progress);
              progressContent.textContent = `${Math.ceil(time / 1000)}s`;
          }
      }
  });

  let cicloSelect = document.getElementById('ciclo');

  let categoriaSelect = document.getElementById('categoria');
  console.log(categoriaSelect);
  
  cicloSelect.addEventListener('change', function() {
      let cicloId = this.value;
      if (cicloId !== '') {
          categoriaSelect.disabled = false;
          categoriaSelect.options[0].selected = true;
          for (let i = 0; i < categoriaSelect.options.length; i++) {
            let categoria = categoriaSelect.options[i];
            console.log(cicloSelect.options[cicloSelect.selectedIndex].className);
            if(categoria.className == cicloSelect.options[cicloSelect.selectedIndex].className) {
              categoria.style.display = 'block';
            } else {
              categoria.style.display = 'none';
            }            
          }
      } else {
          categoriaSelect.disabled = true;
          categoriaSelect.options[0].selected = true;
      }
  });
}

jQuery(document).ready(function($) {

  $('.js-example-basic-single').select2({
    theme: 'classic' // También puedes probar con 'default'
  });
});