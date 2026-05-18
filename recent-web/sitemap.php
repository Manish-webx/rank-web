<?php
// Set the content type to XML
header("Content-Type: text/xml");

// Define your base URL (Change this to your actual production domain)
$base_url = "https://rankmator.com/"; 

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

// Function to scan directory and generate sitemap URLs
function generate_sitemap($dir, $base_url) {
    // Array of files/folders to exclude
    $excludes = array(
        '.', '..', '.git', 'css', 'js', 'img', 'images', 'fonts', 'vendor',
        'sitemap.php', 'sitemap.xml', 'mail.php', 'header', 'footer', 
        'header-link.php', 'footer-link.php'
    );
    
    // Array of extensions we want in our sitemap
    $allowed_extensions = array('php', 'html');

    $files = scandir($dir);

    foreach ($files as $file) {
        $path = $dir . '/' . $file;

        // Skip excluded files/folders and hidden files
        if (in_array($file, $excludes) || substr($file, 0, 1) === '.' || strpos($file, 'fix') !== false || strpos($file, 'test') !== false || strpos($file, 'add_border') !== false) {
            continue;
        }

        if (is_dir($path)) {
            // Uncomment the next line if you want to scan subdirectories too
            // generate_sitemap($path, $base_url . $file . '/');
            continue; // Currently ignoring subfolders based on your flat structure
        } else {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            
            if (in_array($ext, $allowed_extensions)) {
                
                // Get the last modification time
                $lastmod = date('c', filemtime($path));
                
                // Format the URL (remove .php or .html extension for clean URLs if you use them)
                // Since we made extensionless URLs earlier, let's strip the extensions
                $filename = basename($file, '.' . $ext);
                
                // If it's index.php, map it to the root priority
                if ($filename === 'index') {
                    $url = $base_url;
                    $priority = '1.0';
                } else {
                    $url = $base_url . $filename;
                    $priority = '0.8';
                }

                echo "  <url>\n";
                echo "    <loc>" . htmlspecialchars($url) . "</loc>\n";
                echo "    <lastmod>" . $lastmod . "</lastmod>\n";
                echo "    <changefreq>weekly</changefreq>\n";
                echo "    <priority>" . $priority . "</priority>\n";
                echo "  </url>\n";
            }
        }
    }
}

// Start scanning from the current directory
generate_sitemap(__DIR__, $base_url);

echo '</urlset>';
?>
