<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($config['app']['name']) ?> - <?= e($config['app']['tagline']) ?></title>
    
    <!-- Meta SEO -->
    <meta name="description" content="<?= e($config['app']['subtagline']) ?>">
    <meta name="keywords" content="bengkel motor terdekat, servis motor matic, ganti oli, servis cvt, tune up motor, bengkel injeksi, garasi prima motor">
    <meta name="author" content="<?= e($config['app']['name']) ?>">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($config['app']['name']) ?> - Bengkel Servis Motor Terpercaya">
    <meta property="og:description" content="<?= e($config['app']['subtagline']) ?>">
    
    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%232563EB' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><path d='M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z'/></svg>" type="image/svg+xml">
    
    <!-- Schema.org Structured Data (LocalBusiness / AutoRepair SEO) -->
    <script type="application/ld+json">
<?= getSchemaJsonLd($config) ?>
    </script>
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#EFF6FF',
                            100: '#DBEAFE',
                            200: '#BFDBFE',
                            500: '#3B82F6',
                            600: '#2563EB',
                            700: '#1D4ED8',
                            800: '#1E40AF',
                            900: '#1E3A8A',
                            950: '#0F172A',
                        },
                        racing: {
                            red: '#EF4444',
                            redDark: '#DC2626',
                            yellow: '#F59E0B',
                        }
                    },
                    boxShadow: {
                        'soft': '0 4px 20px -2px rgba(0, 0, 0, 0.05), 0 2px 6px -1px rgba(0, 0, 0, 0.03)',
                        'card': '0 10px 30px -5px rgba(15, 23, 42, 0.06), 0 4px 10px -2px rgba(15, 23, 42, 0.03)',
                        'glow': '0 0 25px -5px rgba(37, 99, 235, 0.35)',
                    }
                }
            }
        }
    </script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-brand-600 selection:text-white flex flex-col min-h-screen">
