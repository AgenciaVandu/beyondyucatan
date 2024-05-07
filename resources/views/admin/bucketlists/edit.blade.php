<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Bucketlist') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <x-nav-link class="bg-indigo-900 py-1 px-4 text-white hover:text-gray-200 cursor-pointer"
                    href="{{ route('admin.bucketlists.addDay', $bucket) }}">Agregar Dia</x-nav-link>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @isset($days)
                        @foreach ($days as $day)
                            <div class="flex">
                                <img src="{{ asset($day->image) }}" alt="" class="w-20 h-20">
                                <div>
                                    <h2 class="text-base font-semibold leading-6 text-gray-900">{{ $day->title }}</h2>
                                    <p class="mt-2 text-sm text-gray-700">{{ $day->description }}</p>
                                    <a href="{{ route('admin.bucketlists.editDay',$day)}}"> Edit</a>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                    <div>
                        <form action="{{ route('admin.bucketlists.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="title" :value="__('title')" />
                                <x-text-input class="w-full" type="text" name="title" placeholder="title"
                                    value="{{ $bucket->title }}" />
                                @error('title')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="description" :value="__('Descripcion corta')" />
                                <textarea class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    rows="3" type="text" name="description" placeholder="Descripcion corta">{{ $bucket->description }}</textarea>
                                @error('description')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="longdescription" :value="__('Descripcion larga')" />
                                <textarea class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    rows="3" type="text" name="longdescription" placeholder="Descripcion larga">{{ $bucket->longdescription }}</textarea>
                                @error('longdescription')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="days" :value="__('Dias')" />
                                <x-text-input class="w-full" type="text" name="days" placeholder="days"
                                    value="{{ $bucket->days }}" />
                                @error('days')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="type" :value="__('Tipo')" />
                                <select
                                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="typetour">
                                    <option value="type1">type 1</option>
                                    <option value="type2">type 2</option>
                                    <option value="type3">type 3</option>
                                    <option value="type4">type 4</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="image" :value="__('Imagen')" />
                                <input type="file"
                                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="image" accept="image/*">
                                <img src="{{ asset($bucket->image) }}" alt="">
                                @error('image')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="price" :value="__('Precio')" />
                                <x-text-input class="w-full" type="text" name="price" placeholder="$100.00"
                                    value="{{ $bucket->price }}" />
                                @error('price')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex justify-end mt-4">
                                <x-primary-button>Edit</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
