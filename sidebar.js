document.addEventListener("DOMContentLoaded", function() {
    const navButton = document.querySelector('.nav_button');
    const sidebar = document.querySelector('.sidebar');

    // Toggle sidebar when the navigation button is clicked
    navButton.addEventListener('click', function(event) {
        event.stopPropagation(); // Prevents the event from bubbling up to the document
        sidebar.classList.toggle('active');
    });

    // Hide sidebar when clicked outside of it
    document.addEventListener('click', function(event) {
        const target = event.target;
        const isSidebar = target.closest('.sidebar');
        const isNavButton = target.closest('.nav_button');

        if (!isSidebar && !isNavButton) {
            sidebar.classList.remove('active');
        }
    });
});