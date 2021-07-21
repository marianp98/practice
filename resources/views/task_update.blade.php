<!DOCTYPE html>
<html>
<head>
    <title>Gestionare Task-uri </title>
</head>
<body>

<?php
//
//    $var=$taskss[0]->id;
//    dd($taskss);
//    dd($taskss[0]);
//    dd($taskss[0]->id);
//?>

<form action = "/edit/<?php echo $taskss[0]->id; ?>" method = "post">
@csrf <!-- {{ csrf_field() }} -->

    <table>
        <tr>
            <td>Descrierea Task-ului</td>
            <td>
                <input type = 'text'
                       id="descriere"
                       name = 'descriere'
                       value = '<?php echo $taskss[0]->descriere; ?>'/> </td>
        </tr>
        <tr>
            <td>Starea taskului</td>
            <td>
                <select id="stare" name="stare">
                    <option value="deRezolvat">De rezolvat</option>
                    <option value="inCursDeRezolvare">In curs de rezolvare</option>
                    <option value="Rezolvat">Rezolvat</option>
                </select>

            </td>
        </tr>
        <tr>
            <td colspan = '2'>
                <input type = 'submit' value = "Actualizare task" />
            </td>
        </tr>
    </table>
</form>
</body>
</html>
