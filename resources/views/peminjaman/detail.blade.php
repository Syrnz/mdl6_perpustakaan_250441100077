@extends('layouts.perpus')

@section('title', 'Detail Peminjaman')

@section('content')
    <div class="mx-auto max-w-4xl px-4 py-8">

        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800">
                Detail Peminjaman
            </h1>
            <p class="mt-1 text-sm text-gray-500">
                Informasi lengkap transaksi peminjaman buku.
            </p>
        </div>

        <div class="rounded-xl border border-gray-100 bg-white p-6 shadow-sm">

            <div class="space-y-5">

                <div>
                    <p class="text-sm text-gray-500">ID Peminjaman</p>
                    <p class="font-semibold text-gray-800">
                        {{ $peminjaman->id }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Nama Anggota</p>
                    <p class="font-semibold text-gray-800">
                        {{ $peminjaman->anggota->nama }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Email Anggota</p>
                    <p class="font-semibold text-gray-800">
                        {{ $peminjaman->anggota->email }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Judul Buku</p>
                    <p class="font-semibold text-gray-800">
                        {{ $peminjaman->buku->judul }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Tanggal Pinjam</p>
                    <p class="font-semibold text-gray-800">
                        {{ $peminjaman->tanggal_pinjam->format('d-m-Y') }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Tanggal Kembali</p>
                    <p class="font-semibold text-gray-800">
                        {{ $peminjaman->tanggal_kembali ? $peminjaman->tanggal_kembali->format('d-m-Y') : '-' }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500">Status</p>

                    @if ($peminjaman->tanggal_kembali)
                        <span class="inline-block rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                            Dikembalikan
                        </span>
                    @else
                        <span class="inline-block rounded-full bg-amber-100 px-3 py-1 text-xs font-medium text-amber-700">
                            Dipinjam
                        </span>
                    @endif
                </div>

            </div>

        </div>

    </div>
@endsection
