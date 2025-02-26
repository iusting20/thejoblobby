@php
    $user = auth()->user();
    $roles = $user->roles->pluck('name')->toArray();
@endphp

@if(count($roles) > 0)
    <div class="px-4 py-3">
        <p class="text-xs text-gray-500 dark:text-gray-400">Role</p>
        <div class="mt-1 flex gap-1">
            @foreach($roles as $role)
                <span class="inline-flex items-center justify-center min-h-6 px-2 py-0.5 text-xs font-medium tracking-tight rounded-xl whitespace-normal bg-primary-500 text-white">
                    {{ $role }}
                </span>
            @endforeach
        </div>
    </div>
@endif 