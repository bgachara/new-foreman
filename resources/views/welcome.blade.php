@extends('layouts.head')

@section('body')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-CENTER sm:pt-0">
                    <h1 class="text-3xl font-normal ">
                        FOREMAN
                      </h1>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-1">
                        <div class="p-6">
                            <div class="m-6">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-x-2 md:grid-cols-2">
                        <div class="ml-4 my-1 p-2 flex justify-center text-lg text-gray-700 font-medium sm:text-left sm:ml-0 hover:text-gray-800">
                            <a href="{{url('login')}}"
                                className="ml-4 text-xl text-gray-700 underline">
                                Login
                            </a>
                        </div>

                        <div class="ml-4 my-1 p-2 flex justify-center text-lg text-gray-700 font-medium sm:text-right sm:ml-0 hover:text-gray-800">
                            <a href="{{url('register')}}" className="ml-4 text-xl text-gray-700 underline">
                                Register
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
 
