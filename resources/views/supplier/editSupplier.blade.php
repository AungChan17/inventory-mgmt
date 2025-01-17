<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit New Supplier') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('supplier.update',['supplier'=>$supplier]) }}">
                        @csrf
                            <div class="mb-6 w-1/2 mx-auto">
                                <label for="name" 
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Supplier name
                                </label>
                                <input type="text" 
                                id="name" 
                                class="
                                @error('name') is-invalid @enderror
                                bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                placeholder="Name" 
                                name="name"
                                value="{{$supplier->name}}"
                                required>
                            </div>

                                @error('name')
                                <div class="mb-6 w-1/2 mx-auto">
                                    <div class="p-4 mb-4 text-sm text-red-700   bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                    {{$message}}
                                    </div>
                                @enderror
                                </div>

                                <div class="mb-6 w-1/2 mx-auto">
                                    <label for="supplier_phone" 
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Supplier Phone Number
                                    </label>
                                    <input type="text" 
                                    id="supplier_phone" 
                                    class="
                                    @error('phone') is-invalid @enderror
                                    bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                    placeholder="Phone Number" 
                                    name="phone"
                                    value="{{$supplier->phone_number}}"
                                    required>
                            </div>
                            

                            @error('phone')
                                <div class="mb-6 w-1/2 mx-auto">
                                    <div class="p-4 mb-4 text-sm text-red-700   bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                    {{$message}}
                                    </div>
                                </div>
                            @enderror

                            <div class="mb-6 w-1/2 mx-auto">
                                <label for="supplier_address" 
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Supplier Address
                                </label>
                                <textarea name="address" id="supplier_address" placeholder="Enter address" cols="30" rows="10"                                 class="
                                @error('address') is-invalid @enderror
                                bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required>{{$supplier->address}}</textarea>
                      
                            </div>

                            @error('address')
                                <div class="mb-6 w-1/2 mx-auto">
                                    <div class="p-4 mb-4 text-sm text-red-700   bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                    {{$message}}
                                    </div>
                                </div>
                            @enderror

                            <div class="mb-6 w-1/2 mx-auto">
                                <button type="submit" 
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 mt-3 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Update</button>
                            </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
