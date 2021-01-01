<div class="inline-block min-w-full py-2 align-middle">
    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                NPSN
            </th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Sekolah
            </th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Alamat
            </th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                2020
            </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">

            @foreach ($schools as $school)
            <tr>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $school->npsn }}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $school->name }}
                </td>
                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $school->address }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    {{ $school->last_student }}
                </td>
            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>