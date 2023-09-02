<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include('../components/head.php') ?>
</head>

<body>
    <div class="container pb-4">
        <div class="d-flex gap-2 flex-wrap justify-content-center justify-content-sm-start p-0 my-3">
            <a class="btn btn-outline-secondary d-flex gap-2 align-items-center" href="home.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                </svg>
                Início
            </a>
            <a class="btn btn-outline-success d-flex gap-2 align-items-center" href="calculo.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM96 64H288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32zm32 160a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM96 352a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM64 416c0-17.7 14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM192 256a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm64-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM288 448a32 32 0 1 1 0-64 32 32 0 1 1 0 64z" />
                </svg>
                Calcular Estágio
            </a>
        </div>

        <div class="row">
            <div class="col-12">
                <hr class="w-100">
                <div class="d-flex justify-content-center text-center">
                    <h4 class="title mb-0 bg-light p-2 rounded shadow-sm">CADASTRO DE FERIADOS / DATAS NÃO LETIVAS</h4>
                </div>
                <hr class="w-100">
            </div>
        </div>

        <div class="my-2">
            <?php
            require('../../models/feriados.php');

            if (isset($_POST['cadastrar'])) {
                if (!empty($_POST['holidayDate'])) {
                    if (storeHoliday($_POST['description'], $_POST['holidayDate'])) {
                        $msg = 'Data cadastrada.';
                        include('../components/msg_success.php');
                    } else {
                        $msg = 'A data já está cadastrada.';
                        include('../components/msg_fail.php');
                    }
                } else {
                    $msg = 'Selecione uma data a ser cadastrada.';
                    include('../components/msg_success.php');
                }
            }

            if (isset($_POST['excluir'])) {
                if (!empty($_POST['id'])) {
                    destroyHoliday($_POST['id']);
                    $msg = 'Data excluída.';
                    include('../components/msg_success.php');
                } else {
                    $msg = 'Ocorreu um erro ao tentar excluir da data.';
                    include('../components/msg_success.php');
                }
            }

            $ano = date('Y');
            if (isset($_GET['ano'])) {
                if (!empty($_GET['ano'])) {
                    if (strlen($_GET['ano']) == 4) {
                        $ano = $_GET['ano'];
                    } else {
                        $msg = 'Ano inválido.';
                        include('../components/msg_fail.php');
                    }
                } else {
                    $msg = 'Selecione uma data.';
                    include('../components/msg_fail.php');
                }
            }
            ?>
        </div>

        <div class="row g-4 justify-content-between mb-4">
            <div class="col-12">
                <form class="d-flex flex-wrap gap-2 justify-content-center align-items-end border border-2 rounded p-3 mb-3 bg-light" action="" method="get">
                    <div>
                        <label>Ano:</label>
                        <input class="form-control w-auto" type="number" name="ano" value="<?= $ano ?>" required>
                    </div>
                    <button class="btn btn-outline-info d-flex gap-2 align-items-center" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg>
                        Pesquisar
                    </button>
                </form>

                <div class="overflow-auto rounded" style="max-height: 300px;">
                    <table class="table table-light border border-2 shadow">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Data</th>
                                <th>Descrição</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach (allHolidays($ano) as $key => $holiday) {
                            ?>
                                <tr>
                                    <th class=""><?= ($key + 1) ?></th>
                                    <td class="col-2"><?= date('d/m/Y', strtotime($holiday['holidayDate'])) ?></td>
                                    <td class="col-9"><?= !empty($holiday['description_date']) ? $holiday['description_date'] : '-' ?></td>
                                    <td class="col-1">
                                        <form action='' method='post'>
                                            <input type='hidden' name='id' value='<?= $holiday["id"] ?>'>
                                            <button class='btn btn-outline-danger d-flex gap-2 align-items-center' type='submit' name="excluir">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                </svg>
                                                Remover
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            if (empty(allHolidays($ano))) {
                                echo '
                                    <tr>
                                        <td colspan="4">
                                            <h6 class="text-center">Nenhuma data cadastrada!</h6>
                                        </td>
                                    </tr>
                                ';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-12">
                <form class="d-flex flex-wrap gap-2 flex-column rounded border border-2 p-4 bg-light" action="" method="post">
                    <div>
                        <label>Descrição:</label>
                        <textarea class="form-control" name="description" cols="10" rows="2" placeholder="Nome do feriado ou motivo para o dia não ser letivo."></textarea>
                    </div>
                    <div class="row flex-wrap g-3 justify-content-between align-items-end">
                        <div class="col-12 col-sm-6">
                            <label>Data:</label>
                            <input class="form-control w-auto" type="date" name="holidayDate" required>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-outline-primary d-flex gap-2 align-items-center" type="submit" name="cadastrar">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M48 96V416c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16V170.5c0-4.2-1.7-8.3-4.7-11.3l33.9-33.9c12 12 18.7 28.3 18.7 45.3V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96C0 60.7 28.7 32 64 32H309.5c17 0 33.3 6.7 45.3 18.7l74.5 74.5-33.9 33.9L320.8 84.7c-.3-.3-.5-.5-.8-.8V184c0 13.3-10.7 24-24 24H104c-13.3 0-24-10.7-24-24V80H64c-8.8 0-16 7.2-16 16zm80-16v80H272V80H128zm32 240a64 64 0 1 1 128 0 64 64 0 1 1 -128 0z" />
                                    </svg>
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php require('../../models/calendario.php'); ?>
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-around bg-light border border-1 rounded my-4">
                    <hr class="w-100">
                    <h4 class="w-100 text-center mb-0">CALENDÁRIO DE <?= $ano ?></h4>
                    <hr class="w-100">

                    <?php
                    for ($mes = 1; $mes <= 12; $mes++) {
                        montar_calendario($mes, $ano);
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
        $legendaStagio = false;
        include('../components/legenda.php');
        ?>
    </div>

    <?php include('../components/creditos.php') ?>

    <!-- Bootstrap - JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="../assets/js/alerts.js"></script>
</body>

</html>