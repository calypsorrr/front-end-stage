document.addEventListener("DOMContentLoaded", function() {
    // Get the dashboard link element
    const dashboardLink = document.querySelector('.dashboard');

    // Get the current page URL
    const currentPageURL = window.location.href;

    // Check if the current page URL contains "index.php"
    if (currentPageURL.includes("index.php")) {
        // If it's the index page, set the color to #666775
        dashboardLink.style.color = '#666775';
    } else {
        // Otherwise, set the color to #404152
        dashboardLink.style.color = '#404152';
    }
});
