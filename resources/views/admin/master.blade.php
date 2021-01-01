<x-app-layout>
    <div class="pt-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Kompetensi Keahlian</h3>
                            <p class="mt-1 text-sm text-gray-600">
                            Daftar Pilihan Kompetensi Keahlian yang dilayani
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="inline-block min-w-full py-2 align-middle">
                            <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Pilihan Kompetensi Keahlian
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        2020
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        2021
                                    </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($majors as $mayor)
                                    <tr>
                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            {{ $mayor->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $mayor->last_student }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            0
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
            </div>
        </div>
    </div>
    <div class="pt-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Asal Sekolah</h3>
                            <p class="mt-1 text-sm text-gray-600">
                            Daftar asal sekolah pendaftar
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <livewire:master-school />
                    </div>
                </div>
            </div>

            <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
