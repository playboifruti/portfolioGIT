var typed = new Typed(".typing", {
    strings: ['&lt;<span id="yellow">code</span>&gt; I build automatic tools &lt;/<span id="yellow">code</span>&gt;'],
    typeSpeed: 40,
    backSpeed: 10,
    loop: true,
    cursorChar: '', 
    showCursor: false,
  });


  const scrollLeftButton = document.getElementById('scroll-left');
  const scrollRightButton = document.getElementById('scroll-right');
  const reviewsContainer = document.querySelector('.reviews-container');
  const reviews = document.querySelectorAll('.reviews');
  let currentScrollIndex = 0;
  
  scrollLeftButton.addEventListener('click', () => {
    if (currentScrollIndex > 0) {
      currentScrollIndex--;
      const scrollAmount = reviews[currentScrollIndex].offsetLeft - reviewsContainer.scrollLeft;
      reviewsContainer.scrollTo({
        left: reviewsContainer.scrollLeft + scrollAmount,
        behavior: 'smooth'
      });
    }
  });
  
  scrollRightButton.addEventListener('click', () => {
    if (currentScrollIndex < reviews.length - 1) {
      currentScrollIndex++;
      const scrollAmount = reviews[currentScrollIndex].offsetLeft - reviewsContainer.scrollLeft;
      reviewsContainer.scrollTo({
        left: reviewsContainer.scrollLeft + scrollAmount,
        behavior: 'smooth'
      });
    }
  });
  
  