<?php
header("Content-Type: application/xml; charset=utf-8");

$base_url = "https://www.rankmator.com/";

// Files to exclude from the sitemap
$exclude_files = [
    'header.php', 
    'footer.php', 
    'links.php', 
    'mail.php', 
    'thankyou.php',
    'sitemap.php'
];

$php_files = [];
$dir = __DIR__;

// Scan the root directory only
$files = scandir($dir);
foreach ($files as $file) {
    if ($file === '.' || $file === '..') {
        continue;
    }
    
    $path = $dir . '/' . $file;
    if (!is_dir($path)) {
        if (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            if (!in_array($file, $exclude_files)) {
                $php_files[] = $path;
            }
        }
    }
}

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($php_files as $file) {
    // Get file modification time
    $lastmod = date('c', filemtime($file));
    
    // Create clean URL
    $filename = basename($file);
    $url_path = preg_replace('/\.php$/', '', $filename);
    
    // Priority logic
    $priority = '0.80';
    if ($url_path === 'index') {
        $url = $base_url;
        $priority = '1.00';
    } else {
        $url = $base_url . $url_path;
    }
    
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($url) . "</loc>\n";
    echo "    <lastmod>" . $lastmod . "</lastmod>\n";
    echo "    <priority>" . $priority . "</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';
?>
