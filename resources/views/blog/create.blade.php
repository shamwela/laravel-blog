<x-layout>
  <x-slot:title>Create a new blog</x-slot>
    <h1>Create a new blog</h1>
    <form action='{{ route("blog.store") }}' method='post' class='flex flex-col gap-y-4'>
      @csrf
      <label for='title'>Title</label>
      <input name='title' id='title' type='text' required>

      <label for='full_text'>Full text</label>
      <textarea name='full_text' id='full_text' required></textarea>

      <label for='image_url'>Image URL</label>
      <input name='image_url' id='image_url' type='text' required>

      <label for='category_name'>Category name</label>
      <input name='category_name' id='category_name' type='text' required>

      <button type='submit'>Submit</button>
    </form>
</x-layout>