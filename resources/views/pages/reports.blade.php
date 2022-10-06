@extends('layouts.sidemenu')

@section('main_body')
<div class="flex flex-col w-full">
<header class="border-b border-gray-300 bg-gray-100 w-full h-20">
  <div class="mx-auto px-3 py-3 sm:px-6 lg:px-8">
    <div class="flex items-center justify-end gap-4">
      <div class="flex items-center gap-4">
        <div class="relative">
          <label class="sr-only" for="search"> Search </label>

          <input
            class="h-10 w-full rounded-full border-none bg-white pl-4 pr-10 text-sm shadow-sm sm:w-56"
            id="search"
            type="search"
            placeholder="Search website..."
          />

          <button
            class="absolute top-1/2 right-1 -translate-y-1/2 rounded-full bg-gray-50 p-2 text-gray-600 transition hover:text-gray-700"
            type="button"
            aria-label="Submit Search"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4 w-4"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              />
            </svg>
          </button>
        </div>

        <a
          href=""
          class="block shrink-0 rounded-full bg-white p-2.5 text-gray-600 shadow-sm hover:text-gray-700"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
            />
          </svg>
        </a>
      </div>

      <span
        aria-hidden="true"
        class="block h-6 w-px rounded-full bg-gray-200"
      ></span>

      <a href="#" class="block shrink-0">
        <img
          alt="Man"
          src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
          class="h-10 w-10 rounded-full object-cover"
        />
      </a>
    </div>

    <div class="-mt-7">
      <h1 class="text-lg font-bold text-gray-900 sm:text-lg">
        Welcome Back, Random
      </h1>

      <p class="text-sm text-gray-500">
        Stay upto date with your construction inventory, metrics and reports here.
      </p>
    </div>
  </div>
</header>
<section class="w-full bg-gray-100 h-full">
  <p>Reports Page</p>
</section>
</div>
@endsection