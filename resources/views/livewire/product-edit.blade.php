<div>
    <form wire:submit.prevent="update">
        @csrf

        <div class="space-y-4">
            <div class="flex items-center flex-col gap-2">

                <label class="w-full" for="name">Name</label>
                <input class="w-full p-4 py-2 border border-gray-100 rounded" type="text" id="name" wire:model="name" placeholder="Product Name">
            </div>

            <div class="flex items-center flex-col gap-2">

                <label class="w-full" for="description">Description</label>
                <input class="w-full p-4 py-2 border border-gray-100 rounded" type="text" id="description" wire:model="description" placeholder="Product Description">
            </div>

            <div class="flex items-center flex-col gap-2">

                <label class="w-full" for="image">Image</label>
                <input class="w-full p-4 py-2 border border-gray-100 rounded" type="file" id="image" wire:model="image">
            </div>

            <div class="flex items-center flex-col gap-2">

                <label class="w-full" for="price">Price</label>
                <input class="w-full p-4 py-2 border border-gray-100 rounded" type="float" id="price" wire:model="price" placeholder="Product Price">
            </div>

            <div class="flex items-center flex-col gap-2">

                <label class="w-full" for="quantity">Quantity</label>
                <input class="w-full p-4 py-2 border border-gray-100 rounded" type="number" id="quantity" wire:model="quantity" placeholder="Product Quantity">
            </div>

            <div class="flex  gap-8">
                <div class="flex flex-col gap-2">
                    <label class="w-full" for="status">Status</label>
                    <input class="w-4 h-4 p-4 py-2 border-2 border-gray-700 rounded" type="checkbox" id="status" wire:model="status">
                </div>

                <div class="flex flex-col gap-2">
                    <label class="w-full" for="stock">Stock Status</label>
                    <input class="w-4 h-4 p-4 py-2 border-2 border-gray-700 rounded" type="checkbox" id="stock" wire:model="stock">
                </div>
            </div>


            <div class="space-y-2">
                <label for="category_id" class="w-full">Category</label>
            
                <select id="category_id" wire:model="category_id" class="w-full">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="space-y-2">
                <label for="brand_id" class="w-full">Brand</label>
                <select id="brand_id" wire:model="brand_id" class="w-full">
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit">Update</button>
    </form>
</div>
