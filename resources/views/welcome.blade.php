<?php
//dd("sal");
//?>

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>

<h2>Adaugare Task</h2>

<form action="/task" method="post">
@csrf <!-- {{ csrf_field() }} -->

    <label for="descriere">Descriere task:</label><br>
    <input type="text" id="descriere" name="descriere" ><br>
    <label for="stare">Starea taskului</label>
    <select id="stare" name="stare">
        <option value="deRezolvat">De rezolvat</option>
        <option value="inCursDeRezolvare">In curs de rezolvare</option>
        <option value="Rezolvat">Rezolvat</option>
    </select>
    <input type="submit" value="Submit">
</form>

<p>Apasand butonul "Submit", veti salva taskul in baza de date.</p>

<table>
    <tr>
        <th>ID</th>
        <th>Descriere</th>
        <th>Stare</th>
    </tr>
    </table>

</body>
</html>
