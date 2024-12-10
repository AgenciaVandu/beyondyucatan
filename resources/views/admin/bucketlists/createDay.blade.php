<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar dia a Bucketlist') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form action="{{ route('admin.bucketlists.storeDay', $bucket) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <h1 class="text-lg font-light text-blue-300 text-center">
                                Version Español
                            </h1>
                            <div class="bg-slate-100 p-3 rounded-lg shadow-md">
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="title" :value="__('title')" />
                                    <x-text-input class="w-full" type="text" name="title" placeholder="title"
                                        value="{{ old('title') }}" />
                                    @error('title')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="description" :value="__('Descripcion corta')" />
                                    <textarea id="ckcontent"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3"
                                        type="text" name="description" placeholder="Descripcion corta">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- inputs ingles --}}
                            <h1 class="text-lg font-light text-blue-300 mt-2 text-center">
                                Version Inglés
                            </h1>
                            <div class="bg-red-50 p-3 rounded-lg shadow-md mb-2">
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="title" :value="__('title')" />
                                    <x-text-input class="w-full" type="text" name="title_en" placeholder="title"
                                        value="{{ old('title_en') }}" />
                                    @error('title_en')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="description" :value="__('Descripcion corta')" />
                                    <textarea id="ckcontent2"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3"
                                        type="text" name="description_en" placeholder="Descripcion corta">{{ old('description_en') }}</textarea>
                                    @error('description_en')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="icons" :value="__('Iconos')" />
                                <div class="flex items-center space-x-4">
                                    @foreach ($icons as $icon)
                                        <div class="text-center">
                                            <img src="{{ asset($icon->img) }}" alt="">
                                            <x-text-input type="checkbox" name="icons[]" value="{{ $icon->id }}" />
                                        </div>
                                    @endforeach
                                </div>
                                @error('icons')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="image" :value="__('Imagen')" />
                                <input type="file"
                                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="image" accept="image/*">
                                @error('image')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="hidden" name="bucketlist" value="{{ $bucket->id }}">
                            <div class="flex justify-end mt-4">
                                <x-primary-button>Crear</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
