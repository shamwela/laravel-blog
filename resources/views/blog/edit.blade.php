<x-layout>
  <x-slot:title>Edit "{{ $blog->title }}"</x-slot>
    <h1>Edit "{{ $blog->title }}"</h1>
    <form action='{{ route("blog.update", $blog->id) }}' method='post' class='flex flex-col gap-y-4'>
      @method('put')
      @csrf
      <label for='title'>Title</label>
      <input name='title' id='title' type='text' value='{{ $blog->title }}' required>

      <label for='full_text'>Full text</label>
      <textarea name='full_text' id='full_text' required>{{ $blog->full_text }}</textarea>

      <label for='image_url'>Image URL</label>
      <input name='image_url' id='image_url' type='text' value='{{ $blog->image_url }}' required>

      <label for='category_name'>Category name</label>
      <input name='category_name' id='category_name' type='text' value='{{ $category_name }}' required>

      <button type='submit'>Submit</button>
    </form>
</x-layout>