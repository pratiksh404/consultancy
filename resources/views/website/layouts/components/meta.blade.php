<!-- Required meta tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>{{ $title ?? (website('name') ?? title()) }}</title>


<!-- Favicons-->
<link rel="icon" type="image/x-icon" href="{{ favicon() }}">
<link rel="shortcut icon" href="{{ favicon() }}" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="{{ favicon() }}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ favicon() }}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ favicon() }}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ favicon() }}">


<meta name="description"
    content="{{ $description ?? (website('short_description') ?? (website('name') ?? (title() ?? 'Hotel'))) }}">
<meta name="keywords" content="{{ $keywords ?? (website('keywords') ?? (keywords() ?? 'Hotel')) }}">
<meta name="author" content="Pratik Shrestha">
{{-- Open Graph Tags --}}
<meta property="og:title"
    content="{{ $title ?? (website('name') ?? (title() ?? config('adminetic.title', 'Hotel'))) }}" />
<meta property="og:description"
    content="{{ $description ?? (website('short_description') ?? (description() ?? (website('name') ?? (title() ?? 'Hotel')))) }}" />
<meta property="og:image" content="{{ url($image ?? logoBanner()) }}" />
<meta name="twitter:card" content="" />
<meta name="twitter:site" content="" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title"
    content="{{ $title ?? (website('name') ?? (title() ?? config('adminetic.title', 'Hotel'))) }}" />
<meta name="twitter:description"
    content="{{ $description ?? (website('short_description') ?? (description() ?? (website('name') ?? (title() ?? 'Hotel')))) }}" />
<meta name="twitter:image" content="{{ url($image ?? logoBanner()) }}" />


<!-- Android App links -->
<meta property="al:android:url" content="{{ Request::url() }}">
<meta property="al:android:app_name" content="{{ $title ?? config('adminetic.title', 'Hotel') }}">
<meta property="al:web:url" content= '{{ Request::url() }}' />

<link rel="canonical" href="{{ Request::url() }}">
<meta name="robots" content="index, follow">
