<x-layout>
  <x-slot:title>
    {{ $blog->title }}
    </x-slot>
    <h1>{{ $blog->title }}</h1>
    <img alt='{{ $blog->title }}' src='{{ $blog->image_url }}' width="100">
    <p><strong>Category</strong>: {{ $blog->category->name }}</p>
    <p>{{ $blog->full_text }}</p>
</x-layout>