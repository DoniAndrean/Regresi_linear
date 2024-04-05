<div class="pull-right float-end float-right d-flex">
    <div class="mx-3">
        <a href="/kandidat/personal-data/{{ $id }}"
            class="{{ Request::is('kandidat/personal-data/*') ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ Request::is('kandidat/personal-data/*') ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">1.</span>
            Personal Data
        </a>
    </div>
    <div class="mx-3">
        <a href="/kandidat/tambah-bahasa/{{ $id }}"
            class="{{ Request::is('kandidat/tambah-bahasa/*') ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="text-black {{ Request::is('kandidat/tambah-bahasa/*') ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">2.</span>
            Bahasa
        </a>
    </div>
    <div class="mx-3">
        <a href="/kandidat/tambah-pendidikan/{{ $id }}"
            class="{{ Request::is('kandidat/tambah-pendidikan/*') ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ Request::is('kandidat/tambah-pendidikan/*') ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">3.</span>
            Pendidikan
        </a>
    </div>
    <div class="mx-3">
        <a href="/kandidat/tambah-keluarga/{{ $id }}"
            class="{{ Request::is('kandidat/tambah-keluarga/*') ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ Request::is('kandidat/tambah-keluarga/*') ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">4.</span>
            Keluarga
        </a>
    </div>
    <div class="mx-3">
        <a href="/kandidat/tambah-kontak-darurat/{{ $id }}"
            class="{{ Request::is('kandidat/tambah-kontak-darurat/*') ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ Request::is('kandidat/tambah-kontak-darurat/*') ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">5.</span>
            Kontak Darurat
        </a>
    </div>
    <div class="mx-3">
        <a href="/kandidat/tambah-pengalaman/{{ $id }}"
            class="{{ Request::is('kandidat/tambah-pengalaman/*') ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ Request::is('kandidat/tambah-pengalaman/*') ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">6.</span>
            Pengalaman
        </a>
    </div>
    <div class="mx-3">
        <a href="/kandidat/tambah-lainnya/{{ $id }}"
            class="{{ Request::is('kandidat/tambah-lainnya/*') ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="rounded-circle {{ Request::is('kandidat/lainnya/*') ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">7.</span>
            Lainnya
        </a>
    </div>
</div>
