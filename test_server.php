<?php
// Simple test server to demonstrate the landing page
// This allows viewing the page without full Laravel installation

// Set content type
header('Content-Type: text/html; charset=utf-8');

// Include the landing page content
$viewPath = __DIR__ . '/resources/views/landing.blade.php';
$layoutPath = __DIR__ . '/resources/views/layouts/app.blade.php';

if (file_exists($viewPath) && file_exists($layoutPath)) {
    // Simple blade-like rendering
    $content = file_get_contents($viewPath);
    $layout = file_get_contents($layoutPath);
    
    // Replace basic blade directives
    $content = str_replace(['@extends(\'layouts.app\')', '@section(\'title\', \'IT WEEK 2025 - Innovating Tomorrow, Today\')', '@section(\'content\')', '@endsection'], '', $content);
    $layout = str_replace('@yield(\'title\', \'IT WEEK 2025\')', 'IT WEEK 2025 - Innovating Tomorrow, Today', $layout);
    $layout = str_replace('@yield(\'content\')', $content, $layout);
    
    echo $layout;
} else {
    echo '<h1>Error: View files not found</h1>';
    echo '<p>Please ensure the view files are in the correct locations.</p>';
}
?>