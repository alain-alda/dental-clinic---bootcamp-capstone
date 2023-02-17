@extends('../layout/' . $layout)

@section('subhead')
    <title>Services - Smileville Dental Services</title>
@endsection

@section('subcontent')
  <div class="container my-12 px-6 mx-auto">
     <section class="mb-12 text-gray-800 text-center">
        <h2 class="text-3xl font-bold mb-12 pb-4 text-center">Services</h2> 
        <div class="grid lg:grid-cols-3 gap-6 xl:gap-x-12">
           {{-- For Each Start Here! --}}
           @foreach ($service as $service)
           <div class="mb-12 lg:mb-6">
           <div class="relative block bg-white rounded-lg shadow-lg">
              <div class="flex">
                 <div
                 class="relative overflow-hidden bg-no-repeat bg-cover relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 -mt-4"
                 data-mdb-ripple="true" data-mdb-ripple-color="light">
                 <img src="{{ asset('storage/' . $service->service_image) }}" alt="{{ $service->service }}" class="w-full" />
                 <a href="#!">
                    <div
                       class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                       style="background-color: rgba(251, 251, 251, 0.15)"></div>
                 </a>
                 </div>
              </div>
              <div class="p-6">
                 <h5 class="font-bold text-lg mb-3"><a href="/services/{{$service->id}}">{{$service->service}}</a></h5> 
                 <p class="mb-4 pb-2">
                 {{ $service->service_description }}
                 </p> 
              </div>
           </div>
           </div>
           @endforeach
           {{-- For Each Ends Here! --}}
        </div>
     </section>
  </div>
  @endsection