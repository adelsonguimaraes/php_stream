<?php
    $data = file_get_contents('./mock.json');
    $data = json_decode($data, true);

    if (!empty($_REQUEST['monster'])) {
        file_put_contents("mock.json", json_encode(array("monster"=>$_REQUEST['monster'])));
        $data['monster'] = $_REQUEST['monster'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setando o Valor do Monster</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Atualize o status do Monstro</label>
        <select name="monster" id="monster" onchange="this.form.submit()">
            <option value="SIM" <?php if ($data['monster']==='SIM') echo 'selected';?>>SIM</option>
            <option value="NAO" <?php if ($data['monster']==='NAO') echo 'selected';?>>NAO</option>
        </select>
    </form>
</body>
</html>