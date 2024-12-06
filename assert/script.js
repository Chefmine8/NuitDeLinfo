document.addEventListener("DOMContentLoaded", () => {
    const hoverItems = document.querySelectorAll('.hover-item');
    const modals = document.querySelectorAll('.modal');

    hoverItems.forEach(item => {
        item.addEventListener('click', () => {
            const modalId = item.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            modal.classList.add('active');
        });
    });

    
    modals.forEach(modal => {
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.remove('active');
            }
        });
    });
});
