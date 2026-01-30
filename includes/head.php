<!DOCTYPE html>
<html lang="pt-MZ" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . " | " . SITE_NAME : SITE_NAME; ?></title>
    <meta name="description" content="Especializados em consultoria Lean Six Sigma, formação e otimização de processos para empresas em Moçambique.">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'lean-blue': '#007BFF',
                        'lean-green': '#28A745',
                        'lean-orange': '#FD7E14',
                        'lean-red': '#DC3545',
                        'lean-cyan': '#17A2B8',
                    }
                }
            }
        }
    </script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/style.css">
</head>
<body class="bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 transition-colors duration-300">
