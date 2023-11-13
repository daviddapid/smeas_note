@extends('auth.layout')

@section('content')
  <form method="POST" action="{{ route('login.action') }}" class="rounded-lg bg-white p-5 w-[90vw] shadow-md">
    @csrf
    <div class="mb-5">
      <label for="username" class="block mb-2 font-semibold">Username</label>
      <input name="username" required type="text"
        class="outline-none border w-full py-2 px-2 rounded-md transition box-border focus:border-primary focus:shadow-[0_0_0_3px_rgba(59,130,246,0.3)] ">
    </div>
    <div class="mb-5">
      <label for="password" class="block mb-2 font-semibold">Password</label>
      <input name="password" required type="password"
        class="outline-none border w-full py-2 px-2 rounded-md transition box-border focus:border-primary focus:shadow-[0_0_0_3px_rgba(59,130,246,0.3)] ">
    </div>

    <button type="submit" data-te-ripple-init data-te-ripple-color="light"
      class="mt-8 w-full inline-block rounded-lg bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
      Sign In
    </button>
    <small class="block text-center mt-3">belum punya akun? <a href="{{ route('register') }}"
        class="text-primary font-semibold">Register</a></small>
  </form>
@endsection
