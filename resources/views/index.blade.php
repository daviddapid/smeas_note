<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Smeas Note</title>

  <link rel="manifest" href="{{ asset('manifest.json') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="theme-color" content="#0091ff">

  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="bg-slate-100">
  <header class="bg-white shadow-md px-3 py-5">
    <button data-te-ripple-init data-te-sidenav-toggle-ref data-te-target="#sidenav-1" aria-controls="#sidenav-1"
      class="flex justify-center items-center mb-3">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
        stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
      </svg>
    </button>
    <nav id="sidenav-1"
      class="absolute left-0 top-0 z-[1035] h-full w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
      data-te-sidenav-init data-te-sidenav-hidden="true" data-te-sidenav-position="absolute">
      <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
        {{-- <li class="relative">
          <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref>
            <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
              </svg>
            </span>
            <span>Link 1</span>
          </a>
        </li>
        <li class="relative">
          <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
            data-te-sidenav-link-ref>
            <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 [&>svg]:text-gray-400 dark:[&>svg]:text-gray-300">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                <path fillRule="evenodd"
                  d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z"
                  clipRule="evenodd" />
              </svg>
            </span>
            <span>Category 1</span>
            <span
              class="absolute right-0 ml-auto mr-[0.8rem] transition-transform duration-300 ease-linear motion-reduce:transition-none [&>svg]:text-gray-600 dark:[&>svg]:text-gray-300"
              data-te-sidenav-rotate-icon-ref>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                <path fillRule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clipRule="evenodd" />
              </svg>
            </span>
          </a>
          <ul class="!visible relative m-0 hidden list-none p-0 data-[te-collapse-show]:block "
            data-te-sidenav-collapse-ref data-te-collapse-show>
            <li class="relative">
              <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref>Link 2</a>
            </li>
            <li class="relative">
              <a class="flex h-6 cursor-pointer items-center truncate rounded-[5px] py-4 pl-[3.4rem] pr-6 text-[0.78rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                data-te-sidenav-link-ref>Link 3</a>
            </li>
          </ul>
        </li> --}}
        <li class="relative">
          <a href="{{ route('logout') }}"
            class="flex h-12 cursor-pointer items-center truncate rounded-[5px] px-6 py-4 text-[0.875rem] outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10">
            <span class="mr-4 [&>svg]:h-4 [&>svg]:w-4 ">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
              </svg>
            </span>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="mb-7 flex justify-between relative">
      <div>
        <h1 class="bakso-font text-2xl">Good Morning ☀️</h1>
        <h1 class="bakso-font text-2xl">{{ Auth::user()->username }} (^_^=)</h1>
      </div>
      <div>
        <img src="/img/cutecat.png" class="w-[58px] absolute right-0 top-0" alt="cutecat" alt="cutecat">
        <img id="cutecat-heart" src="/img/cutecat-heart.png" class="w-[58px] absolute right-0 top-0" alt="cutecat"
          alt="cutecat">
      </div>
    </div>
    {{-- searchbar --}}
    <div class="flex gap-3">
      <div
        class="w-full gap-1 py-2 px-2 rounded-full relative flex items-center border hover:border-primary active:border-l-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-4 h-4  left-2">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <input type="text" onkeyup="handleSearch({{ Auth::user()->id }})"
          class="w-full text-xs border-none bg-transparent outline-none" />
      </div>
      <button
        class="bg-primary px-2 py-2 text-white rounded-full shadow-xl aspect-square flex justify-center items-center"
        data-te-ripple-init data-te-ripple-color="light" data-te-offcanvas-toggle data-te-target="#offcanvas-create"
        aria-controls="offcanvas-create">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
      </button>

      <div
        class="h-screen invisible fixed bottom-0 left-0 right-0 z-[1045] flex  max-h-full max-w-full translate-y-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-sm outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200 [&[data-te-offcanvas-show]]:transform-none"
        tabindex="-1" id="offcanvas-create" aria-labelledby="offcanvas-createLabel" data-te-offcanvas-init>
        <div class="flex items-center justify-between p-4">
          <h4 class="mb-0 font-semibold leading-normal" id="offcanvas-createLabel">
            Tambah Catatan
          </h4>
          <button type="button"
            class="box-content rounded-none border-none opacity-50 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
            data-te-offcanvas-dismiss>
            <span
              class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </span>
          </button>
        </div>
        <div class="small flex-grow overflow-y-auto p-4">
          <form action="{{ route('note.store') }}" method="post">
            @csrf
            <div class="relative mb-5">
              <label for="title" class="block mb-2 font-semibold">Title</label>
              <input name="title" required type="text"
                class="outline-none border w-full py-2 px-2 rounded-md transition box-border focus:border-primary focus:shadow-[0_0_0_3px_rgba(59,130,246,0.3)] ">
            </div>
            <div class="mb-5">
              <label for="content" class="block mb-2 font-semibold">Content</label>
              <input id="x" type="hidden" name="content" required>
              <trix-editor class="h-60" input="x" id="content"></trix-editor>
            </div>
            <div class="mb-5">
              <label for="content" class="block mb-2 font-semibold">Deadline</label>
              <input name="deadline" required type="datetime-local"
                class="bg-transparent outline-none border w-full py-2 px-2 rounded-md transition box-border focus:border-primary focus:shadow-[0_0_0_3px_rgba(59,130,246,0.3)] ">
            </div>
            <button type="submit" data-te-ripple-init data-te-ripple-color="light"
              class="mt-8 w-full inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Simpan
            </button>
          </form>
        </div>
      </div>
    </div>
  </header>

  <main class="px-3 py-5">
    <h1 class="mb-3 font-semibold text-lg">Catatan Anda</h1>
    <div class="grid grid-cols-1 gap-2">
      @foreach ($notes as $n)
        <x-CardNote :note=$n />
      @endforeach

      <!--modal delete-->
      <div data-te-modal-init
        class="px-3 backdrop-blur-[2px] fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="modal-delete" tabindex="-1" aria-labelledby="modal-deleteTitle" aria-modal="true" role="dialog">
        <div data-te-modal-dialog-ref
          class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
          <div
            class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
            <div
              class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
              <!--Modal title-->
              <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                id="modal-deleteTitle">
                Hapus Data
              </h5>
              <!--Close button-->
              <button type="button"
                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                data-te-modal-dismiss aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="h-6 w-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>

            <!--Modal body-->
            <div class="relative p-4">
              <p>Hapus data ini ?</p>
            </div>

            <!--Modal footer-->
            <form id="form-delete" method="POST"
              class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
              @csrf
              @method('delete')
              <button type="button"
                class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                Close
              </button>
              <button type="submit"
                class="ml-1 inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white "
                data-te-ripple-init data-te-ripple-color="light">
                Hapus
              </button>
            </form>
          </div>
        </div>
      </div>

      <!--offcanvas edit-->
      <div
        class="h-screen invisible fixed bottom-0 left-0 right-0 z-[1045] flex  max-h-full max-w-full translate-y-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-sm outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200 [&[data-te-offcanvas-show]]:transform-none"
        tabindex="-1" id="offcanvas-edit" aria-labelledby="offcanvas-editLabel" data-te-offcanvas-init>
        <div class="flex items-center justify-between p-4">
          <h4 class="mb-0 font-semibold leading-normal" id="offcanvas-editLabel">
            Edit Catatan
          </h4>
          <button type="button"
            class="box-content rounded-none border-none opacity-50 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
            data-te-offcanvas-dismiss>
            <span
              class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </span>
          </button>
        </div>
        <div class="small flex-grow overflow-y-auto p-4">
          <form method="post" id="form-update">
            @csrf
            @method('put')
            <div class="relative mb-5">
              <label for="title" class="block mb-2 font-semibold">Title</label>
              <input id="title-edit" name="title" required type="text"
                class="outline-none border w-full py-2 px-2 rounded-md transition box-border focus:border-primary focus:shadow-[0_0_0_3px_rgba(59,130,246,0.3)] ">
            </div>
            <div class="mb-5">
              <label for="content" class="block mb-2 font-semibold">Content</label>
              <input id="content-edit" type="hidden" name="content" required>
              <trix-editor class="h-60" input="content-edit" id="editor-edit"></trix-editor>
            </div>
            <div class="mb-5">
              <label for="content" class="block mb-2 font-semibold">Deadline</label>
              <input id="deadline-edit" name="deadline" required type="datetime-local"
                class="bg-transparent outline-none border w-full py-2 px-2 rounded-md transition box-border focus:border-primary focus:shadow-[0_0_0_3px_rgba(59,130,246,0.3)] ">
            </div>
            <button type="submit" data-te-ripple-init data-te-ripple-color="light"
              class="mt-8 w-full inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Update
            </button>
          </form>
        </div>
      </div>
    </div>
  </main>

  @include('sweetalert::alert')
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="/js/crud.js"></script>
  <script src="/js/search.js"></script>
</body>

</html>
