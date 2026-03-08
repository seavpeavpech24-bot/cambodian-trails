<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - ' : ''; ?>Cambodian Trails</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">
    <?php if(isset($additionalCSS)) { foreach($additionalCSS as $css) { echo '<link rel="stylesheet" href="' . $css . '">'; } } ?>
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-content">
            <div class="logo">
                <h1>Cambodian Trails</h1>
            </div>
            <nav class="nav-menu">
                <a href="index.php" class="nav-item <?php echo ($currentPage == 'home') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="label">Home</span>
                </a>
                <a href="destinations.php" class="nav-item <?php echo ($currentPage == 'destinations') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                    <span class="label">Destinations</span>
                </a>
                <a href="travel-map.php" class="nav-item <?php echo ($currentPage == 'travel-map') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-map"></i></span>
                    <span class="label">Travel Map</span>
                </a>
                <a href="activities.php" class="nav-item <?php echo ($currentPage == 'activities') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-hiking"></i></span>
                    <span class="label">Activities</span>
                </a>
                <a href="travel-guides.php" class="nav-item <?php echo ($currentPage == 'travel-guides') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-book-open"></i></span>
                    <span class="label">Travel Guides</span>
                </a>
                <a href="blog.php" class="nav-item <?php echo ($currentPage == 'blog') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-blog"></i></span>
                    <span class="label">Blog</span>
                </a>
                <a href="photos.php" class="nav-item <?php echo ($currentPage == 'photos') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-camera"></i></span>
                    <span class="label">Photos</span>
                </a>
                <a href="videos.php" class="nav-item <?php echo ($currentPage == 'videos') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-video"></i></span>
                    <span class="label">Videos</span>
                </a>
                <a href="tools.php" class="nav-item <?php echo ($currentPage == 'tools') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-tools"></i></span>
                    <span class="label">Tools</span>
                </a>
                <a href="search.php" class="nav-item <?php echo ($currentPage == 'search') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-search"></i></span>
                    <span class="label">Search</span>
                </a>
                <a href="saved.php" class="nav-item <?php echo ($currentPage == 'saved') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-bookmark"></i></span>
                    <span class="label">Saved</span>
                </a>
                <a href="notifications.php" class="nav-item <?php echo ($currentPage == 'notifications') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-bell"></i></span>
                    <span class="label">Notifications</span>
                    <span class="badge">3</span>
                </a>
                <a href="profile.php" class="nav-item <?php echo ($currentPage == 'profile') ? 'active' : ''; ?>">
                    <span class="icon"><i class="fas fa-user"></i></span>
                    <span class="label">Profile</span>
                </a>
            </nav>
            <div class="sidebar-footer">
                <button class="theme-toggle" id="themeToggle">
                    <span class="icon"><i class="fas fa-moon"></i></span>
                    <span class="label">Dark Mode</span>
                </button>
                <a href="login.php" class="nav-item logout-btn">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="label">Logout</span>
                </a>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
