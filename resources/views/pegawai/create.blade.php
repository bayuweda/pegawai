<!DOCTYPE html>
<html lang="id">

<head>
    <title>Tambah Pegawai | HR System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <style>
        /* Modern Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }

        /* Select2 Custom Styling */
        .select2-container--default .select2-selection--single {
            height: 50px !important;
            padding: 10px 12px !important;
            border-color: #e2e8f0 !important;
            border-radius: 0.75rem !important;
            background-color: #f8fafc !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 48px !important;
        }

        .dropzone {
            border: none !important;
            background: transparent !important;
            padding: 0 !important;
            min-height: auto !important;
        }

        .error {
            color: #ef4444;
            font-size: 0.75rem;
            margin-top: 0.25rem;
            font-weight: 500;
            margin-left: 0.5rem;
        }
    </style>
</head>

<body class="bg-[#f8fafc] text-slate-900 font-sans antialiased">

    <div class="max-w-5xl mx-auto px-4 py-12">
        <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-3xl font-black text-slate-800 tracking-tight">Tambah Pegawai</h1>
                <p class="text-slate-500 mt-1 font-medium">Manajemen aset SDM perusahaan Anda secara efisien.</p>
            </div>
            <a href="/pegawai" class="flex items-center gap-2 text-sm font-bold text-slate-600 hover:text-blue-600 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Daftar
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-blue-600 rounded-3xl p-8 text-white shadow-xl shadow-blue-200">
                    <h3 class="text-xl font-bold mb-2">Informasi Form</h3>
                    <p class="text-blue-100 text-sm leading-relaxed">Pastikan semua data yang dimasukkan valid terutama alamat email untuk keperluan akses sistem di masa mendatang.</p>
                    <div class="mt-6 space-y-4">
                        <div class="flex items-center gap-3 text-sm font-medium">
                            <span class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">1</span>
                            Identitas Pribadi
                        </div>
                        <div class="flex items-center gap-3 text-sm font-medium text-blue-300">
                            <span class="w-6 h-6 rounded-full bg-blue-700 flex items-center justify-center text-white">2</span>
                            Penempatan Kerja
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-white border border-slate-200 shadow-sm rounded-[2rem] overflow-hidden">
                    <form action="/pegawai" method="POST" id="pegawaiForm" enctype="multipart/form-data" class="p-8 md:p-12 space-y-8">
                        @csrf

                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                                <h2 class="text-lg font-bold text-slate-800">Identitas Pribadi</h2>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider ml-1">Nama Lengkap</label>
                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-blue-600 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </div>
                                        <input type="text" name="nama" placeholder="Budi Santoso"
                                            class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all font-medium">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider ml-1">Email</label>
                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-blue-600 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <input type="email" name="email" placeholder="budi@company.com"
                                            class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all font-medium">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider ml-1">Tanggal Lahir</label>
                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <input type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="Pilih Tanggal" readonly
                                            class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all font-medium cursor-pointer">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider ml-1">Jabatan</label>
                                    <select name="jabatan" id="jabatan" class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl outline-none">
                                        <option value="">Pilih Posisi</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center gap-2 mb-6">
                                <span class="w-1.5 h-6 bg-blue-600 rounded-full"></span>
                                <h2 class="text-lg font-bold text-slate-800">Penempatan Kerja</h2>
                            </div>

                            <div class="space-y-6">
                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider ml-1">Tanggal Mulai Kontrak</label>
                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <input type="text" name="tanggal_masuk" id="tanggal_masuk" placeholder="Pilih Tanggal" readonly
                                            class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-100 focus:border-blue-500 outline-none transition-all font-medium cursor-pointer">
                                    </div>
                                </div>

                                <div class="space-y-2">
                                    <label class="text-[13px] font-bold text-slate-700 uppercase tracking-wider ml-1">Foto Profil</label>
                                    <div id="dropzone-area" class="dropzone group relative border-2 border-dashed border-slate-200 rounded-2xl p-6 hover:border-blue-400 hover:bg-blue-50/50 transition-all cursor-pointer">
                                        <div class="dz-message flex flex-col items-center justify-center space-y-2">
                                            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-slate-400 shadow-sm border border-slate-100 group-hover:scale-110 transition-transform">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                                </svg>
                                            </div>
                                            <div class="text-sm font-bold text-slate-600">Klik untuk upload foto</div>
                                            <p class="text-xs text-slate-400">Rekomendasi ukuran 1:1 (Maks. 2MB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6 flex flex-col-reverse md:flex-row items-center justify-end gap-4">
                            <button type="button" onclick="window.location.href='/pegawai'" class="w-full md:w-auto px-8 py-3.5 text-sm font-bold text-slate-500 hover:text-slate-800 transition-colors">
                                Batalkan
                            </button>
                            <button type="submit" id="btnSubmit" class="w-full md:w-auto bg-slate-900 text-white px-10 py-3.5 rounded-xl font-bold hover:bg-blue-600 shadow-lg shadow-slate-200 transition-all active:scale-95">
                                Simpan Data Pegawai
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        Dropzone.autoDiscover = false;

        $(document).ready(function() {
            // SweetAlert Session Check
            const successMessage = "{{ session('success') }}";
            if (successMessage) {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: successMessage,
                    showConfirmButton: false,
                    timer: 2500,
                    customClass: {
                        popup: 'rounded-[2rem]'
                    }
                });
            }

            // Select2 initialization
            $('#jabatan').select2({
                placeholder: "Pilih Posisi",
                allowClear: true,
                width: '100%'
            }).on('change', function() {
                $(this).valid();
            });

            // Daterangepicker config
            const dateConfig = {
                singleDatePicker: true,
                showDropdowns: true,
                autoUpdateInput: false,
                locale: {
                    format: 'YYYY-MM-DD'
                }
            };

            $('#tanggal_lahir, #tanggal_masuk').daterangepicker(dateConfig);
            $('#tanggal_lahir, #tanggal_masuk').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD'));
                $(this).valid();
            });

            // Dropzone initialization
            let myDropzone = new Dropzone("#dropzone-area", {
                url: "#",
                autoProcessQueue: false,
                maxFiles: 1,
                acceptedFiles: "image/*",
                addRemoveLinks: true,
                dictRemoveFile: "Hapus foto"
            });

            // Validation logic
            $("#pegawaiForm").validate({
                rules: {
                    nama: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    jabatan: "required",
                    tanggal_lahir: "required",
                    tanggal_masuk: "required"
                },
                errorPlacement: function(error, element) {
                    if (element.hasClass("select2-hidden-accessible")) {
                        error.insertAfter(element.next(".select2-container"));
                    } else if (element.parent('.relative').length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                },
                submitHandler: function(form) {
                    Swal.fire({
                        title: 'Memproses Data...',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        },
                        customClass: {
                            popup: 'rounded-[2rem]'
                        }
                    });

                    // Transfer file from Dropzone to hidden input
                    if (myDropzone.getAcceptedFiles().length > 0) {
                        let fileData = myDropzone.getAcceptedFiles()[0];
                        let dataTransfer = new DataTransfer();
                        dataTransfer.items.add(fileData);

                        let inputFoto = document.getElementById('hidden_foto') || document.createElement('input');
                        inputFoto.type = 'file';
                        inputFoto.name = 'foto';
                        inputFoto.id = 'hidden_foto';
                        inputFoto.style.display = 'none';
                        inputFoto.files = dataTransfer.files;
                        form.appendChild(inputFoto);
                    }
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>