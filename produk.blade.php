<!-- TODO: tuliskan tampilan view anda disini -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Barang</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-6xl mx-auto bg-white p-6 rounded shadow">
    <!-- Header -->
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-2xl font-bold">Manajemen Barang</h1>
      <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Barang</button>
    </div>

    <!-- Filter -->
    <div class="flex gap-4 mb-6">
      <input type="text" placeholder="Cari nama barang..." class="w-full border px-3 py-2 rounded">
      <select class="border px-3 py-2 rounded">
        <option>Semua Kategori</option>
        <option>Elektronik</option>
        <option>Pakaian</option>
        <!-- Tambahkan kategori lain -->
      </select>
    </div>

    <!-- Form Barang -->
    <div class="mb-6">
      <h2 class="text-xl font-semibold mb-2">Form Barang</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
        <input type="text" placeholder="Nama Barang" class="border px-3 py-2 rounded">
        <input type="text" placeholder="Harga" class="border px-3 py-2 rounded">
        <input type="text" placeholder="Kategori" class="border px-3 py-2 rounded md:col-span-2">
        <textarea placeholder="Deskripsi" class="border px-3 py-2 rounded md:col-span-2" rows="3"></textarea>
      </div>
      <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan</button>
    </div>

    <!-- Tabel Daftar Barang -->
    <div>
      <h2 class="text-xl font-semibold mb-2">Daftar Barang</h2>
      <div class="overflow-x-auto">
        <table class="w-full text-left border">
          <thead class="bg-gray-200">
            <tr>
              <th class="p-2">NAMA</th>
              <th class="p-2">HARGA</th>
              <th class="p-2">DESKRIPSI</th>
              <th class="p-2">KATEGORI</th>
              <th class="p-2">AKSI</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t">
              <td class="p-2">Kipas Angin</td>
              <td class="p-2">Rp 200.000</td>
              <td class="p-2">Kipas angin 3 tingkat kecepatan</td>
              <td class="p-2">Elektronik</td>
              <td class="p-2 space-x-2">
                <button class="bg-yellow-400 px-3 py-1 rounded text-white hover:bg-yellow-500">Edit</button>
                <button class="bg-red-600 px-3 py-1 rounded text-white hover:bg-red-700">Hapus</button>
              </td>
            </tr>
            <!-- Tambah baris lainnya -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-between items-center mt-4 text-sm text-gray-600">
      <span>Menampilkan 1 - 10 dari 35 barang</span>
      <div class="flex gap-1">
        <button class="px-2 py-1 border rounded">&laquo;</button>
        <button class="px-3 py-1 border rounded bg-blue-600 text-white">1</button>
        <button class="px-3 py-1 border rounded">2</button>
        <button class="px-3 py-1 border rounded">3</button>
        <button class="px-3 py-1 border rounded">4</button>
        <button class="px-2 py-1 border rounded">&raquo;</button>
      </div>
    </div>
  </div>
</body>
</html>

