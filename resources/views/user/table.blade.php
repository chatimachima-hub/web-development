<div class="overflow-hidden rounded-2x1 border border-gray-200 shadow-sm">
    <div class="w-full overflow-x-auto">
        <table class="w-full min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-50/80">

                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        No
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Nama
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Email
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Dibuat
                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-600">
                        Aksi
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 b-white">

                <tr class="transition hover:bg-gray-50">
                    @foreach ($users as $user)
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            {{ $loop->iteration }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            {{ $user->name }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            {{ $user->email }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            {{ $user->created_at }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            <flux:button size="xs" variant="primary" color="blue">Extra <small>
                            </flux:button>

                            <flux:button size="xs" variant="primary" color="red">Standar <small>
                            </flux:button>

                            <tbody class="divide-y divide-gray-200 b-white">

                        </td>
                    @endforeach

                </tr>

            </tbody>
        </table>
    </div>
</div>

<div class="overflow-hidden rounded-2x1 border border-gray-200 shadow-sm">
    <table class="w-full overflow-x-auto">
                <tbody class="divide-y divide-gray-200 b-white">

                <tr class="transition hover:bg-gray-50">
                    @foreach ($users as $user)
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            {{ $loop->iteration }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            {{ $user->name }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            {{ $user->email }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            {{ $user->created_at }}
                        </td>
                        <td class="whitespace-nowrap px-6 py-4 text-gray-500">
                            <flux:button size="xs" variant="primary" color="blue">Extra <small>
                            </flux:button>

                            <flux:button size="xs" variant="primary" color="red">Standar <small>
                            </flux:button>

                            <tbody class="divide-y divide-gray-200 b-white">

                        </td>
                    @endforeach

                </tr>

            </tbody>
        </table>
    </div>
</div>




