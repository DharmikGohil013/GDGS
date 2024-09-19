
    // Get elements
    const signinBtn = document.getElementById('signin-btn');
    const signupBtn = document.getElementById('signup-btn');
    const overlay = document.getElementById('overlay');
    const searchBar = document.querySelector('.search-bar');

    // Function to show overlay and only display search bar
    function showOverlay() {
        overlay.classList.add('active');
        searchBar.style.display = 'flex';  // Show the search bar
    }

    // Function to hide overlay and search bar
    function hideOverlay() {
        overlay.classList.remove('active');
        searchBar.style.display = 'none';  // Hide the search bar
    }

    // Event listeners for sign in and sign up buttons
    signinBtn.addEventListener('click', showOverlay);
    signupBtn.addEventListener('click', showOverlay);

    // Close overlay on click outside the search bar
    overlay.addEventListener('click', hideOverlay);

    // Initially hide the search bar
    searchBar.style.display = 'none';
    

