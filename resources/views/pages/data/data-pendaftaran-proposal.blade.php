<!-- resources/views/proposal-types/index.blade.php -->
@extends('layout.app')
@section('page-title', 'Data Pendaftaran Proposal')

@section('breadcrumb-action')
    <button onclick="my_modal_1.showModal()" class="btn btn-primary p-3 w-full md:w-auto">
        <i class='bx bx-add-to-queue'></i>
        Tambah Pendaftaran Proposal
    </button>
@endsection

@section('breadcrumb')
    @include('components.breadcrumb', [
        "breadcrumblist" => [
            [
                "title" => "Data",
                "icon" => "bx-data"
            ],
            [
                "title" => "Data Pendaftaran Proposal",
            ],
        ]
    ])
@endsection

@section('content')

    <!-- Search Bar -->
    {{-- <div class="form-control mb-6">
        <div class="input-group">
            <input
                type="text"
                id="searchInput"
                placeholder="Cari jenis proposal..."
                class="input input-bordered w-full"
            >
            <button class=" mt-4 btn btn-square">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>
    </div> --}}

    <!-- Table -->
    <div class="overflow-x-auto bg-white rounded-lg shadow p-3">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Proposal</th>
                    <th>Judul</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="proposalTableBody">
                <tr>
                    <td> 1 </td>
                    <td> P2MW</td>
                    <td>
                      <p class="font-bold">   Pendaftaran Program Mahasiswa Wirausaha Tahun 2021 </p>
                    </td>
                    <td>
                        <div class="flex flex-col gap-1">
                            <span class="text-sm font-medium">12 Mar 2024</span>
                            <div class="badge badge-success badge-sm">3 hari tersisa</div>
                            <!-- atau jika sudah lewat deadline -->
                            <!-- <div class="badge badge-error badge-sm">Tenggat lewat</div> -->
                        </div>
                    </td>
                    {{-- Looping data Akses Jenis Proposal --}}
                    <td>
                        <div class="badge badge-secondary text-gray-700">Tidak Aktif</div>
                        <div class="badge badge-ghost">Selesai</div>
                    </td>

                    <td>
                        <div class="flex gap-2">
                            <button onclick="viewProposal()" class="btn btn-sm btn-primary">Akses</button>
                            <button onclick="editProposal()" class="btn btn-sm btn-warning text-white">Aktifkan</button>
                            <button onclick="deleteProposal()" class="btn btn-sm btn-error text-white">Hapus</button>
                        </div>
                    </td>
                </tr>
               
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg mb-4">Tambah Jenis Proposal</h3>
            <form id="proposalForm" onsubmit="saveProposal(event)">
                <input type="hidden" id="proposalId">
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Nama Proposal</span>
                    </label>
                    <input
                        type="text"
                        id="proposalName"
                        class="input input-bordered w-full"
                        required
                    >
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Deskripsi</span>
                    </label>
                    <textarea
                        id="proposalDescription"
                        class="textarea textarea-bordered"
                        required
                    ></textarea>
                </div>
                <div class="form-control mb-4">
                    <label class="label">
                        <span class="label-text">Status</span>
                    </label>
                    <select id="proposalStatus" class="select select-bordered w-full">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="modal-action">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button class="btn">Close</button>
                </div>
            </form>
        </div>
    </dialog>

    
    
@endsection
