<div id="riwayat-pasangan" class="tab-pane active" role="tabpanel" aria-labelledby="riwayat-pasangan-tab">
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
                    <th class="whitespace-nowrap">Status Nikah</th>
                    <th class="whitespace-nowrap">Pekerjaan</th>
                    <th class="whitespace-nowrap">Pasangan Ke</th>
                    <th class="whitespace-nowrap">Akta Menikah</th>
                    <th class="whitespace-nowrap">Tanggal Menikah</th>
                    <th class="whitespace-nowrap">Dokumen</th>
                    <th class="whitespace-nowrap">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Nama Pasangan</td>
                    <td>Menikah</td>
                    <td>Non PNS</td>
                    <td>1</td>
                    <td>1234</td>
                    <td>07-11-2020</td>
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