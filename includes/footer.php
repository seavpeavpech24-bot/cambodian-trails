    </main>

    <!-- Mobile Bottom Navigation -->
    <nav class="mobile-nav">
        <a href="index.php" class="mobile-nav-item <?php echo ($currentPage == 'home') ? 'active' : ''; ?>">
            <span class="icon"><i class="fas fa-home"></i></span>
        </a>
        <a href="destinations.php" class="mobile-nav-item <?php echo ($currentPage == 'destinations') ? 'active' : ''; ?>">
            <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
        </a>
        <a href="tools.php" class="mobile-nav-item <?php echo ($currentPage == 'tools') ? 'active' : ''; ?>">
            <span class="icon"><i class="fas fa-tools"></i></span>
        </a>
        <a href="search.php" class="mobile-nav-item <?php echo ($currentPage == 'search') ? 'active' : ''; ?>">
            <span class="icon"><i class="fas fa-search"></i></span>
        </a>
        <a href="profile.php" class="mobile-nav-item <?php echo ($currentPage == 'profile') ? 'active' : ''; ?>">
            <span class="icon"><i class="fas fa-user"></i></span>
        </a>
    </nav>

    <!-- JavaScript -->
    <script src="js/app.js"></script>
    <?php if(isset($additionalJS)) { foreach($additionalJS as $js) { echo '<script src="' . $js . '"></script>'; } } ?>
</body>
</html>
