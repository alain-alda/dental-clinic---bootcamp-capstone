
<h3 class="text-lg font-medium text-custom-2">Patient Information:</h3>

<div class="flex flex-col md:flex-row md:space-x-4">
  <div class="flex-1">
    <div class="form-group">
      <label for="first_name" class="block text-sm font-medium text-custom-2 p-2">First Name:</label>
      <input type="text" name="first_name" class="form-control block w-full p-2 border rounded-md shadow-sm" value="{{ old('first_name') }}" required>
    </div>
    <div class="form-group">
      <label for="last_name" class="block text-sm font-medium text-custom-2 p-2">Last Name:</label>
      <input type="text" name="last_name" class="form-control block w-full p-2 border rounded-md shadow-sm" value="{{ old('last_name') }}" required>
    </div>
  </div>
  <div class="flex-1">
    <div class="form-group">
      <label for="gender" class="block text-sm font-medium text-custom-2 p-2">Gender:</label>
      <select id="gender" name="gender" class="form-control block w-full p-2 border rounded-md shadow-sm" required>    
        <option value="">----</option>
        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
      </select>
    </div>
    <div class="form-group">
      <label for="dob" class="block text-sm font-medium text-custom-2 p-2">Date of Birth:</label>
      <input class="form-control block w-full p-2 border rounded-md shadow-sm" required type="date" id="dob" name="dob" value="{{ old('dob') }}">
    </div>
  </div>
</div>


<h3 class="text-lg font-medium text-custom-2 mt-6">Medical Information:</h3>
<div class="form-group">
  <label for="medications" class="block text-sm font-medium text-custom-2 p-2">List of current medications:</label>
  <textarea class="form-textarea mt-1 block w-full border-blue-300 focus:border-blue-500 rounded-md shadow-sm" required id="medications" name="medications">{{ old('medications') }}</textarea>
</div>
<div class="form-group">
  <label for="allergies" class="block text-sm font-medium text-custom-2 p-2">Allergies (if any):</label>
  <textarea class="form-textarea mt-1 block w-full border-blue-300 focus:border-blue-500 rounded-md shadow-sm" required id="allergies" name="allergies">{{ old('allergies') }}</textarea>
</div>
<div class="form-group">
  <label for="medical_conditions" class="block text-sm font-medium text-custom-2 p-2">Medical conditions that may affect dental treatment:</label>
  <textarea class="form-textarea mt-1 block w-full border-blue-300 focus:border-blue-500 rounded-md shadow-sm" required id="medical_conditions" name="medical_conditions">{{ old('medical_conditions') }}</textarea>
</div>