@props(['type' => 'info'])

<div {{ $attributes->merge(['class' => "alert alert-$type"]) }}>
    {{ $slot }}
</div>

<x-alert type="sukses">Data berhasil disimpan</x-alert>
<x-harga-produk :nilai="$p['harga']":diskon="true" />