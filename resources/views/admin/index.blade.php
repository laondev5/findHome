@extends('admin.layout')
@section('admin')
<div class="w-[100%] bg-white mx-12 my-8">
    <!--- alert --->
    @if (Session::has('message'))


    <div class="mb-3 hidden w-full items-center rounded-lg bg-success-100 px-6 py-5 text-base text-success-800 data-[te-alert-show]:inline-flex" role="alert" data-te-alert-init data-te-alert-show>
        <strong class="mr-1">{{session::get('message')}}</strong>
        <button type="button" class="ml-auto box-content rounded-none border-none p-1 text-succes-800 opacity-50 hover:text-success-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-alert-dismiss aria-label="Close">
            <span class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                    <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                </svg>
            </span>
        </button>
    </div>
    @endif
    <!----- end of alert --->


    <h1>welcome {{Auth::guard('admin')->user()->name}}</h1>

    <div class="flex flex-col overflow-x-auto">
  <div class="sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
      <div class="overflow-x-auto">
        <table class="min-w-full text-left text-sm font-light">
          <thead class="border-b font-medium dark:border-neutral-500">
            <tr>
              <th scope="col" class="px-6 py-4">#</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
              <th scope="col" class="px-6 py-4">Heading</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
            <tr class="border-b dark:border-neutral-500">
              <td class="whitespace-nowrap px-6 py-4 font-medium ">2</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4 ">Cell</td>
              <td class="whitespace-nowrap px-6 py-4 ">Cell</td>
            </tr>
            <tr class="border-b ">
              <td class="whitespace-nowrap px-6 py-4 font-medium ">3</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
              <td class="whitespace-nowrap px-6 py-4">Cell</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection