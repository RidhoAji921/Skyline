@extends('admin.layouts.main')


@section('content')

<div class="flex flex-col gap-3">
    <div class="container mx-auto px-4 py-4 border-black border rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Video Pembangunan</h2>
        <form>
            @csrf
            <div class="mb-4">
                <label for="youtube_link" class="block text-gray-700 font-bold mb-2">Judul Section</label>
                <input type="url" id="youtube_link" name="youtube_link" class="border rounded w-full py-2 px-3 text-gray-700" placeholder="Judul">
            </div>
            
            <div class="mb-4">
                <label for="youtube_link" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
                <input type="url" id="youtube_link" name="youtube_link" class="border rounded w-full py-2 px-3 text-gray-700" placeholder="Deskripsi">
            </div>
            
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Simpan
                </button>
            </div>
        </form>
        
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple-style">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="https://via.placeholder.com/100" alt="Style Category 1" class="w-20 h-20 object-cover">
                        </td>
                        <td>Style Category 1</td>
                        <td>Rp60.000</td>
                        <td>Deskripsi singkat untuk Style Category 1.</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="1" 
                                data-title="Style Category 1"
                                data-price="10.00"
                                data-description="Deskripsi singkat untuk Style Category 1"
                                data-image="https://via.placeholder.com/100">Edit</button>
    
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-1" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <img src="https://via.placeholder.com/100" alt="Style Category 2" class="w-20 h-20 object-cover">
                        </td>
                        <td>Style Category 2</td>
                        <td>Rp50.000</td>
                        <td>Deskripsi singkat untuk Style Category 2.</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="2" 
                                data-title="Style Category 2"
                                data-price="20.00"
                                data-description="Deskripsi singkat untuk Style Category 2"
                                data-image="https://via.placeholder.com/100">Edit</button>
    
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-2" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <img src="https://via.placeholder.com/100" alt="Style Category 3" class="w-20 h-20 object-cover">
                        </td>
                        <td>Style Category 3</td>
                        <td>Rp80.000</td>
                        <td>Deskripsi singkat untuk Style Category 3.</td>
                        <td class="flex justify-between items-start gap-3">
                            <button class="px-3 py-2 bg-gray-300 font-semibold rounded-lg text-white mr-3 edit-button-style"
                                data-id="3" 
                                data-title="Style Category 3"
                                data-price="30.00"
                                data-description="Deskripsi singkat untuk Style Category 3"
                                data-image="https://via.placeholder.com/100">Edit</button>    
                            <!-- Form untuk penghapusan -->
                            <form id="delete-form-3" action="#" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="editModal-style" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg w-1/3">
            <h2 class="text-2xl font-bold mb-4">Edit Price Card</h2>
            <form id="editCategoryForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="editImage" class="block text-gray-700 font-bold mb-2">Image:</label>
                    <input type="file" id="editImage" name="image" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="editTitle" class="block text-gray-700 font-bold mb-2">Title:</label>
                    <input type="text" id="editTitle" name="title" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="editPrice" class="block text-gray-700 font-bold mb-2">Price:</label>
                    <input type="text" id="editPrice" name="price" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Rp0,00">
                </div>
                <div class="mb-4">
                    <label for="editDescription" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
                    <div id="editDescription" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <p>Deskripsi awal konten.</p>
                    </div>
                </div>
                <div class="flex items-center justify-between">
                    <button type="button" id="closeEditModalButton" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Batal</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
        <script>
        let editorInstance; // Variabel untuk menyimpan instance editor
    
        document.addEventListener('DOMContentLoaded', function () {
            // Inisialisasi DataTable
            var dataTable = new simpleDatatables.DataTable("#datatablesSimple-style");
    
            // Event listener untuk tombol Edit
            document.body.addEventListener('click', function (e) {
                if (e.target && e.target.classList.contains('edit-button-style')) {
                    // Ambil data dari tombol edit
                    const categoryId = e.target.getAttribute('data-id');
                    const categoryTitle = e.target.getAttribute('data-title');
                    const categoryPrice = e.target.getAttribute('data-price');
                    const categoryDescription = e.target.getAttribute('data-description');
    
                    // Isi form modal dengan data yang diambil
                    document.getElementById('editTitle').value = categoryTitle;
                    document.getElementById('editPrice').value = formatRupiah(categoryPrice);
                    
                    // Hapus instance CKEditor sebelumnya jika ada
                    if (editorInstance) {
                        editorInstance.destroy();
                    }
    
                    // Set konten CKEditor 5
                    const editorElement = document.querySelector('#editDescription');
                    editorElement.innerHTML = categoryDescription;
    
                    // Inisialisasi CKEditor 5
                    ClassicEditor
                        .create(editorElement)
                        .then(editor => {
                        editorInstance = editor;

                        // Set tinggi awal saat inisialisasi
                        editor.ui.view.editable.element.style.minHeight = '100px';
                        editor.ui.view.editable.element.style.height = '100px';

                        // Pastikan tinggi tidak berubah saat fokus atau blur
                        editor.ui.focusTracker.on('change:isFocused', (evt, name, isFocused) => {
                            if (isFocused) {
                                editor.ui.view.editable.element.style.minHeight = '100px';
                                editor.ui.view.editable.element.style.height = '100px';
                            } else {
                                // Jika diperlukan, tambahkan logika untuk saat blur
                                editor.ui.view.editable.element.style.minHeight = '100px';
                                editor.ui.view.editable.element.style.height = '100px';
                            }
                        });
                    })
                        .catch(error => {
                            console.error(error);
                        });
    
                    // Set action form dengan ID kategori yang benar
                    document.getElementById('editCategoryForm').action = `/admin/dashboard/pages/home/style-category-up/${categoryId}`;
    
                    // Tampilkan modal
                    document.getElementById('editModal-style').classList.remove('hidden');
                }
            });
    
            // Event listener untuk tombol Batal
            document.getElementById('closeEditModalButton').addEventListener('click', function () {
                document.getElementById('editModal-style').classList.add('hidden');
            });
        });
    
        // Pastikan nilai dari CKEditor masuk ke dalam form saat disubmit
        document.getElementById('editCategoryForm').addEventListener('submit', function (e) {
            const description = editorInstance.getData(); // Ambil data dari CKEditor
            const textarea = document.createElement('textarea');
            textarea.name = 'description';
            textarea.value = description;
            textarea.style.display = 'none'; // Sembunyikan textarea
            this.appendChild(textarea); // Tambahkan textarea ke dalam form
        });
    
        // Fungsi untuk memformat input price menjadi format Rupiah
        function formatRupiah(angka, prefix = "Rp") {
            const numberString = angka.replace(/[^,\d]/g, '').toString();
            const split = numberString.split(',');
            const sisa = split[0].length % 3;
            let rupiah = split[0].substr(0, sisa);
            const ribuan = split[0].substr(sisa).match(/\d{3}/gi);
    
            if (ribuan) {
                const separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
    
            rupiah = split[1] !== undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix + rupiah;
        }
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var dataTable = new simpleDatatables.DataTable("#datatablesSimple-style");
    });

    document.addEventListener('DOMContentLoaded', function () {
        // Event delegation pada container
        const container = document.querySelector('body');

        container.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('edit-button-style')) {
                // Ambil ID dan nama dari tombol yang diklik
                const categoryId = e.target.getAttribute('data-id');
                const categoryName = e.target.getAttribute('data-name');

                // Isi input dengan data yang diambil
                const editNameInput = document.getElementById('editName-style');
                const editForm = document.getElementById('editCategoryForm-style');
                const editModal = document.getElementById('editModal-style');

                editNameInput.value = categoryName;
                editForm.action = `/admin/dashboard/pages/home/style-category-up/${categoryId}`;

                // Tampilkan modal dengan menghapus class 'hidden'
                editModal.classList.remove('hidden');
            }
        });

        // Tutup modal ketika tombol 'Batal' diklik
        document.getElementById('closeEditModalButton').addEventListener('click', function () {
            const editModal = document.getElementById('editModal-style');
            editModal.classList.add('hidden');
        });

        // Event listener untuk tombol hapus
        document.addEventListener('click', function (e) {
            if (e.target && e.target.classList.contains('delete-button-style')) {
                const categoryId = e.target.getAttribute('data-id');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data ini akan dihapus secara permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + categoryId).submit();
                    }
                });
            }
        });
    });
</script>
    
    
@endsection