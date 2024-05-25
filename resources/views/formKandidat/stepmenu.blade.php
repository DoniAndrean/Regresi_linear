<div class="d-flex">
    <div class="mx-3">
        <a href="{{ route('form.personal', $id) }}"
            class="{{ $title == 'personal' ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ $title == 'personal' ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">1.</span>
            Personal Data
        </a>
    </div>
    <div class="mx-3">
        <a href="{{ route('form.bahasa', $id) }}"
            class="{{ $title == 'bahasa' ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="text-black {{ $title == 'bahasa' ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">2.</span>
            Bahasa
        </a>
    </div>
    <div class="mx-3">
        <a href="{{ route('form.pendidikan', $id) }}"
            class="{{ $title == 'pendidikan' ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ $title == 'pendidikan' ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">3.</span>
            Pendidikan
        </a>
    </div>
    <div class="mx-3">
        <a href="{{ route('form.keluarga', $id) }}"
            class="{{ $title == 'keluarga' ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ $title == 'keluarga' ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">4.</span>
            Keluarga
        </a>
    </div>
    <div class="mx-3">
        <a href="{{ route('form.kontak', $id) }}"
            class="{{ $title == 'kontak' ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ $title == 'kontak' ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">5.</span>
            Kontak Darurat
        </a>
    </div>
    <div class="mx-3">
        <a href="{{ route('form.pengalaman', $id) }}"
            class="{{ $title == 'pengalaman' ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="{{ $title == 'pengalaman' ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">6.</span>
            Pengalaman
        </a>
    </div>
    <div class="mx-3">
        <a href="{{ route('form.lainnya', $id) }}"
            class="{{ $title == 'lainnya' ? 'fw-medium text-warning' : 'text-secondary' }}">
            <span class="rounded-circle {{ $title == 'lainnya' ? 'bg-warning' : 'bg-secondary' }}"
                style="border-radius:100px;padding:6px 9px;width:100px;height:50px;">7.</span>
            Lainnya
        </a>
    </div>
</div>
