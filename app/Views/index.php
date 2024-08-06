<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Selecione um mês</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <h3>Selecione um mês para verificar o total de receitas e despesas do período</h3>

        <form action="/grafico/exibir">
            <div class="form-group">
                <label for="sel1">Selecione um mês:</label>
                <select class="form-control" id="sel1" name="mes">
                    <option>Janeiro</option>
                    <option>Fevereiro</option>
                    <option>Março</option>
                    <option>Abril</option>
                    <option>Maio</option>
                    <option>Junho</option>
                    <option>Julho</option>
                    <option>Agosto</option>
                    <option>Setembro</option>
                    <option>Outubro</option>
                    <option>Novembro</option>
                    <option>Dezembro</option>
                </select>
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
        </form>

    </div>

</body>

</html>