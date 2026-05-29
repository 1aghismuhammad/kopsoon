@php
    $seoBaseUrl = 'https://kopsoon.aksivastudio.my.id';
    $seoSiteName = 'KOPSOON';
    $seoTitle = $title ?? 'KOPSOON | Kopi Santan Instan Khas Blora';
    $seoDescription = $description ?? 'KOPSOON adalah kopi santan instan khas Blora dengan rasa creamy Nusantara yang praktis diseduh panas atau dingin.';
    $seoCanonical = $canonical ?? $seoBaseUrl . '/';
    $seoImagePath = $image ?? 'images/hero.webp';
    $seoImage = str_starts_with($seoImagePath, 'http') ? $seoImagePath : $seoBaseUrl . '/' . ltrim($seoImagePath, '/');
    $seoType = $type ?? 'website';
    $seoLocale = 'id_ID';
    $seoDefaultSchemas = [
        [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            '@id' => $seoBaseUrl . '/#organization',
            'name' => 'KOPSOON',
            'url' => $seoBaseUrl . '/',
            'logo' => $seoBaseUrl . '/images/logo.webp',
            'image' => $seoBaseUrl . '/images/hero.webp',
            'description' => 'KOPSOON adalah brand kopi santan instan khas Blora yang menghadirkan rasa creamy Nusantara dalam kemasan praktis.',
            'sameAs' => [
                'https://instagram.com/KOPSOON',
                'https://tiktok.com/@KOPSOON',
            ],
            'contactPoint' => [
                [
                    '@type' => 'ContactPoint',
                    'telephone' => '+6289912314371',
                    'contactType' => 'customer service',
                    'areaServed' => 'ID',
                    'availableLanguage' => ['Indonesian'],
                ],
            ],
        ],
    ];
    $seoSchemas = array_merge($seoDefaultSchemas, $schemas ?? []);
@endphp
<title>{{ $seoTitle }}</title>
<meta name="description" content="{{ $seoDescription }}">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
<meta name="author" content="KOPSOON">
<meta name="theme-color" content="#4A2B19">
<link rel="canonical" href="{{ $seoCanonical }}">

<meta property="og:locale" content="{{ $seoLocale }}">
<meta property="og:type" content="{{ $seoType }}">
<meta property="og:site_name" content="{{ $seoSiteName }}">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDescription }}">
<meta property="og:url" content="{{ $seoCanonical }}">
<meta property="og:image" content="{{ $seoImage }}">
<meta property="og:image:alt" content="{{ $seoTitle }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDescription }}">
<meta name="twitter:image" content="{{ $seoImage }}">

@foreach ($seoSchemas as $seoSchema)
<script type="application/ld+json">
{!! json_encode($seoSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endforeach
