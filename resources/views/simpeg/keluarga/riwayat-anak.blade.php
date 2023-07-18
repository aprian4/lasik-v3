<div id="riwayat-anak" class="tab-pane" role="tabpanel" aria-labelledby="riwayat-anak-tab">
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <div class="mt-2 xl:mt-0">
                <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16">Tambah</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th class="whitespace-nowrap" style="width: 5%;">No.</th>
                    <th class="whitespace-nowrap">Nama</th>
                    <th class="whitespace-nowrap">Jenis Kelamin</th>
                    <th class="whitespace-nowrap">Tanggal Lahir</th>
                    <th class="whitespace-nowrap">Kandung</th>
                    <th class="whitespace-nowrap">Dokumen</th>
                    <th class="whitespace-nowrap">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Nama Anak</td>
                    <td>Laki-laki</td>
                    <td>Tanggal Lahir</td>
                    <td>Kandung</td>
                    <td>
                        <img alt="" class="w-9" src="{{ url('images/pdf.png') }}">
                    </td>
                    <td>
                        <button type="button" class="btn btn-rounded-warning">Edit</button>
                        <button type="button" class="btn btn-rounded-danger">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END: HTML Table Data -->
</div>