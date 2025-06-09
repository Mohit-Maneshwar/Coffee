
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      question.addEventListener('click', () => {
        const isOpen = item.classList.contains('active');

        // Close all items
        faqItems.forEach(i => {
          i.classList.remove('active');
          i.querySelector('.icon').textContent = '+';
        });

        // Open clicked one
        if (!isOpen) {
          item.classList.add('active');
          item.querySelector('.icon').textContent = '−';
        }
      });
    });