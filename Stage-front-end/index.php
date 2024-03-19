<?php include 'includes/header.php'; ?>
    <div class="topbar">
        <div class="topbar-title">Title</div>
    </div>
    <div class="dashboard"><a href="index.php" class="current-page">Dashboard</a></div>
    <?php
        $breadcrumbs = array();

        $breadcrumbs[] = '<a href="index.php" class="current-page">Home</a>';

        $currentPage = basename($_SERVER['PHP_SELF']);

        if ($currentPage !== 'index.php') {
            $breadcrumbs[] = '<a href="' . $currentPage . '" class="current-page">' . ucfirst(str_replace('.php', '', $currentPage)) . '</a>';
        }

        echo '<div class="breadcrumbs">' . implode(' > ', $breadcrumbs) . '</div>';
    ?>
    <div class="additional-info">
        <div class="title-additional-info">
            <div class="title-additional-info-bar">
                <span class="title-word">Datetime</span>
                <span class="title-word">Node ID</span>
                <span class="title-word">Device Type</span>
                <span class="title-word">Sync</span>
            </div>
        </div>
        <div class="section-additional-info">
            <div class="section-additional-info-bar">
                <span class="section-word">22/03/2024</span>
                <span class="section-word">1</span>
                <span class="section-word">Slave</span>
                <span class="section-word">Bad</span>
                <a href="details.php" class="action-link"><i class="fas fa-eye"></i></a>
                <a href="#" class="action-link"><i class="fas fa-trash-alt"></i></a>
            </div>
        </div>
        <div class="section-additional-info">
            <div class="section-additional-info-bar">
                <span class="section-word">22/02/2024</span>
                <span class="section-word">2</span>
                <span class="section-word">gmaster</span>
                <span class="section-word">Good</span>
                <a href="details.php" class="action-link"><i class="fas fa-eye"></i></a>
                <a href="#" class="action-link"><i class="fas fa-trash-alt"></i></a>
            </div>
        </div>
    </div>    
</body>
</html>
