<x-layouts::app :title="__('User')">
    <flux:heading size="xl">Daftar User</flux:heading>
    <flux:subheading class="mb-4">Daftar User yang terdaftar di sistem</flux:subheading>

    <livewire:user-table />
</x-layouts::app>
