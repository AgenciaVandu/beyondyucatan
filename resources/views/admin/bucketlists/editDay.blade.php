<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar dia a Bucketlist') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form action="{{ route('admin.bucketlists.updateDay', $day) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h1 class="text-lg font-light text-blue-300 text-center">
                                Version Español
                            </h1>
                            <div class="bg-slate-100 p-3 rounded-lg shadow-md">
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="title" :value="__('title')" />
                                    <x-text-input class="w-full" type="text" name="title" placeholder="title"
                                        value="{{ $day->title }}" />
                                    @error('title')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="description" :value="__('Descripcion corta')" />
                                    <textarea id="ckcontent"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3"
                                        type="text" name="description" placeholder="Descripcion corta">{{ $day->description }}</textarea>
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
                                        value="{{ $day->title_en }}" />
                                    @error('title_en')
                                        <span class="text-xs text-red-600">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <x-input-label class="w-full mb-1" for="description" :value="__('Descripcion corta')" />
                                    <textarea id="ckcontent2"
                                        class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3"
                                        type="text" name="description_en" placeholder="Descripcion corta">{{ $day->description_en }}</textarea>
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
                                            <input type="checkbox" name="icons[]" value="{{ $icon->id }}"
                                                @foreach ($arrayicons as $item) @if ($item->pivot->icon_id == $icon->id) checked  @endif @endforeach />
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
                                @if ($day->image)
                                    <img src="{{ asset($day->image) }}"
                                        class="w-full h-72 object-cover object-center rounded-md shadow-sm">
                                @endif
                                @error('image')
                                    <span class="text-xs text-red-600">{{ $message }}</span>
                                @enderror
                            </div>
                            <input type="hidden" name="day" value="{{ $day->id }}">
                            <div class="flex justify-end mt-4">
                                <x-primary-button>Editar</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
