<?php
$judul = 'Ini Adalah Judul Dari Class Component';
?>

<x-halaman-layout :title="$judul">
    <x-slot name="tanggal">19 Januari 2008</x-slot>
    <x-slot name="penulis">Lutfi</x-slot>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias commodi adipisci ut perferendis id animi saepe
        aliquid dicta labore illo?</p>

</x-halaman-layout>
