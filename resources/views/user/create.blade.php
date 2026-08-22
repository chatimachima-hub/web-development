<x-layouts::app :title="__('User')">
    <flux:heading size="xl">Tambah user</flux:heading>
    <flux:subheading class="mb-4">Form untuk menambah user baru ke sistem</flux:subheading>

    <flux:card class="space-y-6">
        <div>
            <flux:button variant="primary" href="{{ route('user') }}" wire:navigate icon="arrow-left">
                kembali
            </flux:button>
        </div>



        <form action="{{ route('user.store') }}" method="POST" class="space-y-6">
            @csrf

            <flux:field>
                <flux:label>nama lengkap</flux:label>
                <flux:description>Nama Lengkap Pengguna.</flux:description>
                <flux:input name="name" require />
                <flux:error name="name" />
            </flux:field>
            <flux:field>
                <flux:label>Email</flux:label>
                <flux:description>Alamat Email Pengguna.</flux:description>
                <flux:input name="email" type="email" require />
                <flux:error name="email" />
            </flux:field>
            <flux:field>
                <flux:label>Password</flux:label>
                <flux:description>Password untuk akun pengguna.</flux:description>
                <flux:input name="password" type="password" require viewable />
                <flux:error name="password" />
            </flux:field>

            <flux:field>
                <flux:label>konfirmasi Password</flux:label>
                <flux:description>konfirmasi Password untuk akun pengguna.</flux:description>
                <flux:input name="password_confirmation" type="password" require viewable />
                <flux:error name="password_confirmation" />
            </flux:field>

            <flux:button type="submit" variant="primary" color="blue">
                tambah user
            </flux:button>
        </form>
    </flux:card>
</x-layouts::app>
