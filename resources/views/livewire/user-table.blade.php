<flux:card class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col gap-4 border-b border-gray-200 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <flux:heading size="lg" class="font-semibold">
                Daftar Pengguna
            </flux:heading>

            <flux:subheading class="mt-1 text-sm">
                Daftar pengguna yang terdaftar di sistem.
            </flux:subheading>
        </div>

        <flux:button href="{{ route('user.create') }}" variant="primary" color="blue" icon="plus">
            Tambah Data
        </flux:button>

    </div>
    @if (session('success'))
        <flux:callout variant="success" icon="check-circle" heading="{{ session('success') }}" />
    @endif
    <!-- Table -->
    <div class="overflow-x-auto">

        <table class="w-full divide-y divide-gray-200">

            <thead class="bg-gray-50/80">
                <tr>

                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                        No.
                    </th>

                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                        Nama
                    </th>

                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                        Email
                    </th>

                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                        Dibuat
                    </th>

                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider text-gray-500">
                        Aksi
                    </th>

                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100 ">

                @forelse($users as $user)
                    <tr wire:key="user-{{ $user->id }}" class="transition duration-200 hover:bg-gray-50">

                        <td class="whitespace-nowrap px-6 py-4 text-sm ">
                            {{ $loop->iteration }}
                        </td>

                        <td class="whitespace-nowrap px-6 py-4">

                            <div class="font-medium ">
                                {{ $user->name }}
                            </div>

                        </td>

                        <td class="whitespace-nowrap px-6 py-4 text-sm ">
                            {{ $user->email }}
                        </td>

                        <td class="whitespace-nowrap px-6 py-4 text-sm ">
                            {{ $user->created_at->format('d-m-Y') }}
                        </td>

                        <td class="whitespace-nowrap px-6 py-4 text-center">

                            <div class="flex justify-center gap-2">

                                <flux:button href="{{ route('user.edit', $user->id) }}" variant="primary" color="pink" size="sm" icon="pencil-square">
                                    Edit
                                </flux:button>

                                <form action="{{ route('user.destroy',$user->id) }}" class="inline" method="post"
                                    onsubmit="return confirm('apakah anda yakin ingin menghapus pengguna ini?')">
                                    @csrf
                                    @method('DELETE')

                                <flux:button type="submit" variant="primary" color="rose" size="sm">
                                    Hapus
                                </flux:button>
                                </form>
                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5" class="px-6 py-12 text-center text-sm text-gray-500">

                            Data pengguna belum tersedia.
                            Silakan tambahkan data pengguna baru.

                        </td>

                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>
</flux:card>
