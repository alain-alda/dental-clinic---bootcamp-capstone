<div class="flex flex-col md:flex-row md:space-x-4">
  <div class="flex-1">
    <div class="form-group">
      <label for="appointment_date" class="block text-sm font-medium text-blue-600">Preferred Appointment Date:</label>
      <input type="date" id="appointment_date" name="appointment_date" class="form-input mt-1 block w-full border-blue-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500" value="{{ old('appointment_date') }}" required>
    </div>
    <div class="form-group">
      <label for="appointment_time" class="block text-sm font-medium text-blue-600">Preferred Appointment Time:</label>
      <select id="appointment_time" name="appointment_time" class="form-select mt-1 block w-full border-blue-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
        <option value="">-- Please select an option --</option>
        <option value="Morning" {{ old('appointment_time') == 'Morning' ? 'selected' : '' }}>Morning</option>
        <option value="Afternoon" {{ old('appointment_time') == 'Afternoon' ? 'selected' : '' }}>Afternoon</option>
      </select>
    </div>  
  </div>
  <div class="flex-1">       
    <div class="form-group">
      <label for="doctor_id" class="block text-sm font-medium text-blue-600">Doctor's Name:</label>
      <select name="doctor_id" class="form-select mt-1 block w-full border-blue-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>    
        <option value="">-- Please select an option --</option>
        @foreach($doctors as $doctor)
          <option value="{{ $doctor->doctor_id }}" {{ old('doctor_id') == $doctor->doctor_id ? 'selected' : '' }}>{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="appointment_type" class="block text-sm font-medium text-blue-600">Type of Appointment:</label>
      <select id="appointment_type" name="appointment_type" class="form-select mt-1 block w-full border-blue-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>    
        <option value="">-- Please select an option --</option>
        <option value="Regular Check Up" {{ old('appointment_type') == 'Regular Checkup' ? 'selected' : '' }}>Regular Checkup</option>
        <option value="Cleaning" {{ old('appointment_type') == 'Cleaning' ? 'selected' : '' }}>Cleaning</option>
        <option value="Emergency" {{ old('appointment_type') == 'Emergency' ? 'selected' : '' }}>Emergency</option>
      </select>
    </div>
  </div>
</div>
<div class="form-group">
  <label for="reason" class="block text-sm font-medium text-blue-600">Reason for Appointment:</label>
  <textarea id="reason" name="reason" class="form-textarea mt-1 block w-full border-blue-300 focus:border-blue-500 rounded-md shadow-sm" rows="3" required>{{ old('reason') }}</textarea>
</div>
<div class="form-group">
  <label for="dental_history" class="block text-sm font-medium text-blue-600">Previous Dental History:</label>
  <textarea id="dental_history" name="dental_history" class="form-textarea mt-1 block w-full border-blue-300 focus:border-blue-500 rounded-md shadow-sm" rows="3" required>{{ old('dental_history') }}</textarea>

</div>
