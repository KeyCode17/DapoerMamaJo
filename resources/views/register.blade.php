@extends('layouts.main')

@section('container')
<h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
    Form register
</h4>
@endsection

@section('form')
<p class="mb-4">Create an account</p>
@endsection

@section('submit')
<div class="mb-12 pb-1 pt-1 text-center">
    <button
        class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
        type="button" data-te-ripple-init data-te-ripple-color="light" style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">
        Sign up
    </button>
</div>
@endsection

@section('changeform')
<div class="flex items-center justify-between pb-6">
    <p class="mb-0 mr-2">Have an account?</p>
    <button type="button"
        class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
        data-te-ripple-init data-te-ripple-color="light"
        onclick="location.href = './login';">
        Log in
    </button>
</div>
@endsection

@section('description')
<div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-l-lg lg:rounded-br-none"
    style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593)">
    <div class="px-4 py-6 text-white md:mx-6 md:p-12">
        <h4 class="mb-6 text-xl font-semibold">
            We are more than just a company
        </h4>
        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing
            elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.
        </p>
    </div>
</div>
@endsection