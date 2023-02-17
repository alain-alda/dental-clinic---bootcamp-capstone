@extends('../layout/' . $layout)

@section('subhead')
    <title>CRUD Data List - Smileville Dental Services</title>
@endsection

@section('subcontent')
    <h2 class="intro-y text-lg font-medium mt-10">Appointments Listing</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="{{ url('/appointments/book-appointment') }}" class="btn btn-primary shadow-md mr-2">Set An Appointment</a>
            <div class="hidden md:block mx-auto text-slate-500">{{-- Showing 1 to 10 of 150 entries --}}</div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">DOCTOR ID</th>
                        <th class="whitespace-nowrap">DATE</th>
                        <th class="whitespace-nowrap">PATIENT'S NAME</th>
                        <th class="whitespace-nowrap">DOCTOR'S NAME</th>
                        <th class="whitespace-nowrap">PROCEDURE</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr class="intro-x">
                            <td>
                                <p class="font-medium whitespace-nowrap">{{ $appointment->doctor_id }}</p>
                            </td>
                            <td class="w-40">
                                <p href="" class="font-medium whitespace-nowrap">{{ $appointment->appointment_date }}</p>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $appointment->appointment_time }}</div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{ $appointment->last_name }}, {{ $appointment->first_name }}</a>
                                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $appointment->gender }}, DOB: {{ $appointment->dob }}</div>
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">Dr. {{ $appointment->doctor->first_name }} {{ $appointment->doctor->last_name }}</a>
                            </td>
                            <td>
                                <p class="font-medium whitespace-nowrap">{{ $appointment->appointment_type }}</p>
                            </td>
                            <td class="w-40">
                                <div class="flex items-center justify-center {{-- {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }} --}}">
                                    {{-- <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }} --}}
                                    {{-- <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                      <option value="Pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                      <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                      <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                  </select> --}}
                                  <p class="font-medium whitespace-nowrap">{{ $appointment->status }}</p>
                                </div>
                            </td>
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    {{-- <a class="flex items-center mr-3" href="/appointments/{{$appointment->appointment_id}}/edit"> --}}
                                    <a class="flex items-center mr-3" href="/appointments/{{$appointment->appointment_id}}/edit">
                                        <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit
                                    </a>
                                    {{-- <form method="POST" action="{{ route('appointments.destroy', $appointment->appointment_id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="flex items-center text-danger" href="" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal">
                                            <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                        </button>
                                    </form> --}}
                                    <form method="POST" action="{{ route('appointments.destroy', $appointment->appointment_id) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex items-center text-danger"><i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
            <nav class="w-full sm:w-auto sm:mr-auto">
              {{ $appointments->links() }}
            </nav>
        </div>
        <!-- END: Pagination -->
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">Do you really want to delete these records? <br>This process cannot be undone.</div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
@endsection

