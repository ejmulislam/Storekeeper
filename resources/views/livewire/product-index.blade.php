<div>
    {{-- product index table --}}
    <table class="w-full table-auto wrap mb-4">
        <tr class=" bg-gray-300 border border-gray-100 text-center">
            <th class="p-4 py-2 border border-gray-100 rounded">Name</th>
            <th class=" p-4 py-2 border border-gray-100 rounded">Price</th>
            <th class="p-4 py-2  border border-gray-100 rounded">Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr class="bg-gray-200 border border-gray-100 text-center rounded">
                <td class="p-4 py-4 border border-gray-100  text-left">{{ $product->name }}</td>
                <td class="p-4 py-4 border border-gray-100 ">{{ $product->price }}</td>
                <td class="p-4 py-4 border border-gray-100 ">
                    <a href="{{ route('products.edit', $product->id) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        Edit
                    </a>

                    {{-- delete form --}}
                    <form wire:submit.prevent="delete({{ $product->id }})" wire:click="return confirm('Are you sure?')" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                            type="submit"
                        >
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
        {{ $products->links() }}
</div>
