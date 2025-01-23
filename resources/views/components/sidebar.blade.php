<div class="drawer-side">
    <label for="my-drawer-2" class="drawer-overlay"></label>
    
    <aside class="flex flex-col h-full">
        <!-- Logo -->
        <div class="sticky top-0 px-4 py-2.5 border-b bg-white">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg flex items-center justify-center">
                    <img src="{{ asset('img/umk-resize.png') }}" alt="Logo" class="w-8 h-8 object-contain">
                </div>
                <div class="text-primary">
                    <p class="text-xl font-bold leading-none">SIPMA</p>
                    <span class="text-xs font-semibold tracking-wide">Sistem Informasi Proposal Mahasiswa</span>
                </div>
            </div>
        </div>
        {{-- Menu --}}
        <div class="flex-1 bg-white w-80 border-r overflow-y-auto">
            <nav class="menu p-4 space-y-2.5">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 p-3 text-primary  bg-primary/10 rounded-lg">
                        <i class='bx bx-home text-xl'></i>
                        <span>Beranda</span>
                    </a>
                </li>
    
                <!-- Master -->
                <li>
                    <details>
                        <summary class="hover:bg-primary/10 rounded-lg transition-colors p-3">
                            <i class='bx bx-box text-xl'></i>
                            <span>Master</span>
                        </summary>
                        <ul class="space-y-1.5">
                            <li>
                                <a href="{{ route('jenis-proposal') }}" class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Jenis Proposal
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sub-jenis-proposal') }}" class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Sub Jenis Proposal
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Penilaian
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('template-proposal') }}" class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Template Proposal
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>
                <!-- Data -->
                <li>
                    <details>
                        <summary class="hover:bg-primary/10 rounded-lg transition-colors p-3">
                            <i class='bx bx-data text-xl'></i>
                            <span>Data</span>
                        </summary>
                        <ul class="space-y-1.5">
                            <li>
                                <a href="{{ route('data-reviewer') }}" class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Reviewer
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('data-pendaftaran') }}" class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Pendaftaran
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>
                <!-- Konfirm Dosbing -->
                <li>
                    <details>
                        <summary class="hover:bg-primary/10 rounded-lg transition-colors p-3">
                            <i class='bx bx-check text-xl'></i>
                            <span>Konfirm Dosbing</span>
                        </summary>
                        <ul class="space-y-1.5">
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    PKM
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    PPK Ormawa
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    KBMK
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    P2MW
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    KIBM
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    PMW
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    P2D
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Laporan Kemajuan
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>
                <!-- Pembagian Reviewer -->
                <li>
                    <a href="#" class="flex items-center gap-3 p-3 rounded-lg">
                        <i class='bx bxs-user-detail text-xl'></i>
                        <span>Pembagian Reviewer</span>
                    </a>
                </li>
                <!-- Rev Administrasi -->
                <li>
                    <details>
                        <summary class="hover:bg-primary/10 rounded-lg transition-colors p-3">
                            <i class='bx bx-folder text-xl'></i>
                            <span>Rev Administrasi</span>
                        </summary>
                        <ul class="space-y-1.5">
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    PKM
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    PPK Ormawa
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    KBMK
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    P2MW
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    KIBM
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    PMW
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    P2D
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Laporan Kemajuan
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>
                <!-- Akun Belmawa -->
                <li>
                    <details>
                        <summary class="hover:bg-primary/10 rounded-lg transition-colors p-3">
                            <i class='bx bx-key text-xl'></i>
                            <span>Akun Belmawa</span>
                        </summary>
                        <ul class="space-y-1.5">
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    PKM
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    PPK Ormawa
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    KBMK
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    P2MW
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    KIBM
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    PMW
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    P2D
                                </a>
                            </li>
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Laporan Kemajuan
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>
                <!-- Laporan -->
                <li>
                    <details>
                        <summary class="hover:bg-primary/10 rounded-lg transition-colors p-3">
                            <i class='bx bx-book text-xl'></i>
                            <span>Laporan</span>
                        </summary>
                        <ul class="space-y-1.5">
                            <li>
                                <a class="block p-2 hover:bg-primary/10 rounded-lg transition-colors text-sm">
                                    Ajuan Proposal
                                </a>
                            </li>
                        </ul>
                    </details>
                </li>
                <!-- Admin -->
                <li>
                    <a href="#" class="flex items-center gap-3 p-3 rounded-lg">
                        <i class='bx bx-group text-xl'></i>
                        <span>Admin</span>
                    </a>
                </li>
            </nav>
        </div>
        {{-- Profile --}}
        <div class="sticky bottom-0 w-full">
            <div class="bg-gray-50 p-4 rounded-lg">
                <div class="flex items-center gap-3">
                    <div class="avatar">
                        <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                            <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="Admin" />
                        </div>
                    </div>
                    <div>
                        <p class="font-semibold">Admin User</p>
                        <p class="text-sm text-gray-500">admin@example.com</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>