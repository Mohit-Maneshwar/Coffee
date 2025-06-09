  const cards = document.querySelectorAll('.card');

  cards.forEach(card => {
    card.addEventListener('click', () => {
      const title = card.getAttribute('data-title');
      const image = card.getAttribute('data-image');

      // Encode and pass to next page
      const url = `details.html?title=${encodeURIComponent(title)}&image=${encodeURIComponent(image)}`;
      window.location.href = url;
    });
  });