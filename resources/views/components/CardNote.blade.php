@props(['note'])

<div class="card px-3 py-4 bg-white shadow rounded-2xl" data-te-ripple-init>
  <div data-te-collapse-init data-te-target="#note-{{ $note->id }}">
    <h1 class="text-lg mb-2 font-bold">{{ $note->title }}</h1>
    <div class="flex items-center gap-1">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <p class="text-xs">{{ $note->deadline }}</p>
    </div>
  </div>
  <div id="note-{{ $note->id }}" class="!visible hidden" data-te-collapse-item data-te-collapse-show
    aria-labelledby="headingOne" data-te-parent="#accordionExample">
    <hr class="my-3">
    <div>
      {!! $note->content !!}
    </div>
    <div class="flex justify-end mt-4 gap-1">
      <button data-te-ripple-init data-te-ripple-color="light" data-te-offcanvas-toggle data-te-target="#offcanvas-edit"
        aria-controls="offcanvas-edit"
        onclick="handleEdit('{{ route('note.update', $note) }}', {{ json_encode($note) }})"
        class="bg-yellow-400 px-4 py-2 rounded-lg flex items-center gap-1">
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
      </button>
      <button onclick="handleDeleteNote('{{ route('note.destroy', $note) }}')"
        class="bg-red-600 text-white px-4 py-2 rounded-lg flex items-center gap-1" data-te-toggle="modal"
        data-te-target="#modal-delete" data-te-ripple-init data-te-ripple-color="light">
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
          stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
        </svg>
      </button>
    </div>
  </div>
</div>
