<div>
    <div class="px-2 py-3">
        <h1 class="text-xl font-semibold text-gray-900">Users</h1>
        <p class="mt-2 text-sm text-gray-700">A list of all the users in your application including their name and email.</p>
    </div>

    <div class="py-6">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <x-blaze::table>
                <x-slot name="head">
                    <tr>
                        <x-blaze::table-heading
                            wire:click.prevent="sortBy('id')"
                            sortable
                            :direction="$sortField === 'id' ? $sortDirection : null">
                            ID
                        </x-blaze::table-heading>
                        <x-blaze::table-heading
                            wire:click.prevent="sortBy('name')"
                            sortable
                            :direction="$sortField === 'name' ? $sortDirection : null">
                            Name
                        </x-blaze::table-heading>
                        <x-blaze::table-heading
                            wire:click.prevent="sortBy('email')"
                            sortable
                            :direction="$sortField === 'email' ? $sortDirection : null">
                            Email
                        </x-blaze::table-heading>
                        <x-blaze::table-heading>
                            <span class="sr-only">Actions</span>
                        </x-blaze::table-heading>
                    </tr>
                </x-slot>
                <x-slot name="body">
                    @foreach ($users as $user)
                        <tr>
                            <x-blaze::table-cell>{{ $user->id }}</x-blaze::table-cell>
                            <x-blaze::table-cell>{{ $user->name }}</x-blaze::table-cell>
                            <x-blaze::table-cell>{{ $user->email }}</x-blaze::table-cell>
                            <x-blaze::table-cell>
                                <div class="flex items-center justify-end space-x-3">
                                    <a href="" class="text-blue-600 hover:text-blue-900">Abilities</a>
                                    <a href="" class="text-red-600 hover:text-red-900">Suspend</a>
                                </div>
                            </x-blaze::table-cell>
                        </tr>
                    @endforeach
                </x-slot>
            </x-blaze::table>
        </div>
    </div>
</div>
