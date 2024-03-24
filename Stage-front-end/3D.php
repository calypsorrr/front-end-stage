<?php include 'includes/header.php'; ?>
<body class="no-scrollbars">
<div class="topbar">
    <div class="topbar-title">3D</div>
</div>
  <script type="importmap">
        {
            "imports": {
                "three": "https://unpkg.com/three@0.148.0/build/three.module.js",
                "three/addons/": "https://unpkg.com/three@0.148.0/examples/jsm/"
            }
        }
      </script>
  <script type="module" src="js/main.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Add event listener for the "Add Anchor" button
      const addAnchorButton = document.getElementById('dashboard-button');
      addAnchorButton.addEventListener('click', () => {
        // Redirect to the dashboard page
        window.location.href = 'dashboard.php';
      });
          // Add event listener for the "Toggle Move" button
      const toggleMoveButton = document.getElementById('toggle-move-button');
      toggleMoveButton.addEventListener('click', () => {
      // Toggle the mouse move functionality by calling the toggleMouseMove function
      if (typeof toggleMouseMove === 'function') {
        toggleMouseMove();
      }
      });
    });
  </script>
</body>