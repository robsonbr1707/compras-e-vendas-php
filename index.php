<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
   
    <title>Compras e vendas</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-umd-min.js"></script>
    <script src="/assets/js/index.js" defer></script>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="w-7/12 border mx-auto mt-20 py-10">
    <div class="p-4">
        <h1 class="text-3xl text-gray-200">Pesquise algo</h1>
        <input type="text" name="search" id="search" class="w-full border my-4 p-2 bg-black/40 text-gray-200">
        <div id="autocomplete" class="hidden mt-10 py-10 px-4 border text-gray-200"></div>
    </div>
</body>
</html>