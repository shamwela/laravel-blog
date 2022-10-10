<html>

<head>
  <title>{{ $title ?? "Sha Mwe La's blog" }}</title>
  @vite('resources/css/app.css')
</head>

<body class='flex flex-col gap-y-4'>
  <nav class='flex gap-x-8 mx-auto'>
    <a href='{{ route("home") }}'>Home</a>
    <a href='{{ route("about") }}'>About</a>

    @if (Cookie::get('signed_in') === 'true')
    <a href='{{ route("blog.create") }}'>Create a new blog</a>

    <form action='{{ route("signout") }}' method='post'>
      @method('delete')
      @csrf
      <button type='submit' class='danger'>Sign out</button>
    </form>

    @else
    <a href='{{ route("signin") }}'>Sign in</a>
    @endif
  </nav>
  <main class='flex flex-col gap-y-4 mx-auto'>
    {{ $slot }}
  </main>
</body>

</html>