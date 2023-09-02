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
            <a class="btn btn-outline-primary d-flex gap-2 align-items-center" href="datas.php">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                </svg>
                Cadastrar Datas
            </a>
        </div>

        <div class="row">
            <div class="col-12">
                <hr class="w-100">
                <div class="d-flex justify-content-center text-center">
                    <h4 class="title mb-0 bg-light p-2 rounded shadow-sm">CÁLCULO DE HORAS DE ESTÁGIO</h4>
                </div>
                <hr class="w-100">
            </div>
        </div>

        <form class="col-12 d-flex justify-content-center align-items-end flex-wrap" action="#" method="get">
            <div class="col-12 m-2">
                <div class="d-flex flex-wrap justify-content-around">
                    <?php
                    $diasSemana = ['monday' => 'Segunda', 'tuesday' => 'Terça', 'wednesday' => 'Quarta', 'thursday' => 'Quinta', 'friday' => 'Sexta', 'saturday' => 'Sábado', 'sunday' => 'Domingo'];
                    $weekDays = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
                    foreach ($weekDays as $key => $weekDay) {
                    ?>
                        <div class="box-day d-flex flex-column border border-2 rounded p-2 m-2">
                            <div class="border border-1 rounded shadow-sm p-2 bg-light">
                                <div class="form-check">
                                    <input class="form-check-input" style="cursor: pointer;" type='checkbox' id='<?= $weekDay ?>' name='<?= $weekDay ?>' value='<?= ($key + 1) ?>' <?= isset($_GET[$weekDay]) ? 'checked' : '' ?> onClick='weekDayCheckBox("<?= $weekDay ?>");'>
                                    <label class="form-check-label" style="cursor: pointer;" for='<?= $weekDay ?>'>
                                        <?php
                                        foreach ($diasSemana as $key => $diaSemana) {
                                            if ($key == $weekDay) {
                                                echo $diaSemana;
                                                break;
                                            }
                                        }
                                        ?>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class='form-label'>Horas:</label>
                                <input class='form-control' id='hours_<?= $weekDay ?>' type='number' name='hours_<?= $weekDay ?>' min='0' value='<?= $_GET['hours_' . $weekDay] ?? '' ?>' disabled required>
                            </div>
                            <div>
                                <label class='form-label'>Minutos:</label>
                                <input class='form-control' id='minutes_<?= $weekDay ?>' type='number' name='minutes_<?= $weekDay ?>' min='0' max='59' value='<?= $_GET['minutes_' . $weekDay] ?? '' ?>' disabled required>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-12 d-flex flex-wrap justify-content-center align-items-end">
                <div class="m-2">
                    <label class="form-label">Início do estágio:</label>
                    <input class="form-control w-auto" type="date" name="date_start_stage" value="<?= $_GET['date_start_stage'] ?? '' ?>">
                </div>
                <div class="m-2">
                    <label class="form-label">Fim do semestre:</label>
                    <input class="form-control w-auto" type="date" name="date_end_semester" value="<?= $_GET['date_end_semester'] ?? '' ?>">
                </div>
                <div class="m-2">
                    <label class="form-label">Horas de estágio (Ex.: 50):</label>
                    <input class="form-control w-auto" type="number" name="hours_stage_course" min="0" value="<?= $_GET['hours_stage_course'] ?? '' ?>">
                </div>
                <div class="my-2">
                    <button class="btn btn-outline-success d-flex gap-2 align-items-center" type="submit" name="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM96 64H288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32zm32 160a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM96 352a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM64 416c0-17.7 14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM192 256a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm64-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM288 448a32 32 0 1 1 0-64 32 32 0 1 1 0 64z" />
                        </svg>
                        Calcular
                    </button>
                </div>
            </div>
            <div class="col-12">
                <div class="accordion my-4" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button bg-light shadow-none text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Informativo
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li><strong>Início do estágio:</strong> Este campo refere-se à data prevista para o início do estágio.</li>
                                    <li><strong>Fim do semestre:</strong> Este campo refere-se à data de término do semestre.</li>
                                    <li><strong>Horas de estágio:</strong> Este campo refere-se à quantidade de horas de aulas de estágio. O estágio curricular é composto por um total de 100 horas, sendo 50 horas alocadas para as aulas e 50 horas destinadas à elaboração das atividades.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php
        if (isset($_GET['submit']) && !empty($_GET['hours_stage_course']) && !empty($_GET['date_start_stage']) && !empty($_GET['date_end_semester'])) {
            if (strtotime($_GET['date_start_stage']) < strtotime($_GET['date_end_semester'])) {
                if (!empty($_GET['monday']) || !empty($_GET['tuesday']) || !empty($_GET['wednesday']) || !empty($_GET['thursday']) || !empty($_GET['friday']) || !empty($_GET['saturday']) || !empty($_GET['sunday'])) {
                    $hoursStageCourse = $_GET['hours_stage_course'];

                    $minutesDays = $hoursDays = $days = [
                        'monday' => false, 'tuesday' => false, 'wednesday' => false, 'thursday' => false, 'friday' => false, 'saturday' => false, 'sunday' => false
                    ];

                    $hoursWeek = 0;
                    $minutesWeek = 0;

                    $conf = true; // Controla a verificação se os dias selecionados são diferentes de vazio
                    foreach ($weekDays as $weekDay) {
                        if (isset($_GET[$weekDay]) && empty($_GET['hours_' . $weekDay]) && empty($_GET['minutes_' . $weekDay])) {
                            $conf = false;
                            break;
                        }

                        $days[$weekDay] = $_GET[$weekDay] ?? false;
                        $hoursWeek += $hoursDays[$weekDay] = $_GET['hours_' . $weekDay] ?? 0;
                        $minutesWeek += $minutesDays[$weekDay] = $_GET['minutes_' . $weekDay] ?? 0;
                    }

                    while ($minutesWeek >= 60) {
                        $minutesWeek -= 60;
                        $hoursWeek++;
                    }

                    $hoursWeek += $minutesWeek * 0.01;

                    $lastDay = $countPeriodoDays = $countDays = $hoursStage = $minutesStage = 0;

                    $dateEndStage = '';

                    if ($hoursWeek != 0 && $conf || $minutesWeek != 0 && $conf) {
                        $dateStartStage = date("d/m/Y", strtotime($_GET['date_start_stage']));
                        $dateEndSemester = date("d/m/Y", strtotime($_GET['date_end_semester']));

                        $start = new \DateTime($_GET['date_start_stage']);
                        $end = new \DateTime($_GET['date_end_semester']);
                        $end->modify('+1 day'); // Data do final do semestre modificada

                        $endDate = new \DateTime($_GET['date_end_semester']); // Data correta do final do semestre

                        $total_days = $end->diff($start)->days;
                        $period = new \DatePeriod($start, new \DateInterval('P1D'), $end);

                        require('../../models/feriados.php');
                        require('../../models/calendario.php');

                        $getHolidays = getHolidays();
                        // getHolidays($dt->format('Y')); // Isso ficava na linha 130 dentro do in_array no lugar da variável $getHolidays, mas para melhorar a performace reduzindo a quantidade de acesso ao banco de dados está sendo realizado a busca de todas as datas na linha 127
                        foreach ($period as $dt) {
                            $countPeriodoDays++;

                            if (!in_array($dt->format('d/m/Y'), $getHolidays) && in_array($dt->format('N'), $days)) {
                                foreach ($weekDays as $key => $weekDay) {
                                    if (($key + 1) == $dt->format('N')) {
                                        $countDays++;
                                        $hoursStage += $hoursDays[$weekDay];
                                        $minutesStage += $minutesDays[$weekDay];
                                        while ($minutesStage >= 60) {
                                            $minutesStage -= 60;
                                            $hoursStage++;
                                        }
                                    }
                                }

                                $dateEndStage = $dt->format('d/m/Y');
                                $dateEndStageFormatAmerican = date_create($dt->format('Y-m-d'));
                                if ($hoursStage >= $hoursStageCourse) break;
                            }
                        }
                        if (!empty($dateEndStageFormatAmerican) && $hoursStage < $hoursStageCourse) {
                            if ($resultado = date_diff($dateEndStageFormatAmerican, $endDate))
                                $countPeriodoDays -= date_interval_format($resultado, '%a'); // Subtrai os dias entre a data do fim de semestre e a data final do estágio
                        }

                        $hoursStage += $minutesStage * 0.01;

                        $msg = 'Cálculo de estágio realizado. Confira o resultado abaixo.';
                        include('../components/msg_success.php');
                    } else {
                        $msg = 'Informe as hora(s)/minutos do(s) dia(s) de estágio.';
                        include('../components/msg_fail.php');
                    }
                } else {
                    $msg = 'Selecione um dia da semana.';
                    include('../components/msg_fail.php');
                }
            } else {
                $msg = 'A data de "Início de estágio" não pode ser igual ou posterior à data de "Fim do semestre".';
                include('../components/msg_fail.php');
            }
        } elseif (isset($_GET['submit'])) {
            $msg = 'Preencha os campos obrigatórios.';
            include('../components/msg_fail.php');
        }
        ?>

        <div class="row">
            <div class="col-12">
                <hr class="w-100">
                <div class="d-flex justify-content-center text-center">
                    <h4 class="title mb-0 bg-light p-2 rounded shadow-sm">RESULTADO</h4>
                </div>
                <hr class="w-100">
            </div>
        </div>

        <form action="documento.php" method="get">
            <div class="col-12 d-flex flex-wrap gap-2 justify-content-center mb-4">
                <div>
                    <label class="form-label">Dias de estágio:</label>
                    <input class="form-control w-auto" type="text" name="quantidade_dias_estagio" value="<?= !empty($countDays) ? $countDays . ' dia(s)' : ''; ?>" readonly>
                </div>
                <div>
                    <label class="form-label">Dias corridos de estágio:</label>
                    <input class="form-control w-auto" type="text" name="periodo_dias_estagio" value="<?= !empty($countPeriodoDays) ? $countPeriodoDays . ' dia(s)' : ''; ?>" readonly>
                </div>
                <?php
                $periodo_dias_estagio = !empty($countPeriodoDays) ? $countPeriodoDays : 0;
                $estagio_meses_duracao = $estagio_dias_duracao = 0;
                while ($periodo_dias_estagio >= 30) {
                    $periodo_dias_estagio -= 30;
                    $estagio_meses_duracao++;
                }
                $estagio_dias_duracao = $periodo_dias_estagio;
                ?>
                <div>
                    <label class="form-label">Meses de duração do estágio:</label>
                    <input class="form-control w-auto" type="text" name="estagio_meses_duracao" value="<?= !empty($estagio_meses_duracao) ? $estagio_meses_duracao . ' mês(es)' : '' ?>" readonly>
                </div>
                <div>
                    <label class="form-label">Dias de duração do estágio:</label>
                    <input class="form-control w-auto" type="text" name="estagio_dias_duracao" value="<?= !empty($estagio_dias_duracao) ?  $estagio_dias_duracao . ' dia(s)' : '' ?>" readonly>
                </div>
                <div>
                    <label class="form-label">Horas semanais de estágio:</label>
                    <input class="form-control w-auto" type="text" name="quantidade_horas_semanais" value="<?= !empty($hoursWeek) ? $hoursWeek . ' hora(s)' : ''; ?>" readonly>
                </div>
                <div>
                    <label class="form-label">Horas do estágio (<?= $hoursStageCourse ?? ''; ?>):</label>
                    <input class="form-control w-auto" type="text" name="quantidade_horas_estagio" value="<?= !empty($hoursStage) ? $hoursStage  . ' hora(s)' : ''; ?>" readonly>
                </div>
                <div>
                    <label class="form-label">Horas do estágio x 2 (<?= isset($hoursStageCourse) ? $hoursStageCourse * 2 : ''; ?>):</label>
                    <input class="form-control w-auto" type="text" name="quantidade_horas_estagio_dobrado" value="<?= isset($hoursStage) ? $hoursStage * 2 . ' hora(s)' : ''; ?>" readonly>
                </div>
                <div>
                    <label class="form-label">Data final do estágio:</label>
                    <input class="form-control w-auto" type="text" name="date_end_stage" value="<?= $dateEndStage ?? ''; ?>" readonly>
                </div>
            </div>

            <!-- Informar os demais dados setados pelo usuário sobre o estágio para inserir no documento a ser gerado -->
            <input type="hidden" name="date_start_stage" value="<?= $_GET['date_start_stage'] ?? '' ?>">

            <div class="col-12 d-flex flex-wrap gap-2 justify-content-center" id="gerar_documento">
                <button class="btn btn-outline-dark d-flex gap-2 align-items-center" type="submit" name="gerar_documento">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M320 464c8.8 0 16-7.2 16-16V160H256c-17.7 0-32-14.3-32-32V48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H320zM0 64C0 28.7 28.7 0 64 0H229.5c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64z" />
                    </svg>
                    Gerar TCE
                </button>
            </div>
        </form>

        <?php
        // Montando o calendário
        if (isset($dateStartStage) && isset($dateEndSemester)) {
            $yearStartStage = date("Y", strtotime(implode('-', array_reverse(explode('/', $dateStartStage)))));
            $yearEndSemester = date("Y", strtotime(implode('-', array_reverse(explode('/', $dateEndSemester)))));

            if ($yearStartStage == $yearEndSemester) {
                $anos = [$yearStartStage];
            } else {
                for ($ano = $yearStartStage; $ano <= $yearEndSemester; $ano++) {
                    $anos[] = $ano;
                }
            }

            $_SESSION['dias_estagio'] = $days;
            $_SESSION['date_end_stage'] = $dateEndStage;

            foreach ($anos as $key => $ano) {
        ?>
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
            }
            $legendaStagio = true;
            include('../components/legenda.php');
        }
        ?>
    </div>

    <?php include('../components/creditos.php') ?>

    <!-- Bootstrap 5.2.3 - JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="../assets/js/week_days.js"></script>
    <script src="../assets/js/alerts.js"></script>
</body>

</html>