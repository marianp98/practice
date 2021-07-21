<!Doctype html>
<html>
<head>

    <meta charset="UTF-8">

    <meta name="author" content="Pop Marian">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- pentru responsivitatea html -->

    <title>Vizualizare task-uri</title>
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


<h1>Lista task-uri</h1>

<table border = "1">
    <tr>
        <td>ID</td>
        <td>Descriere</td>
        <td>Stare</td>
        <td>Actiune</td>
    </tr>
    @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->descriere }}</td>
            <td>{{ $task->stare }}</td>
            <td><a href = 'edit/{{$task->id}}'>Edit</a></td>
        </tr>
    @endforeach
</table>
</body>
<?php
//dd("sal");
//?>

</html>
