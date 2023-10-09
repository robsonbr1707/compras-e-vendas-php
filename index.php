<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body{
        max-width: 1980px;
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>
    <title>Compras e vendas</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.6/underscore-umd-min.js"></script>
    <script src="/assets/js/index.js" defer></script>
</head>
<body class="w-7/12 border mx-auto mt-20 py-10">
    <div class="p-4">
        <h1 class="text-3xl">Pesquise algo</h1>
        <input type="text" name="search" id="search" class="w-full border bg-gray-100 my-4 p-2">
        <div id="autocomplete" class="hidden mt-10 pt-10 border"></div>
    </div>
</body>
</html>