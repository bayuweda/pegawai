<!DOCTYPE html>
<html lang="id">

<head>
    <title>Data Pegawai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <style>
        table.dataTable.no-footer {
            border-bottom: none !important;
        }


        .dataTables_filter {
            position: relative;
            width: 100%;
        }


        .dataTables_filter input {
            padding-left: 40px !important;

            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='2' stroke='%239ca3af'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z' /%3E%3C/svg%3E") !important;
            background-repeat: no-repeat !important;
            background-position: 12px center !important;
            background-size: 1.2rem !important;
        }

        .dataTables_filter input:focus {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='2' stroke='%232563eb'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z' /%3E%3C/svg%3E") !important;
        }

        @media (max-width: 767px) {

            .dataTables_wrapper .dataTables_length,
            .dataTables_wrapper .dataTables_filter {
                text-align: left !important;
            }

            .dataTables_filter input {
                width: 100% !important;
                margin-left: 0 !important;
            }
        }

        .dataTables_length label {
            display: flex !important;
            flex-direction: row !important;
            align-items: center !important;
            gap: 0.5rem !important;
            white-space: nowrap !important;

        }


        .dataTables_length select {
            padding-top: 0.25rem !important;
            padding-bottom: 0.25rem !important;
            margin: 0 !important;
        }




        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 0.5rem 1rem !important;
            margin-left: 4px !important;
            border-radius: 0.75rem !important;
            border: 1px solid #e5e7eb !important;
            background: white !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #2563eb !important;
            color: white !important;
            border-color: #2563eb !important;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 font-sans">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-4 mb-10">
            <div>
                <h2 class="text-4xl font-black text-gray-900 tracking-tight">Data Pegawai</h2>
                <p class="text-gray-500 mt-2 text-lg">Kelola informasi dan produktivitas pegawai.</p>
            </div>
            <a href="/pegawai/create"
                class="inline-flex  items-center justify-center bg-blue-600 text-white px-2 lg:px-8 py-4 rounded-2xl font-bold hover:bg-blue-700 shadow-xl shadow-blue-100 transition-all transform hover:-translate-y-1 active:scale-95  w-full text-nowrap md:w-auto">
                <svg class="w-5 h-5 mr-2 stroke-[3px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                </svg>
                Tambah Pegawai
            </a>
        </div>

        <div class="bg-white shadow-sm border border-gray-200 rounded-3xl p-6 mb-8">
            <div class="flex flex-col sm:flex-row items-end gap-6">
                <div class="w-full sm:w-80">
                    <label class="block text-xs font-black uppercase text-gray-400 mb-2 tracking-[0.1em] ml-1">
                        Filter Rentang Tanggal Masuk
                    </label>
                    <div class="relative group">
                        <input type="text" id="filter_tgl"
                            class="w-full border border-gray-200 rounded-2xl px-5 py-3.5 text-sm focus:ring-4 focus:ring-blue-50 focus:border-blue-500 outline-none bg-gray-50 transition-all cursor-pointer font-medium"
                            placeholder="Pilih rentang tanggal...">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-gray-400 group-focus-within:text-blue-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <button onclick="window.location.reload()" class="px-6 py-3.5 text-sm font-bold text-gray-500 hover:text-red-500 transition-colors uppercase tracking-widest">
                    Reset
                </button>
            </div>
        </div>

        <div class="bg-white shadow-2xl shadow-gray-200/40 rounded-[2rem] border border-gray-100 overflow-hidden">
            <div class="p-6">

                <div class="overflow-x-auto w-full">
                    <table id="pegawaiTable" class="w-full">
                        <thead>
                            <tr class="text-gray-400 text-[11px] uppercase font-black tracking-[0.2em] border-b border-gray-100">
                                <th class="p-5 text-left">Pegawai</th>
                                <th class="p-5 text-left">Jabatan</th>
                                <th class="p-5 text-center">Tgl Lahir</th>
                                <th class="p-5 text-center">Tgl Masuk</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-50">
                            @foreach($pegawais as $p)
                            <tr class="hover:bg-gray-50/80 transition-all group">
                                <td class="p-5">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-12 w-12 group-hover:scale-110 transition-transform">
                                            @if($p->foto)
                                            <img class="h-12 w-12 rounded-2xl object-cover shadow-sm ring-2 ring-white" src="{{ asset('uploads/pegawai/' . $p->foto) }}">
                                            @else
                                            <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white font-black shadow-lg shadow-blue-100">
                                                {{ substr($p->nama, 0, 1) }}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-base font-bold text-gray-900">{{ $p->nama }}</div>
                                            <div class="text-sm text-gray-400 font-medium">{{ $p->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-5 text-center">
                                    <span class="inline-flex px-4 py-1.5 text-[10px] font-black uppercase tracking-wider rounded-xl {{ $p->jabatan == 'Manager' ? 'bg-indigo-50 text-indigo-600' : 'bg-emerald-50 text-emerald-600' }}">
                                        {{ $p->jabatan }}
                                    </span>
                                </td>
                                <td class="p-5 text-sm text-gray-500 text-center font-medium whitespace-nowrap">
                                    {{ $p->tanggal_lahir }}
                                </td>
                                <td class="p-5 text-center">
                                    <span class="text-sm font-bold text-gray-800 bg-gray-100 px-3 py-1 rounded-lg whitespace-nowrap">
                                        {{ $p->tanggal_masuk }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            var table = $('#pegawaiTable').DataTable({
                responsive: true,
                dom: '<"flex flex-col md:flex-row items-start md:items-center justify-between gap-6 mb-8"lf>rt<"flex flex-col md:flex-row items-center justify-between mt-8 gap-4"ip>',
                language: {
                    lengthMenu: "Tampil _MENU_",
                    search: "",
                    searchPlaceholder: "Cari nama atau email...",
                    info: "Menampilkan <b class='text-gray-900'>_START_ - _END_</b> dari total <b class='text-gray-900'>_TOTAL_</b> pegawai",
                    paginate: {
                        previous: "Prev",
                        next: "Next"
                    }
                },
                drawCallback: function() {

                    $('.dataTables_filter input').addClass('w-full md:w-80 pl-10 pr-4 py-3 bg-white border border-gray-200 rounded-2xl focus:ring-4 focus:ring-blue-50 focus:border-blue-500 outline-none transition-all shadow-sm');
                    $('.dataTables_length select').addClass('mx-2 px-4 py-2 bg-white border border-gray-200 rounded-xl outline-none focus:ring-4 focus:ring-blue-50');
                    $('.dataTables_info').addClass('text-sm text-gray-400 font-medium');
                }
            });

            // Date Range Picker
            $('#filter_tgl').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    format: 'YYYY-MM-DD',
                    cancelLabel: 'Clear'
                }
            });

            $('#filter_tgl').on('apply.daterangepicker', function(ev, picker) {
                var start = picker.startDate.format('YYYY-MM-DD');
                var end = picker.endDate.format('YYYY-MM-DD');
                $(this).val(start + ' - ' + end);

                $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                    var dateMasuk = data[3];
                    return (dateMasuk >= start && dateMasuk <= end);
                });
                table.draw();
            });

            $('#filter_tgl').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
                $.fn.dataTable.ext.search.pop();
                table.draw();
            });
        });
    </script>

</body>

</html>