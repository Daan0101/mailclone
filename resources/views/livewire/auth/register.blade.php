<div>
    @if ($errors->any())
        <div class="fixed top-4 left-1/2 -translate-x-1/2 bg-red-600 text-white px-4 py-2 rounded-md shadow-md">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="flex flex-col items-center justify-center min-h-screen" wire:submit.prevent="register">
        @csrf
        <h1 class="text-white text-xl">Create your account</h1>
        <p class="text-white/60 text-sm">Already have an account? login</p>
        <div class="mt-4 flex flex-col gap-3 w-full max-w-sm">
            <div class="flex flex-col gap-1">
                <label for="email" class="block text-sm/6 font-medium text-white">Email<span
                        class="text-purple-500 ml-1">*</span></label>
                <div>
                    <div
                        class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10">
                        <input id="email" type="text" name="email" wire:model="email"
                            class="block min-w-0 grow bg-transparent py-1.5 p-1 text-sm text-white focus:outline-none"
                            required />
                        <div class="shrink-0 text-white select-none text-sm pr-3">@privmail.lol</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-1">
                <label for="password" class="text-sm text-white">Password<span
                        class="text-purple-500 ml-1">*</span></label>
                <input type="password" id="password" name="password" wire:model="password"
                    class="bg-white/5 border border-white/10 rounded-md py-1 px-2 focus:outline-none text-sm text-white"
                    required>
            </div>

            {{-- <div class="flex flex-col gap-1">
                <label for="invite" class="text-sm text-white">Invite<span
                        class="text-purple-500 ml-1">*</span></label>
                <input type="text" id="invite" name="invite" wire:model="invite"
                    class="bg-white/5 border border-white/10 rounded-md py-1 px-2 focus:outline-none text-sm text-white"
                    required>
            </div> --}}

            <button
                class="border border-[#8b5cf6] bg-[rgba(139,92,246,0.2)] text-white/80 py-1.5 px-1 rounded-md hover:bg-[rgba(139,92,246,0.3)] hover:cursor-pointer"
                type="submit">Create Account</button>
        </div>
    </form>
</div>
