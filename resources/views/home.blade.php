<x-layout>
  <x-slot:title>
    Sha Mwe La's blog
    </x-slot>
    <h1>Sha Mwe La's blog</h1>
    @foreach ($blogs as $blog)
    <div class='border-2 border-black p-4 rounded-lg flex flex-col gap-y-4'>
      <div class='flex gap-x-8 items-center'>
        <a href='{{ route("blog.show", $blog->id) }}'>
          <h2>{{ $blog->title }}</h2>
        </a>

        @if (Cookie::get('signed_in') === 'true')
        <a href='{{ route("blog.edit", $blog->id) }}'>Edit</a>
        <form action='{{ route("blog.destroy", $blog->id) }}' method='post'>
          @method('delete')
          @csrf
          <button onclick='return confirm("Are you sure?")' type='submit' class='danger'>Delete</button>
        </form>
        @endif
      </div>

      <img alt='{{ $blog->title }}' src='{{ $blog->image_url }}'>
    </div>
    @endforeach
</x-layout>