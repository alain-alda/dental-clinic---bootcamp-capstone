@extends('../layout/' . $layout)

@section('subhead')
    <title>Book an Appointment - Smileville Dental Services</title>
@endsection

@section('subcontent')
    {{-- <div class="container">
        <h3>@auth Add Appointment @else Book an Appointment @endauth</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif      

        <form method="POST" action="{{ route('appointments.store') }}">
          @csrf
          @include('appointments.info-appointment')          
          @include('appointments.info-patient')
          @include('appointments.info-contact')          
          @include('appointments.info-additional')
          @include('appointments.info-confirmation')

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div> --}}

    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    

  <!-- Container for demo purpose -->
<!-- Container for demo purpose -->
<div>

  <!-- Section: Design Block -->
  <section class="mb-40">
    <nav class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
      <div class="px-6 w-full flex flex-wrap items-center justify-between">
        <div class="flex items-center">
          <button
            class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContentY"
            aria-controls="navbarSupportedContentY"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fas"
              class="w-5"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
            >
              <path
                fill="currentColor"
                d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
              ></path>
            </svg>
          </button>
          <a class="navbar-brand text-blue-600" href="#!">
            <svg class="w-5 h-5 ml-2 lg:ml-0 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M485.5 0L576 160H474.9L405.7 0h79.8zm-128 0l69.2 160H149.3L218.5 0h139zm-267 0h79.8l-69.2 160H0L90.5 0zM0 192h100.7l123 251.7c1.5 3.1-2.7 5.9-5 3.3L0 192zm148.2 0h279.6l-137 318.2c-1 2.4-4.5 2.4-5.5 0L148.2 192zm204.1 251.7l123-251.7H576L357.3 446.9c-2.3 2.7-6.5-.1-5-3.2z"></path>
            </svg>
          </a>
        </div>
        <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentY">
          <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
            <li class="nav-item">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Team</a>
            </li>
            <li class="nav-item mb-2 lg:mb-0">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Projects</a>
            </li>
          </ul>
        </div>
        <div class="flex items-center lg:ml-auto">
          <button type="button" class="inline-block px-6 py-2.5 mr-2 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Login</button>
          <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Sign up for free</button>
        </div>
      </div>
    </nav>

    <div class="text-center bg-gray-50 text-gray-800 py-24 px-6">
      <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">The best offer on the market <br /><span class="text-blue-600">for your business</span></h1>
      <a class="inline-block px-7 py-3 mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Get started</a>
      <a class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Learn more</a>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->

<div class="container my-6 px-6 mx-auto">

  <!-- Section: Design Block -->
  <section class="mb-6 text-gray-800 text-center md:text-left">
    <div class="block rounded-lg shadow-lg bg-gray-800">
      <div class="flex flex-wrap items-center bg-custom-1 p-10 rounded-xl">
        <div class="grow-0 shrink-0 basis-auto block lg:flex w-full lg:w-6/12 xl:w-4/12 bg-custom-5 flex justify-center p-20 rounded-xl">
          <div class="tab-headers flex border-b border-gray-300">
            <div class="tab-header rounded active cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="1">Appointment Information</div>
            <div class="tab-header rounded cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="2">Patient Information</div>
            <div class="tab-header rounded cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="3">Contact Information</div>
            <div class="tab-header rounded cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="4">Additional Information</div>
            <div class="tab-header rounded cursor-pointer px-4 py-2 text-gray-500 font-medium" data-tab="5">Confirmation</div>
          </div>
        </div>
        <div class="grow-0 shrink-0 basis-auto w-full lg:w-6/12 xl:w-8/12">
          <div class="px-6 py-12 md:px-12">
            <form action="{{ route('appointments.store') }}" method="post" enctype="multipart/form-data">
              <div class="tab-content mt-6">
                @csrf
                <div class="tab active" data-tab="1">
                  @include('appointments.info-appointment') 
                  {{--  --}}
                  <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
                </div>
                <div class="tab" data-tab="2">
                  @include('appointments.info-patient')
                  {{--  --}}
                  <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
                  <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
                </div>
                <div class="tab" data-tab="3">
                  @include('appointments.info-contact')
                  {{--  --}}
                  <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
                  <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
                </div>
                <div class="tab" data-tab="4">
                  @include('appointments.info-additional')
                  {{--  --}}
                  <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
                  <button type="button" class="next-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Next</button>
                </div>
                <div class="tab" data-tab="5">
                  @include('appointments.info-confirmation')
                  {{--  --}}
                  <button type="button" class="prev-btn bg-white hover:bg-custom-4 text-custom-1 font-medium py-2 px-4 rounded mt-3">Previous</button>
                  <button type="submit" class="submit-btn bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded mt-3">Submit</button>
                </div>
            </div>
          </form>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose --> 
  

{{--   
//<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script> --}}

<script>
  const tabHeaders = document.querySelectorAll(".tab-header");
const tabs = document.querySelectorAll(".tab");

tabHeaders.forEach((tabHeader) => {
  tabHeader.addEventListener("click", () => {
    const currentTab = document.querySelector(".tab-header.active");
    currentTab.classList.remove("active");
    tabHeader.classList.add("active");

    const currentContent = document.querySelector(".tab.active");
    currentContent.classList.remove("active");
    const tabId = tabHeader.getAttribute("data-tab");
    const newContent = document.querySelector(`.tab[data-tab="${tabId}"]`);
    newContent.classList.add("active");
  });
});

const prevButtons = document.querySelectorAll(".prev-btn");
prevButtons.forEach((prevButton) => {
  prevButton.addEventListener("click", () => {
    const currentTab = document.querySelector(".tab-header.active");
    const currentTabId = currentTab.getAttribute("data-tab");
    const prevTabId = currentTabId - 1;

    if (prevTabId > 0) {
      currentTab.classList.remove("active");
      const prevTab = document.querySelector(
        ` .tab-header[data-tab="${prevTabId}"]`
      );
      prevTab.classList.add("active");

      const currentContent = document.querySelector(".tab.active");
      currentContent.classList.remove("active");
      const prevContent = document.querySelector(
        `.tab[data-tab="${prevTabId}"]`
      );
      prevContent.classList.add("active");
    }
  });
});

const nextButtons = document.querySelectorAll(".next-btn");
nextButtons.forEach((nextButton) => {
  nextButton.addEventListener("click", () => {
    const currentTab = document.querySelector(".tab-header.active");
    const currentTabId = currentTab.getAttribute("data-tab");
    const nextTabId = parseInt(currentTabId) + 1;
    if (nextTabId <= tabs.length) {
      currentTab.classList.remove("active");
      const nextTab = document.querySelector(
        ` .tab-header[data-tab="${nextTabId}"]`
      );
      nextTab.classList.add("active");
      const currentContent = document.querySelector(".tab.active");
      currentContent.classList.remove("active");
      const nextContent = document.querySelector(
        `.tab[data-tab="${nextTabId}"]`
      );
      nextContent.classList.add("active");
    }
  });
});

</script>


    
@endsection