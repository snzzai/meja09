<div class="p-6 max-w-3xl mx-auto bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold mb-6 text-center">{{ $id ? 'Edit Siswa' : 'Tambah Siswa' }}</h2>

    <form wire:submit.prevent="save" class="space-y-6">
        <!-- Nama -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" wire:model="nama" class="w-full border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- NIS -->
        <div>
            <label class="block text-sm font-medium text-gray-700">NIS</label>
            <input type="text" wire:model="nis" class="w-full border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            @error('nis') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Gender -->
        <div>
            <label class="block text-sm font-medium text-gray-700 my-2">Gender</label>
            <flux:radio.group wire:model="gender">
                <flux:radio value="L" label="Laki Laki" />
                <flux:radio value="P" label="Perempuan" />
            </flux:radio.group>
            @error('gender') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Alamat -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Alamat</label>
            <textarea wire:model="alamat" class="w-full border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" rows="2"></textarea>
            @error('alamat') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Kontak -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Kontak</label>
            <input type="text" wire:model="kontak" class="w-full border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            @error('kontak') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Email -->
        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" wire:model="email" class="w-full border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Status PKL -->
        <div>
            <label class="block text-sm font-medium text-gray-700 my-2">Status PKL</label>
            <flux:radio.group wire:model="status_pkl">
                <flux:radio value="no" label="Belum diterima PKL" />
                <flux:radio value="P" label="Sudah diterima PKL" />
            </flux:radio.group>
            @error('status_pkl') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-between">
            <!-- Cancel Button -->
            <a href="{{ route('siswa') }}" class="inline-block bg-gray-500 text-white px-6 py-3 rounded-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200">
                Cancel
            </a>

            <!-- Submit Button -->
            <button type="submit" class="bg-blue-600 cursor-pointer text-white px-6 py-3 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
                Simpan
            </button>
        </div>
    </form>
</div>
