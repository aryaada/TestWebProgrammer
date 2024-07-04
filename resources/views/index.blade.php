<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Web Programmer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row mt-2 justify-content-end">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#tambahDataModal">
                Tambah Data
            </button>
        </div>

        <div class="row mt-2">
            <table class="table" id="tabelPenjualan">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Dekripsi</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fungsi perulangan jika menggunakan compact pada controller untuk menampilkan data penjualan -->
                    {{-- @foreach ($data as $a)
                        <tr data-id="{{ $a->id }}">
                            <td class="nama_produk">{{ $a->nama_produk }}</td>
                            <td class="deskripsi">{{ $a->deskripsi }}</td>
                            <td class="stok">{{ $a->stok }}</td>
                            <td class="harga">{{ $a->harga }}</td>
                            <td>
                                <!-- Tombol Edit -->
                                <button class="btn btn-sm btn-warning editBtn"
                                    data-id="{{ $a->id }}">Edit</button>

                                <button class="btn btn-sm btn-primary detailBtn"
                                    data-id="{{ $a->id }}">Detail</button>

                                <button class="btn btn-sm btn-danger deleteBtn"
                                    data-id="{{ $a->id }}">Hapus</button>

                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Data Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody id="detailBody">
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahDataModal" tabindex="-1" role="dialog"
        aria-labelledby="tambahDataModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Penjualan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formTambahData">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            //=============================== Fungsi Ajax Untuk Menambahkan Data penjualan ====================================
            $('#formTambahData').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '{{ route('penjualan.store') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#tambahDataModal').modal('hide');
                        alert('Data berhasil ditambahkan');

                        reloadTabelPenjualan();
                    },
                    error: function(err) {
                        console.log(err);
                        alert('Terjadi kesalahan, silakan coba lagi.');
                    }
                });
            });

            //========================================== Fungsi Untuk Menampilkan data penjualan pada tabel tanpa harus mereload halaman ulang ==============================
            function reloadTabelPenjualan() {
                $.ajax({
                    url: '{{ route('penjualan.data') }}',
                    type: 'GET',
                    success: function(response) {
                        $('#tabelPenjualan tbody').empty();

                        $.each(response.data, function(index, penjualan) {
                            var newRow = '<tr data-id=' + penjualan.id + '>' +
                                '<td class="nama_produk">' + penjualan.nama_produk + '</td>' +
                                '<td class="deskripsi">' + penjualan.deskripsi + '</td>' +
                                '<td class="stok">' + penjualan.stok + '</td>' +
                                '<td class="harga">' + penjualan.harga + '</td>' +
                                '<td>' +
                                '<button class="btn btn-sm btn-warning mr-2 editBtn" data-id="' +
                                penjualan.id + '">Edit</button>' +
                                '<button class="btn btn-sm btn-primary mr-2 detailBtn" data-id="' +
                                penjualan.id + '">Detail</button>' +
                                '<button class="btn btn-sm btn-danger deleteBtn" data-id="' +
                                penjualan.id + '">Hapus</button>' +
                                '</td>' +
                                '</tr>';
                            $('#tabelPenjualan tbody').append(newRow);
                        });
                    },
                    error: function(err) {
                        console.log(err);
                        alert('Terjadi kesalahan saat memuat data penjualan.');
                    }
                });
            }

            //===================================== Menampilkan data pada tabel saat pertama kali halaman dimuat ===============================
            reloadTabelPenjualan();

            //==================================== Fungsi Ajax untuk melakukan edit dan memunculkan modal edit data penjualan ====================================
            $(document).on('click', '.editBtn', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    url: '{{ route('penjualan.edit', ':id') }}'.replace(':id', id),
                    type: 'GET',
                    success: function(response) {
                        $('#nama_produk').val(response.nama_produk);
                        $('#deskripsi').val(response.deskripsi);
                        $('#stok').val(response.stok);
                        $('#harga').val(response.harga);

                        $('#editForm').attr('action', '{{ route('penjualan.update', ':id') }}'
                            .replace(':id', id));
                        $('#editModal').modal('show');
                    },
                    error: function(err) {
                        console.log(err);
                        alert('Terjadi kesalahan, silakan coba lagi.');
                    }
                });
            });

            //================================ Fungsi Ajax untuk menyimpan hasil edit data penjualan ======================================
            $('#editForm').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                var url = $(this).attr('action');
                $.ajax({
                    url: url,
                    type: 'PUT',
                    data: formData,
                    success: function(response) {
                        $('#editModal').modal('hide');
                        alert(response.message);

                        var id = response.penjualan.id;
                        var row = $('tr[data-id="' + id + '"]');
                        row.find('.nama_produk').text(response.penjualan.nama_produk);
                        row.find('.deskripsi').text(response.penjualan.deskripsi);
                        row.find('.stok').text(response.penjualan.stok);
                        row.find('.harga').text(response.penjualan.harga);
                    },
                    error: function(err) {
                        console.log(err);
                        alert('Terjadi kesalahan, silakan coba lagi.');
                    }
                });
            });


            //================================ Fungsi Ajax untuk Menampilkan Modal Detail Data Penjualan ====================================
            $(document).on('click', '.detailBtn', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    url: '{{ route('penjualan.show', ':id') }}'.replace(':id',
                        id),
                    type: 'GET',
                    success: function(response) {
                        $('#detailBody').html('');
                        var html = '';
                        html += '<tr><td>' + response.nama_produk + '</td>';
                        html += '<td>' + response.deskripsi + '</td>';
                        html += '<td>' + response.stok + '</td>';
                        html += '<td>' + response.harga + '</td></tr>';
                        $('#detailBody').html(html);

                        $('#detailModal').modal('show');
                    },
                    error: function(err) {
                        console.log(err);
                        alert('Terjadi kesalahan, silakan coba lagi.');
                    }
                });
            });

            //============================ Fungsi Ajax untuk menghapus data penjualan ===============================
            $(document).on('click', '.deleteBtn', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                if (confirm('Anda yakin ingin menghapus data ini?')) {
                    $.ajax({
                        url: '{{ route('penjualan.delete', ':id') }}'.replace(':id', id),
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert(response.message);

                            var row = $('tr[data-id="' + id + '"]');
                            row.remove();
                        },
                        error: function(err) {
                            console.log(err);
                            alert('Terjadi kesalahan, silakan coba lagi.');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>
