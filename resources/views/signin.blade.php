<x-layout>
  <x-slot:title>Sign in</x-slot>
    <h1>Sign in</h1>
    <form acton='{{ route("signin") }}' method='post' class='flex flex-col gap-y-4'>
      @csrf
      <p>Only the blog's owner is allowed to sign in.</p>
      <label for='password'>Password</label>
      <input name='password' id='password' type='password' required>
      <button type='submit'>Sign in</button>
    </form>
</x-layout>