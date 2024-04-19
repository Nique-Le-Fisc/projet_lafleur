<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaFleur | Panier</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/35413ab60a.js" crossorigin="anonymous"></script>
</head>

<body>
<form action="process_formulaire.php" method="GET" class="max-w-md mx-auto bg-white p-8 rounded shadow-md mt-10">
    <p class="text-center text-2xl font-bold mb-4">Nous contacter</p>
    
    <div class="mb-4">
        <label for="civilite" class="block text-sm font-medium text-gray-700">Civilité :</label>
        <select name="civilite" id="civilite" class="w-full mt-1 px-3 py-2 border rounded-lg">
            <option value="" disabled selected hidden>Choisissez une option</option>
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
            
        </select>
    </div>
    
    <div class="mb-4">
        <label for="message" class="block text-sm font-medium text-gray-700">Message :</label>
        <textarea name="message" id="message" class="w-full mt-1 px-3 py-2 border rounded-lg resize-y min-h-32"></textarea>
    </div>

    <div>
        <input type="submit" value="Submit" class="w-full bg-blue-500 text-white py-2 rounded-lg cursor-pointer hover:bg-blue-600 transition duration-300">
    </div>
</form>

</body>