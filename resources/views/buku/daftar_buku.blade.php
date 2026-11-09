@extends('layouts.perpus')

@section('title', 'Daftar Buku')

@section('content')
    <section class="mx-auto mt-3 max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

        {{-- Header halaman --}}
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Daftar Buku</h2>
            <p class="mt-2 text-gray-500">
                Temukan dan lihat koleksi buku Perpustakaan Ribuan Kata.
            </p>
        </div>

        {{-- Daftar Card Buku --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @forelse ($bukus as $buku)
                <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="p-6">

                        <div class="mb-4 flex items-start justify-between gap-3">
                            <span class="rounded-full bg-red-50 px-3 py-1 text-xs font-semibold text-[#a82a2a]">
                                {{ $buku->kategori->nama ?? 'Tanpa Kategori' }}
                            </span>

                            <span class="text-sm text-gray-400">
                                {{ $buku->tahun_terbit ?? '-' }}
                            </span>
                        </div>

                        <h3 class="mb-2 text-xl font-bold text-gray-800">
                            {!! $buku->judul !!}
                        </h3>

                        <p class="mb-6 text-sm text-gray-500">
                            Penulis: {{ $buku->penulis ?? '-' }}
                        </p>

                        <div class="border-t border-gray-100 pt-4">
                            <a href="{{ route('buku.detail', $buku->id) }}"
                                class="block w-full rounded-lg bg-[#a82a2a] px-4 py-2.5 text-center text-sm font-semibold text-white transition hover:bg-[#872020]">
                                Lihat Detail
                            </a>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-span-full rounded-xl border border-gray-200 bg-white py-12 text-center text-gray-500">
                    Belum ada koleksi buku.
                </div>
            @endforelse

        </div>

        {{-- Pagination --}}
        <div class="mt-10">
            {{ $bukus->links() }}
        </div>

    </section>
@endsection