<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Experiencias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form action="{{ route('admin.experiences.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <h1 class="text-lg font-light text-blue-300 text-center">
                                Version Español
                            </h1>
                            <div class="bg-slate-100 p-3 rounded-lg shadow-md">
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="title" :value="__('Titulo')" />
                                    <x-text-input class="w-full" type="text" name="titulo" placeholder="titulo"
                                        value="{{ old('titulo') }}" />
                                    @error('titulo')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="lightdescription" :value="__('Descripcion corta')" />
                                    <textarea id="ckcontent"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3"
                                        type="text" name="lightdescription" placeholder="Descripcion corta">{{ old('lightdescription') }}</textarea>
                                    @error('lightdescription')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="longdescription" :value="__('Descripcion larga')" />
                                    <textarea id="ckcontent2"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3"
                                        type="text" name="longdescription" placeholder="Descripcion larga">{{ old('longdescription') }}</textarea>
                                    @error('longdescription')
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
                                    <x-input-label class="w-full mb-1" for="title" :value="__('Titulo')" />
                                    <x-text-input class="w-full" type="text" name="titulo_en" placeholder="titulo"
                                        value="{{ old('titulo') }}" />
                                    @error('titulo')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="lightdescription_en" :value="__('Descripcion corta')" />
                                    <textarea id="ckcontent3"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3"
                                        type="text" name="lightdescription_en" placeholder="Descripcion corta">{{ old('lightdescription_en') }}</textarea>
                                    @error('lightdescription_en')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="longdescription_en" :value="__('Descripcion larga')" />
                                    <textarea id="ckcontent4"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3"
                                        type="text" name="longdescription_en" placeholder="Descripcion larga">{{ old('longdescription_en') }}</textarea>
                                    @error('longdescription_en')
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
                                <x-input-label class="w-full mb-1" for="categories" :value="__('Categorias')" />
                                <select
                                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="categories" :value="__('Estado')" />
                                <select
                                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="state_id">
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
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
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="imagedestacada" :value="__('Imagen destacada')" />
                                <input type="file"
                                    class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    name="imagedestacada" accept="image/*">
                                @error('imagedestacada')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <x-input-label class="w-full mb-1" for="price" :value="__('Precio')" />
                                <x-text-input class="w-full" type="text" name="price" placeholder="$100.00"
                                    value="{{ old('price') }}" />
                                @error('price')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

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
