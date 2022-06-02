<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden p-6 grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach($category as $each)

                        <x-category :each="$each"/>
                   
                     
                    @endforeach
                    
                </div>
        </div>
    </div>
</x-app-layout>