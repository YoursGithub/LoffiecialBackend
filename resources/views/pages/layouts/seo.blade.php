@php

    $abUrl = request()->url();

    $phUrl = url('/images/Lofficiel%20Peru.png');

    $desc =
        'Lofficiel is a stylish destination for original Fashion, Beauty, Culture and Entertainment news. Check us out';

    $titleImg = url('/images/logo/logo-sq.png');

@endphp

<meta name="description" content="{{ isset($post) ? $post->description : $desc }}">
<meta name="keywords"
    content="{{ isset($post) ? $post->keywords : 'fashion, beauty, celebrity news, culture, store guide' }}">

<!-- Open Graph Meta -->
<meta property="og:url" content="{{ $abUrl }}">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="article:author" content="">
<meta property="article:publisher" content="">
<meta property="article:section" content="Cover Feature">
<meta property="og:title" content="{{ isset($post) ? $post->title : $desc }}">
<meta property="og:description" content="{{ isset($post) ? $post->description : $desc }}">
<meta property="og:image" content="{{ isset($post) ? url($post->thumbnail) : $phUrl }}">
<meta property="og:image:secure_url" content="{{ isset($post) ? url($post->thumbnail) : $phUrl }}">
<meta property="og:site_name" content="Lofficiel">



<!-- Twitter Meta -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:title" content="{{ isset($post) ? $post->title : $desc }}">
<meta name="twitter:description" content="{{ isset($post) ? $post->description : $desc }}">
<meta name="twitter:image" content="{{ isset($post) ? url($post->thumbnail) : $phUrl }}">



<link rel="canonical" href="{{ $abUrl }}">


<link rel="icon" href="{{ $titleImg }}" sizes="32x32">
<link rel="icon" href="{{ $titleImg }}" sizes="192x192">
<link rel="apple-touch-icon" href="{{ $titleImg }}">



<script type="application/ld+json" class="yoast-schema-graph">

    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Lofficiel",
        "url": "{{ $abUrl }}",
        "description": " {{ $desc }} ",
        "publisher": {
          "@type": "Organization",
          "name": "Lofficiel",
          "logo": {
            "@type": "ImageObject",
            "url": "{{ $phUrl }}"
          }
        },
        "potentialAction": {
          "@type": "SearchAction",
          "target": "{{ $abUrl }}/search?q={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      }
      
    </script>
