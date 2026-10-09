@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand name="مجمع الهامة الشرعي التعليمي" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-9 items-center justify-center rounded-xl bg-emerald-700 text-amber-300 shadow-xs dark:bg-emerald-800">
            <x-app-logo-icon class="size-6 text-amber-300 dark:text-amber-200" />
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand name="مجمع الهامة الشرعي التعليمي" {{ $attributes }}>
        <x-slot name="logo" class="flex aspect-square size-9 items-center justify-center rounded-xl bg-emerald-700 text-amber-300 shadow-xs dark:bg-emerald-800">
            <x-app-logo-icon class="size-6 text-amber-300 dark:text-amber-200" />
        </x-slot>
    </flux:brand>
@endif
