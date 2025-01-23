<!-- resources/views/proposal-types/index.blade.php -->
@extends('layout.app')
@section('page-title', 'Data Reviewer')
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
                "title" => "Data Reviewer",
            ],
        ]
    ])
@endsection
@section('content')
    {{-- <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Data Reviewer</h1>
        <button onclick="my_modal_1.showModal()" class="btn btn-primary">
            <i class='bx bx-add-to-queue' ></i>
            Tambah Reviewer
        </button>
    </div> --}}

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
    <div class="overflow-x-auto bg-white rounded-lg shadow p-5">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Reviewer</th>
                    <th>Status Review</th>
                    <th>Akses Sub Jenis Proposal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="proposalTableBody">
                <tr>
                    <td> 1 </td>
                    <td> Ratih Nindyasari.,S.Kom.,M.Kom </td>
                    <td>
                        <div class="badge badge-secondary text-black">Tidak Aktif</div>
                    </td>
                    
                    {{-- Looping data Akses Jenis Proposal --}}
                    <td>
                        <div class="badge badge-lg">PKM - KC</div>
                        <div class="badge badge-lg">PKM - PM</div>
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
                        <span class="label-text">Reviewer</span>
                    </label>
                </div>
                <select class="select select-bordered w-full ">
                    <option disabled selected>Who shot first?</option>
                    <option>Han Solo</option>
                    <option>Greedo</option>
                  </select>
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

    @push('scripts')
        <script>
            const proposalForm = document.getElementById('proposalForm');
            const proposalName = document.getElementById('proposalName');
            const proposalDescription = document.getElementById('proposalDescription');
            const proposalStatus = document.getElementById('proposalStatus');
            const proposalTableBody = document.getElementById('proposalTableBody');
            const templateModal = document.getElementById('templateModal');

            function openModal(modalId) {
                document.getElementById(modalId).showModal();
            }

            function closeModal() {
                templateModal.close();
            }

            function saveProposal(event) {
                event.preventDefault();
                const id = proposalId.value;
                const name = proposalName.value;
                const description = proposalDescription.value;
                const status = proposalStatus.value;

                if (id) {
                    // Update Proposal
                } else {
                    // Create Proposal
                }
            }

            function editProposal() {
                openModal('templateModal');
            }

            function deleteProposal() {
                // Delete Proposal
            }
        </script>
        
    @endpush
    
@endsection