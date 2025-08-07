@extends('layouts.blog')

@section('title', $post->title)
@section('meta')
    <meta name="description" content="{{ Str::limit(strip_tags($post->content), 160) }}">
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')
<div class="container mx-auto px-4 py-12 max-w-6xl">
    <nav class="mb-6" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2 text-sm text-gray-400">
            <li>
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
            </li>
            <li>
                <span class="mx-1">/</span>
            </li>
            <li>
                <a href="{{ route('blog.index') }}" class="hover:underline">Blog</a>
            </li>
            <li>
                <span class="mx-1">/</span>
            </li>
            <li class="text-gray-400 font-semibold">{{ $post->title }}</li>
        </ol>
    </nav>
    <div class="flex flex-col md:flex-row gap-8">
        <main class="md:w-2/3 w-full order-2 md:order-1">
            <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
            @if($post->cover_image)
                <img src="{{ asset('storage/' . $post->cover_image) }}" alt="Titelbild" class="w-full max-h-80 object-cover rounded mb-4">
            @endif

            <div class="text-gray-500 text-sm mb-6">Von {{ $post->user?->username ?? 'Unbekannt' }} am {{ $post->created_at->format('d.m.Y H:i') }}</div>
            <article class="prose max-w-none mb-4 blog-article">
                {!! preg_replace_callback('/#([\wäöüß-]+)/ui', function($m) {
                    $tag = $m[1];
                    $url = route('blog.tag', ['tag' => $tag]);
                    return '<a href="'.$url.'" class="inline-block bg-gray-100 text-gray-700 px-2 py-0.5 rounded-full text-xs font-semibold hover:bg-one hover:text-white transition">'.$tag.'</a>';
                }, $post->content) !!}
            </article>

            <a href="{{ route('blog.index') }}" class="mt-8 inline-block text-gray-500 hover:underline">Zurück zur Übersicht</a>
        </main>
        <aside class="md:w-1/3 w-full order-1 md:order-2 mb-8 md:mb-0 flex flex-col gap-6">
            <div class="bg-gray-900 rounded-xl shadow p-6 sticky top-8 border border-gray-800/60 mb-6 z-20">
                <h3 class="text-lg font-semibold text-white mb-4">Inhalt</h3>
                @php
                    preg_match_all('/<h([2-4])[^>]*>(.*?)<\/h\1>/i', $post->content, $matches, PREG_SET_ORDER);
                @endphp
                @if(count($matches))
trim(preg_replace('/[^a-z0-9]+/i', '-', strtolower($text)), '-');
                    <nav aria-label="Table of Contents" class="mb-4">
                        <ul class="space-y-2" id="toc-list">
                            @foreach($matches as $m)
                                @php
                                    $text = strip_tags($m[2]);
                                    $id = 'toc-' . trim(preg_replace('/[^a-z0-9]+/i', '-', strtolower($text)), '-');
                                @endphp
                                <li class="ml-{{ ($m[1]-2)*4 }}">
                                    <a href="#{{ $id }}" class="text-one hover:underline text-sm toc-link" data-toc-id="{{ $id }}">{{ $text }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            // Set heading IDs
                            document.querySelectorAll('.blog-article h2, .blog-article h3, .blog-article h4').forEach(function(h) {
                                const text = h.textContent.trim();
                                const id = 'toc-' + text.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
                                h.id = id;
                            });
                            // Smooth scroll for TOC links
                            document.querySelectorAll('.toc-link').forEach(function(link) {
                                link.addEventListener('click', function(e) {
                                    const targetId = this.getAttribute('href').replace('#', '');
                                    const target = document.getElementById(targetId);
                                    if (target) {
                                        e.preventDefault();
                                        window.scrollTo({
                                            top: target.getBoundingClientRect().top + window.scrollY - 32,
                                            behavior: 'smooth'
                                        });
                                    }
                                });
                            });
                            // Highlight current section in TOC
                            const tocLinks = document.querySelectorAll('.toc-link');
                            const headings = Array.from(document.querySelectorAll('.blog-article h2, .blog-article h3, .blog-article h4'));
                            let lastActive = null;
                            const observer = new IntersectionObserver((entries) => {
                                let activeId = null;
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {
                                        activeId = entry.target.id;
                                    }
                                });
                                if (activeId && activeId !== lastActive) {
                                    tocLinks.forEach(link => {
                                        if (link.dataset.tocId === activeId) {
                                            link.classList.remove('text-one');
                                            link.classList.add('text-two', 'pl-2');
                                        } else {
                                            link.classList.remove('text-two', 'pl-2');
                                            link.classList.add('text-one');
                                        }
                                    });
                                    lastActive = activeId;
                                }
                            }, {
                                root: null,
                                rootMargin: '0px 0px -70% 0px',
                                threshold: 0.1
                            });
                            headings.forEach(h => observer.observe(h));
                        });
                    </script>
                @endif
            </div>
            <div class="bg-gray-900 rounded-xl shadow p-6 sticky top-[calc(8rem+3.5rem)] border border-gray-800/60 z-10">
                <h3 class="text-lg font-semibold text-white mb-4">
                    @if($relatedPosts->sum('common_tags') > 0)
                        Ähnliche Beiträge
                    @else
                        Neueste Beiträge
                    @endif
                </h3>
                @forelse($relatedPosts as $rel)
                    <div class="mb-6 pb-4 border-b border-gray-800 last:border-b-0 last:mb-0 last:pb-0">
                        <a href="{{ route('blog.show', $rel->slug) }}" class="font-bold text-one text-base hover:underline">{{ $rel->title }}</a>
                        <div class="text-xs text-gray-400 mb-1">{{ $rel->created_at->format('d.m.Y H:i') }}</div>
                        <div class="flex flex-wrap gap-1">
                            @foreach(explode(',', (string)$rel->tags) as $tag)
                                @if($relatedPosts->sum('common_tags') > 0 && in_array($tag, explode(',', (string)$post->tags)))
                                    <span class="inline-block bg-yellow-100 text-yellow-800 px-2 py-0.5 rounded-full text-xs font-semibold">#{{ $tag }}</span>
                                @else
                                    <span class="inline-block bg-gray-200 text-gray-700 px-2 py-0.5 rounded-full text-xs font-semibold">#{{ $tag }}</span>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @empty
                    <div class="text-gray-400 text-sm">Keine Beiträge gefunden.</div>
                @endforelse
            </div>
        </aside>
    </div>
</div>
@endsection
