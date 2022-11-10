<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('transaction.store') }}">
                        @csrf
                           
                            <div class="mb-6 w-1/2 mx-auto">
                                <label for="supplier_phone" 
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quantity
                                </label>
                                <input type="text" 
                                id="quantity" 
                                class="
                                @error('quantity') is-invalid @enderror
                                bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                placeholder="Quantity" 
                                name="quantity"
                                required>
                            </div>

                            @error('quantiy')
                                <div class="mb-6 w-1/2 mx-auto">
                                    <div class="p-4 mb-4 text-sm text-red-700   bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                    {{$message}}
                                    </div>
                                </div>
                            @enderror

                            
                            <div class="mb-6 w-1/2 mx-auto">
                                <label for="suppliers" 
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select Suppliers</label>
                                <select id="suppliers" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="product_id">
                                
                                <option selected="">Products</option>
                                @foreach($productId as $pd)
                                <option value="{{$pd->id}}">{{$pd->name}}</option>
                                @endforeach
                                </select>
                            </div>

     

                            <!-- @error('product_id')
                                <div class="mb-6 w-1/2 mx-auto">
                                    <div class="p-4 mb-4 text-sm text-red-700   bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                    {{$message}}
                                    </div>
                                </div>
                            @enderror -->

                            <div class="mb-6 w-1/2 mx-auto">
                                <label for="countries" 
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select suppliers</label>
                                <select id="countries" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="user_id">
                                <option selected="">Users</option>
                                @foreach($userId as $ud)
                                <option value="{{$ud->id}}">{{$ud->name}} </option>
                                @endforeach
                                </select>
                            </div>


                            <!-- @error('user_id')
                                <div class="mb-6 w-1/2 mx-auto">
                                    <div class="p-4 mb-4 text-sm text-red-700   bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                                    {{$message}}
                                    </div>
                                </div>
                            @enderror -->


                            




                            <div class="mb-6 w-1/2 mx-auto">
                                <button type="submit" 
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 mt-3 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create</button>
                            </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
