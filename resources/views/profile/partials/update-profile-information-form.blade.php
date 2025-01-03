<section>
    <header>
        <h2 class="text-lg font-medium text-white">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    @if (session('success'))
        <div class="bg-green text-white border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                          required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                          required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="bio" :value="__('Bio')" />
            <textarea
                id="bio"
                name="bio"
                class="mt-1 block w-full rounded-md border border-gray-700 bg-white-800 text-black shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 p-2"
                placeholder="Enter your bio here"
            >{{ old('bio', $user->bio) }}</textarea>
        </div>

        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />
            <input id="avatar" name="avatar" type="file"
                   class="mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />

            @if ($user->avatar)
                <div class="mt-2">
                    <img src="{{ Storage::url($user->avatar) }}" alt="Avatar"style="width: 200px;height: 200px" 
                         class="w-2 h-2 rounded-full object-cover" />
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Update Profile') }}</x-primary-button>
        </div>
    </form>
</section>
