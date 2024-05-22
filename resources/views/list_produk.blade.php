<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="ml-10 mt-20">
        <table class="min-w-full bg-white border border-gray-300">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4 border-b border-gray-300">No</th>
                    <th class="py-2 px-4 border-b border-gray-300">Nama Produk</th>
                    <th class="py-2 px-4 border-b border-gray-300">Deskripsi Produk</th>
                    <th class="py-2 px-4 border-b border-gray-300">Harga Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nama as $index => $item)
                    <tr class="bg-gray-100 hover:bg-gray-200">
                        <td class="py-2 px-4 border-b border-gray-300 text-center">{{$index + 1}}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{$item}}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{$desc[$index]}}</td>
                        <td class="py-2 px-4 border-b border-gray-300">{{$harga[$index]}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
