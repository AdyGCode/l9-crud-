<!-- show.blade.php -->
<x-guest-layout>
    <h1>Company Details</h1>

    <dl class="grid grid-cols-2">
        <dt>Name</dt>
        <dd>{{ $company->name }}</dd>
        <dt>Address</dt>
        <dd>{{ $company->address }} <br>
            {{ $company->country_code }}</dd>
        <dt>Contact</dt>
        <dd>{{$company->email}}</dd>
    </dl>
    <p>
        <a href="{{ route('companies.index') }}"
           class="rounded bg-stone-800 text-white px-2 py-1 mr-2">
            Companies
        </a>
    </p>
</x-guest-layout>
