<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Selecione um mês</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body class="bg-secondary">

    <div class="container p-4">

        <div class="row">

            <div class="col">
                <h3 class="ml-4">Receitas</h3>
                <?php echo $receitas; ?>
            </div>

            <div class="col">
                <h3 class="ml-4">Despesas</h3>
                <?php echo $despesas; ?>
            </div>

        </div>

    </div>

</body>

</html>