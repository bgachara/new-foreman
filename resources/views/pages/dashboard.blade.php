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
        <a
          href=""
          class="block shrink-0 rounded-full bg-white p-2.5 text-gray-600 shadow-sm hover:text-gray-700"
        >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
        </svg>
        
        </a>
      </div>

      <span
        aria-hidden="true"
        class="block h-6 w-px rounded-full bg-gray-200"
      ></span>

      {{-- <a href="#" class="block shrink-0">
        <img
          alt="Man"
          src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
          class="h-10 w-10 rounded-full object-cover"
        />
      </a> --}}
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
<section class="bg-gray-100 h-full">
  <div class="grid grid-cols-4 md:grid-cols-4 gap-4 lg:gap-8 my-6 mx-4">
    <!-- Card: Simple Widget with Action -->
    <div class="flex flex-col border-t-2 border-gray-400 rounded-b shadow-md bg-white overflow-hidden">
      <!-- Card Body: Simple Widget with Action -->
      <div class="p-5 lg:p-6 grow w-full flex justify-between items-center">
        <dl>
          <dt class="text-2xl font-semibold">
            146
          </dt>
          <dd class="uppercase font-medium text-sm text-gray-500 tracking-wider">
            Sales
          </dd>
        </dl>
        <div class="font-semibold inline-flex px-2 py-1 leading-4 items-center space-x-1 text-sm rounded-full text-emerald-700 bg-emerald-200">
          <svg class="hi-solid hi-arrow-circle-up inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/></svg>
          <span>7.9%</span>
        </div>
      </div>
      <!-- END Card Body: Simple Widget with Action -->
  
      <!-- Action Link -->
      <a href="javascript:void(0)" class="block p-3 font-medium text-sm text-center bg-gray-400 hover:bg-gray-600 hover:bg-opacity-75 active:bg-gray-50 text-blue-600 hover:text-blue-500">
        
      </a>
      <!-- END Action Link -->
    </div>
    <div class="flex flex-col border-t-2 border-gray-400 rounded-b shadow-md bg-white overflow-hidden">
      <!-- Card Body: Simple Widget with Action -->
      <div class="p-5 lg:p-6 grow w-full flex justify-between items-center">
        <dl>
          <dt class="text-2xl font-semibold">
            146
          </dt>
          <dd class="uppercase font-medium text-sm text-gray-500 tracking-wider">
            Sales
          </dd>
        </dl>
        <div class="font-semibold inline-flex px-2 py-1 leading-4 items-center space-x-1 text-sm rounded-full text-emerald-700 bg-emerald-200">
          <svg class="hi-solid hi-arrow-circle-up inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/></svg>
          <span>7.9%</span>
        </div>
      </div>
      <!-- END Card Body: Simple Widget with Action -->
  
      <!-- Action Link -->
      <a href="javascript:void(0)" class="block p-3 font-medium text-sm text-center bg-gray-400 hover:bg-gray-600 hover:bg-opacity-75 active:bg-gray-50 text-blue-600 hover:text-blue-500">
        
      </a>
      <!-- END Action Link -->
    </div>
    <!-- END Card: Simple Widget with Action -->
  
    <!-- Card: Simple Widget with Action -->
    <div class="flex flex-col border-t-2 border-gray-400 rounded-b shadow-md bg-white overflow-hidden">
      <!-- Card Body: Simple Widget with Action -->
      <div class="p-5 lg:p-6 grow w-full flex justify-between items-center">
        <dl>
          <dt class="text-2xl font-semibold">
            Ksh 5,128
          </dt>
          <dd class="uppercase font-medium text-sm text-gray-500 tracking-wider">
            Earnings
          </dd>
        </dl>
        <div class="font-semibold inline-flex px-2 py-1 leading-4 items-center space-x-1 text-sm rounded-full text-red-700 bg-red-200">
          <svg class="hi-solid hi-arrow-circle-down inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd"/></svg>
          <span>6.9%</span>
        </div>
      </div>
      <!-- END Card Body: Simple Widget with Action -->
  
      <!-- Action Link -->
      <a href="javascript:void(0)" class="block p-3 font-medium text-sm text-center bg-gray-400 hover:bg-gray-600 hover:bg-opacity-75 active:bg-gray-50 text-blue-600 hover:text-blue-500">
        
      </a>
      <!-- END Action Link -->
    </div>
    <!-- END Card: Simple Widget with Action -->
  
    <!-- Card: Simple Widget with Action -->
    <div class="flex flex-col border-t-2 border-gray-400 rounded-b shadow-md bg-white overflow-hidden">
      <!-- Card Body: Simple Widget with Action -->
      <div class="p-5 lg:p-6 grow w-full flex justify-between items-center">
        <dl>
          <dt class="text-2xl font-semibold">
            Ksh 2,670
          </dt>
          <dd class="uppercase font-medium text-sm text-gray-500 tracking-wider">
            Credit
          </dd>
        </dl>
        <div class="font-semibold inline-flex px-2 py-1 leading-4 items-center space-x-1 text-sm rounded-full text-emerald-700 bg-emerald-200">
          <svg class="hi-solid hi-arrow-circle-up inline-block w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/></svg>
          <span>5.6%</span>
        </div>
      </div>
      <!-- END Card Body: Simple Widget with Action -->
  
      <!-- Action Link -->
      <a href="javascript:void(0)" class="block p-3 font-medium text-sm text-center bg-gray-400 hover:bg-gray-600 hover:bg-opacity-75 active:bg-gray-50 text-blue-600 hover:text-blue-500">
       
      </a>
      <!-- END Action Link -->
    </div>
    <!-- END Card: Simple Widget with Action -->
  </div>
</section>
</div>
@endsection