<!-- create.blade.php -->
<x-guest-layout>
    <h1 class="bg-stone-200 mb-6 p-2">Add New Company</h1>

    <form action="{{ route('companies.store') }}"
          method="POST">
        @csrf
        <!-- Company name -->
        <div class="grid grid-cols-2 my-2
                    @error('name')
                    text-red-500
                    @enderror
                    ">
            <label for="CompanyName">Company Name:</label>
            <input type="text" id="CompanyName"
                   name="name" value="{{ old('name') }}"
                   placeholder="Enter Company Name"
                   class="ml-2
                    @error('name')
                    text-red-500 border-red-500
                    @enderror">
            @error('name')
            <p>{{ $errors->first('name') }}</p>
            @enderror
        </div>
        <!-- Company Address -->
        <div class="grid grid-cols-2 my-2">
            <label for="CompanyAddress">Address:</label>
            <input type="text" id="CompanyAddress"
                   name="address" value="{{ old('address') }}"
                   placeholder="Enter Company Address"
                   class="ml-2">
        </div>
        <!-- Country Code -->
        <div class="grid grid-cols-2 my-2">
            <label for="CountryCode">Country:</label>
            <select name="countryCode" id="CountryCode"
                    class="ml-2">
                <option value="AUS">Australia</option>
                <option value="CAN">Canada</option>
                <option value="USA">United States of America</option>
                <option value="GBR">Great Britain</option>
                <option value="IRE">Ireland</option>
                <option value="NZL">New Zealand</option>
                <option value="ZZZ">Other/Unknown</option>
            </select>
        </div>
        <!-- Company Contact eMail -->
        <div class="grid grid-cols-2 my-2">
            <label for="CompanyEMail">Contact eMail:</label>
            <input type="text" id="CompanyEMail"
                   name="email" value="{{ old('email') }}"
                   placeholder="Enter Company Contact eMail"
                   class="ml-2">
            <p></p>
            <div>
                @foreach($errors->get('email') as $message)
                    <p>{{ $message }}</p>
                @endforeach
            </div>
        </div>
        <!-- Save / Cancel / Back -->
        <div class="grid grid-cols-2 my-2">
            <label for="Reset"></label>
            <div class="ml-2">
                <button type="submit" id="Save"
                        class="rounded bg-green-700 text-white px-2 py-1 mx-2">
                    Save
                </button>
                <button type="reset" id="Reset"
                        class="rounded bg-blue-700 text-white px-2 py-1 mx-2">
                    Clear
                </button>
                <button class="rounded bg-stone-700 text-white px-2 py-1 mx-2"
                        id="Back">
                    Back
                </button>
            </div>
        </div>
        <div>
            @error('email','address','name','country_code')
            <h3>All errors</h3>
            <div class="bg-red-500 text-white rounded p-4">
            @foreach($errors->all() as $errorMessage)
                <p class="text-small">{{$errorMessage}}</p>
            @endforeach
            </div>
            @enderror
        </div>
    </form>

</x-guest-layout>
