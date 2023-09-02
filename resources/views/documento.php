<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include('../components/head.php') ?>

    <style>
        .overflow-auto {
            height: 600px;
        }

        #exportar_docx svg {
            width: 25px;
            height: 25px;
        }

        #exportar_pdf svg {
            width: 20px;
            height: 20px;
        }

        @media screen and (max-width: 756px) {
            .overflow-auto {
                height: 400px;
            }

            /* #exportar_docx svg {
                width: 30px;
                height: 30px;
            }

            #exportar_pdf svg {
                width: 25px;
                height: 25px;
            } */
        }

        header,
        main,
        footer {
            font-family: 'Arial', sans-serif !important;
        }
    </style>
</head>

<body>
    <div class="container pb-3">
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
                    <h4 class="title mb-0 bg-light p-2 rounded shadow-sm">GERAR TCE</h4>
                </div>
                <hr class="w-100">
            </div>
        </div>

        <div class="d-flex flex-wrap">
            <div class="col-12 col-xl-6 pe-md-4">
                <div class="d-flex flex-wrap gap-2 justify-content-center my-2" id="formulario">
                    <form class="w-100" action="../../models/documento.php" method="post" id="exportar_documento_pdf">
                        <!-- Inputs com informação a serem inseridas no documento -->
                        <div class="p-2 border border-1 rounded overflow-auto shadow">
                            <div class="d-flex flex-wrap gap-2 border border-1 rounded p-3">
                                <h5>Dados do concedente</h5>
                                <div class="w-100">
                                    <label>Concedente:</label>
                                    <input class="form-control" type="text" name="concedente_nome" id="concedente_nome" placeholder="Nome da instituição" value="INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SERTÃO PERNAMBUCANO - CAMPUS Petrolina, adiante INSTITUIÇÃO DE ENSINO">
                                </div>
                                <div class="w-100">
                                    <label>CNPJ:</label>
                                    <input class="form-control" type="text" name="concedente_cnpj" id="concedente_cnpj" placeholder="" value="10.830.301/0003-68">
                                </div>
                                <div class="w-100">
                                    <label>Natureza jurídica da instituição:</label>
                                    <input class="form-control" type="text" name="concedente_natureza_juridica" id="concedente_natureza_juridica" placeholder="" value="Autarquia Federal vinculada ao Ministério da Educação">
                                </div>
                                <div class="w-100">
                                    <label>Endereço:</label>
                                    <input class="form-control" type="text" name="concedente_endereco" id="concedente_endereco" placeholder="Rua, número, bairro, cidade/UF, cep, telefone" value="Rua Maria Luzia de Araújo Gomes Cabral, n° 791, João de Deus, CEP. 56.316-686 Petrolina/PE, Telefone ( 87 ) 2101-4300">
                                </div>
                                <div class="w-100">
                                    <label>Representante:</label>
                                    <input class="form-control" type="text" name="concedente_representante" id="concedente_representante" placeholder="Representação da instituição" value="Representada por Fabiano de Almeida Marinho Diretor Geral do Campus Petrolina, nomeado pela Portaria D.O.U N° 187/2020 de 03 de março de 2020, Identidade n° 1373249 – SSP/PB, CPF n° 692346204-53">
                                </div>
                                <div class="w-100">
                                    <label>Supervisor(a) do estágio:</label>
                                    <input class="form-control" type="text" name="concedente_supervisor" id="concedente_supervisor" placeholder="Responsável da instituição por supervisionar o estagiário" value="">
                                </div>
                                <div class="w-100">
                                    <label>Cargo do(a) supervisor(a):</label>
                                    <input class="form-control" type="text" name="concedente_supervisor_cargo" id="concedente_supervisor_cargo" placeholder="Área de atuação do supervisor do estágio" value="">
                                </div>
                                <div class="w-100">
                                    <label>Formação do(a) supervisor(a):</label>
                                    <input class="form-control" type="text" name="concedente_supervisor_formacao" id="concedente_supervisor_formacao" placeholder="Graduação do supervisor do estágio" value="">
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex flex-wrap gap-2 border border-1 rounded p-3">
                                <h5>Dados do estagiário</h5>
                                <div class="w-100">
                                    <label>Estagiário(a):</label>
                                    <input class="form-control" type="text" name="estagiario_nome" id="estagiario_nome" placeholder="Nome completo do(a) estagiário(a)" value="">
                                </div>
                                <div class="w-100">
                                    <label>CPF:</label>
                                    <input class="form-control" type="text" name="estagiario_cpf" id="estagiario_cpf" placeholder="" value="">
                                </div>
                                <div class="w-100">
                                    <label>RG:</label>
                                    <input class="form-control" type="text" name="estagiario_rg" id="estagiario_rg" placeholder="" value="">
                                </div>
                                <div class="w-100">
                                    <label>Órgão expedidor:</label>
                                    <input class="form-control" type="text" name="estagiario_orgao_expedidor" id="estagiario_orgao_expedidor" placeholder="Órgao expedidor do CPF" value="">
                                </div>
                                <div class="w-100">
                                    <label>Data de nascimento:</label>
                                    <input class="form-control" type="date" name="estagiario_data_nascimento" id="estagiario_data_nascimento" placeholder="" value="">
                                </div>
                                <div class="w-100">
                                    <label>Endereço:</label>
                                    <input class="form-control" type="text" name="estagiario_endereco" id="estagiario_endereco" placeholder="Rua, número, bairro, cidade/UF, cep, telefone" value="">
                                </div>
                                <div class="w-100">
                                    <label>E-mail:</label>
                                    <input class="form-control" type="text" name="estagiario_email" id="estagiario_email" placeholder="" value="">
                                </div>
                                <div class="w-100">
                                    <label>Curso:</label>
                                    <input class="form-control" type="text" name="estagiario_curso" id="estagiario_curso" placeholder="Ex: Licenciatura em Computação" value="">
                                </div>
                                <div class="w-100">
                                    <label>Semestre/ano:</label>
                                    <input class="form-control" type="text" name="estagiario_semestre" id="estagiario_semestre" placeholder="Ex: 8° semestre" value="">
                                </div>
                                <div class="w-100">
                                    <label>Turno:</label>
                                    <input class="form-control" type="text" name="estagiario_turno" id="estagiario_turno" placeholder="Ex: manhã" value="">
                                </div>
                                <div class="w-100">
                                    <label>Aulas/expediente:</label>
                                    <input class="form-control" type="text" name="estagiario_aulas" id="estagiario_aulas" placeholder="Ex: aulas na quinta das 07:30 às 09:00 horas; e no turno da tarde, com aulas: segunda e quarta das 16:45 às 18: 15 horas" value="">
                                </div>
                                <div class="w-100">
                                    <label>Estágio:</label>
                                    <input class="form-control" type="text" name="estagiario_estagio" id="estagiario_estagio" placeholder="Ex: Estágio 4" value="">
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex flex-wrap gap-2 border border-1 rounded p-3">
                                <h5>Instituição de ensino</h5>
                                <div class="w-100">
                                    <label>Instituição:</label>
                                    <input class="form-control" type="text" name="instituicao_nome" id="instituicao_nome" placeholder="" value="INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DO SERTÃO PERNAMBUCANO - CAMPUS Petrolina, adiante INSTITUIÇÃO DE ENSINO">
                                </div>
                                <div class="w-100">
                                    <label>CNPJ:</label>
                                    <input class="form-control" type="text" name="instituicao_cnpj" id="instituicao_cnpj" placeholder="" value="10.830.301/0003-68">
                                </div>
                                <div class="w-100">
                                    <label>Natureza jurídica da instituição:</label>
                                    <input class="form-control" type="text" name="instituicao_natureza_juridica" id="instituicao_natureza_juridica" placeholder="" value="Autarquia Federal vinculada ao Ministério da Educação">
                                </div>
                                <div class="w-100">
                                    <label>Endereço:</label>
                                    <input class="form-control" type="text" name="instituicao_endereco" id="instituicao_endereco" placeholder="Rua, número, bairro, cidade/UF, cep, telefone" value="Rua Maria Luzia de Araújo Gomes Cabral, n° 791, João de Deus, CEP. 56.316-686 Petrolina/PE, Telefone ( 87 ) 2101-4300">
                                </div>
                                <div class="w-100">
                                    <label>Representante:</label>
                                    <input class="form-control" type="text" name="instituicao_representante" id="instituicao_representante" placeholder="Representação da instituição" value="Representada por Fabiano de Almeida Marinho Diretor Geral do Campus Petrolina, nomeado pela Portaria D.O.U N° 187/2020 de 03 de março de 2020, Identidade n° 1373249 – SSP/PB, CPF n° 692346204-53">
                                </div>
                                <div class="w-100">
                                    <label>Orientador(a) do estágio:</label>
                                    <input class="form-control" type="text" name="instituicao_orientador" id="instituicao_orientador" placeholder="Responsável da instituição por supervisionar o estagiário" value="">
                                </div>
                            </div>

                            <hr class="my-4">

                            <!-- Inputs com informação vindas da página de cálculo de horas a serem inseridas no documento -->
                            <div class="d-flex flex-wrap gap-2 border border-1 rounded p-3">
                                <h5>Dados do estágio:</h5>
                                <div class="w-100">
                                    <label>Data de início do estágio:</label>
                                    <input class="form-control" type="date" name="date_start_stage" id="date_start_stage" placeholder="" value="<?= $_GET['date_start_stage'] ?? '' ?>">
                                </div>
                                <div class="w-100">
                                    <label>Data de término do estágio:</label>
                                    <input class="form-control" type="date" name="date_end_stage" id="date_end_stage" placeholder="" value="<?= implode('-', array_reverse(explode('/', $_GET['date_end_stage']))) ?? '' ?>">
                                </div>
                                <div class="w-100">
                                    <label>Horas semanais de estágio:</label>
                                    <input class="form-control" type="text" name="estagio_horas_semanais" id="estagio_horas_semanais" placeholder="Ex: 04 horas" value="<?= $_GET['quantidade_horas_semanais'] ?? '' ?>">
                                </div>
                                <div class="w-100">
                                    <label>Horas de estágio total:</label>
                                    <input class="form-control" type="text" name="estagio_horas_total" id="estagio_horas_total" placeholder="Horas do estágio dobrada para curso superior" value="<?= $_GET['quantidade_horas_estagio_dobrado'] ?? '' ?>">
                                </div>
                                <div class="w-100">
                                    <label>Meses de duração do estágio:</label>
                                    <input class="form-control" type="text" name="estagio_meses_duracao" id="estagio_meses_duracao" placeholder="Ex: 03 (três) meses" value="<?= $_GET['estagio_meses_duracao'] ?? '' ?>">
                                </div>
                                <div class="w-100">
                                    <label>Dias de duração do estágio:</label>
                                    <input class="form-control" type="text" name="estagio_dias_duracao" id="estagio_dias_duracao" placeholder="Ex: 18 (dezoito) dias" value="<?= $_GET['estagio_dias_duracao'] ?? '' ?>">
                                </div>
                                <div class="form-check w-100">
                                    <input class="form-check-input" type="checkbox" name="checkbox_matutino" id="checkbox_matutino" checked>
                                    <label class="form-check-label" style="cursor: pointer;" for="checkbox_matutino">Horários Matutino</label>
                                </div>
                                <div class="w-100 overflow-auto h-auto" id="table_matutino">
                                    <table class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th colspan="8" class="text-center" style="padding: 4px; border: 1px solid black;">MATUTINO</th>
                                            </tr>
                                            <tr>
                                                <th style="padding: 4px; border: 1px solid black;"></th>
                                                <th style="padding: 4px; border: 1px solid black;">Segunda</th>
                                                <th style="padding: 4px; border: 1px solid black;">Terça</th>
                                                <th style="padding: 4px; border: 1px solid black;">Quarta</th>
                                                <th style="padding: 4px; border: 1px solid black;">Quinta</th>
                                                <th style="padding: 4px; border: 1px solid black;">Sexta</th>
                                                <th style="padding: 4px; border: 1px solid black;">Sábado</th>
                                                <th style="padding: 4px; border: 1px solid black;">Domingo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 6; $i++) { ?>
                                                <tr>
                                                    <td style="padding: 4px; border: 1px solid black;"><?= $i ?>ª aula</td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="matutino_segunda_<?= $i ?>_hora_1" id="matutino_segunda_<?= $i ?>_hora_1">
                                                        <input type="time" name="matutino_segunda_<?= $i ?>_hora_2" id="matutino_segunda_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="matutino_terca_<?= $i ?>_hora_1" id="matutino_terca_<?= $i ?>_hora_1">
                                                        <input type="time" name="matutino_terca_<?= $i ?>_hora_2" id="matutino_terca_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="matutino_quarta_<?= $i ?>_hora_1" id="matutino_quarta_<?= $i ?>_hora_1">
                                                        <input type="time" name="matutino_quarta_<?= $i ?>_hora_2" id="matutino_quarta_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="matutino_quinta_<?= $i ?>_hora_1" id="matutino_quinta_<?= $i ?>_hora_1">
                                                        <input type="time" name="matutino_quinta_<?= $i ?>_hora_2" id="matutino_quinta_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="matutino_sexta_<?= $i ?>_hora_1" id="matutino_sexta_<?= $i ?>_hora_1">
                                                        <input type="time" name="matutino_sexta_<?= $i ?>_hora_2" id="matutino_sexta_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="matutino_sabado_<?= $i ?>_hora_1" id="matutino_sabado_<?= $i ?>_hora_1">
                                                        <input type="time" name="matutino_sabado_<?= $i ?>_hora_2" id="matutino_sabado_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="matutino_domingo_<?= $i ?>_hora_1" id="matutino_domingo_<?= $i ?>_hora_1">
                                                        <input type="time" name="matutino_domingo_<?= $i ?>_hora_2" id="matutino_domingo_<?= $i ?>_hora_2">
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-check w-100">
                                    <input class="form-check-input" type="checkbox" name="checkbox_vespertino" id="checkbox_vespertino" checked>
                                    <label class="form-check-label" style="cursor: pointer;" for="checkbox_vespertino">Horários Vespertino</label>
                                </div>
                                <div class="w-100 overflow-auto h-auto" id="table_vespertino">
                                    <table class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th colspan="8" class="text-center" style="padding: 4px; border: 1px solid black;">VESPERTINO</th>
                                            </tr>
                                            <tr>
                                                <th style="padding: 4px; border: 1px solid black;"></th>
                                                <th style="padding: 4px; border: 1px solid black;">Segunda</th>
                                                <th style="padding: 4px; border: 1px solid black;">Terça</th>
                                                <th style="padding: 4px; border: 1px solid black;">Quarta</th>
                                                <th style="padding: 4px; border: 1px solid black;">Quinta</th>
                                                <th style="padding: 4px; border: 1px solid black;">Sexta</th>
                                                <th style="padding: 4px; border: 1px solid black;">Sábado</th>
                                                <th style="padding: 4px; border: 1px solid black;">Domingo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 6; $i++) { ?>
                                                <tr>
                                                    <td style="padding: 4px; border: 1px solid black;"><?= $i ?>ª aula</td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="vespertino_segunda_<?= $i ?>_hora_1" id="vespertino_segunda_<?= $i ?>_hora_1">
                                                        <input type="time" name="vespertino_segunda_<?= $i ?>_hora_2" id="vespertino_segunda_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="vespertino_terca_<?= $i ?>_hora_1" id="vespertino_terca_<?= $i ?>_hora_1">
                                                        <input type="time" name="vespertino_terca_<?= $i ?>_hora_2" id="vespertino_terca_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="vespertino_quarta_<?= $i ?>_hora_1" id="vespertino_quarta_<?= $i ?>_hora_1">
                                                        <input type="time" name="vespertino_quarta_<?= $i ?>_hora_2" id="vespertino_quarta_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="vespertino_quinta_<?= $i ?>_hora_1" id="vespertino_quinta_<?= $i ?>_hora_1">
                                                        <input type="time" name="vespertino_quinta_<?= $i ?>_hora_2" id="vespertino_quinta_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="vespertino_sexta_<?= $i ?>_hora_1" id="vespertino_sexta_<?= $i ?>_hora_1">
                                                        <input type="time" name="vespertino_sexta_<?= $i ?>_hora_2" id="vespertino_sexta_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="vespertino_sabado_<?= $i ?>_hora_1" id="vespertino_sabado_<?= $i ?>_hora_1">
                                                        <input type="time" name="vespertino_sabado_<?= $i ?>_hora_2" id="vespertino_sabado_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="vespertino_domingo_<?= $i ?>_hora_1" id="vespertino_domingo_<?= $i ?>_hora_1">
                                                        <input type="time" name="vespertino_domingo_<?= $i ?>_hora_2" id="vespertino_domingo_<?= $i ?>_hora_2">
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-check w-100">
                                    <input class="form-check-input" type="checkbox" name="checkbox_noturno" id="checkbox_noturno" checked>
                                    <label class="form-check-label" style="cursor: pointer;" for="checkbox_noturno">Horários Noturno</label>
                                </div>
                                <div class="w-100 overflow-auto h-auto" id="table_noturno">
                                    <table class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th colspan="8" class="text-center" style="padding: 4px; border: 1px solid black;">NOTURNO</th>
                                            </tr>
                                            <tr>
                                                <th style="padding: 4px; border: 1px solid black;"></th>
                                                <th style="padding: 4px; border: 1px solid black;">Segunda</th>
                                                <th style="padding: 4px; border: 1px solid black;">Terça</th>
                                                <th style="padding: 4px; border: 1px solid black;">Quarta</th>
                                                <th style="padding: 4px; border: 1px solid black;">Quinta</th>
                                                <th style="padding: 4px; border: 1px solid black;">Sexta</th>
                                                <th style="padding: 4px; border: 1px solid black;">Sábado</th>
                                                <th style="padding: 4px; border: 1px solid black;">Domingo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 1; $i <= 4; $i++) { ?>
                                                <tr>
                                                    <td style="padding: 4px; border: 1px solid black;"><?= $i ?>ª aula</td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="noturno_segunda_<?= $i ?>_hora_1" id="noturno_segunda_<?= $i ?>_hora_1">
                                                        <input type="time" name="noturno_segunda_<?= $i ?>_hora_2" id="noturno_segunda_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="noturno_terca_<?= $i ?>_hora_1" id="noturno_terca_<?= $i ?>_hora_1">
                                                        <input type="time" name="noturno_terca_<?= $i ?>_hora_2" id="noturno_terca_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="noturno_quarta_<?= $i ?>_hora_1" id="noturno_quarta_<?= $i ?>_hora_1">
                                                        <input type="time" name="noturno_quarta_<?= $i ?>_hora_2" id="noturno_quarta_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="noturno_quinta_<?= $i ?>_hora_1" id="noturno_quinta_<?= $i ?>_hora_1">
                                                        <input type="time" name="noturno_quinta_<?= $i ?>_hora_2" id="noturno_quinta_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="noturno_sexta_<?= $i ?>_hora_1" id="noturno_sexta_<?= $i ?>_hora_1">
                                                        <input type="time" name="noturno_sexta_<?= $i ?>_hora_2" id="noturno_sexta_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="noturno_sabado_<?= $i ?>_hora_1" id="noturno_sabado_<?= $i ?>_hora_1">
                                                        <input type="time" name="noturno_sabado_<?= $i ?>_hora_2" id="noturno_sabado_<?= $i ?>_hora_2">
                                                    </td>
                                                    <td style="padding: 4px; border: 1px solid black;">
                                                        <input type="time" name="noturno_domingo_<?= $i ?>_hora_1" id="noturno_domingo_<?= $i ?>_hora_1">
                                                        <input type="time" name="noturno_domingo_<?= $i ?>_hora_2" id="noturno_domingo_<?= $i ?>_hora_2">
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex flex-wrap gap-2 border border-1 rounded p-3">
                                <h5>Dados do documento:</h5>
                                <div class="w-100">
                                    <label>N° do documento:</label>
                                    <input class="form-control" type="text" name="documento_numero" id="documento_numero" placeholder="Ex: 191/2022" value="">
                                </div>
                                <div class="w-100">
                                    <label>Cidade-UF:</label>
                                    <input class="form-control" type="text" name="documento_cidade_uf" id="documento_cidade_uf" placeholder="" value="Petrolina-PE">
                                </div>
                                <div class="w-100">
                                    <label>Dia:</label>
                                    <input class="form-control" type="number" name="documento_dia" id="documento_dia" placeholder="Escrita em numeral" value="">
                                </div>
                                <div class="w-100">
                                    <label>Mês:</label>
                                    <input class="form-control" type="text" name="documento_mes" id="documento_mes" placeholder="Escrita por extenso" value="">
                                </div>
                                <div class="w-100">
                                    <label>Ano:</label>
                                    <input class="form-control" type="number" name="documento_ano" id="documento_ano" placeholder="Escrita em numeral" value="<?= date("Y") ?>">
                                </div>
                                <div class="w-100">
                                    <label>Supervisor(a):</label>
                                    <input class="form-control" type="text" name="documento_supervisor_nome" id="documento_supervisor_nome" placeholder="Nome completo do(a) supervisor(a)" value="">
                                </div>
                                <div class="w-100">
                                    <label>Diretor(a):</label>
                                    <input class="form-control" type="text" name="documento_diretor_nome" id="documento_diretor_nome" placeholder="Nome completo do(a) diretor(a) do Campus" value="">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2 justify-content-end py-4">
                            <button class="btn btn-outline-dark" id="exportar_docx" type="button" onclick="downloadDoc()">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 80 80">
                                    <path d="M 21 10 C 20.447 10 20 10.448 20 11 L 20 27 L 14 27 C 13.447 27 13 27.448 13 28 L 13 55 C 13 55.552 13.447 56 14 56 L 20 56 L 20 69 C 20 69.552 20.447 70 21 70 L 66 70 C 66.553 70 67 69.552 67 69 C 67 69 66.993187 25.035484 66.992188 25.021484 C 66.997187 24.754484 66.903031 24.489969 66.707031 24.292969 L 52.707031 10.292969 C 52.461031 10.046969 52.171609 10 51.599609 10 L 21 10 z M 22 12 L 51 12 L 51 25 C 51 25.552 51.447 26 52 26 L 65 26 L 65 68 L 22 68 L 22 56 L 41 56 C 41.553 56 42 55.552 42 55 L 42 28 C 42 27.448 41.553 27 41 27 L 22 27 L 22 12 z M 53 13.414062 L 63.585938 24 L 53 24 L 53 13.414062 z M 15 29 L 40 29 L 40 54 L 15 54 L 15 29 z M 47 32 A 1 1 0 0 0 47 34 A 1 1 0 0 0 47 32 z M 51 32 A 1 1 0 0 0 51 34 A 1 1 0 0 0 51 32 z M 55 32 A 1 1 0 0 0 55 34 A 1 1 0 0 0 55 32 z M 59 32 A 1 1 0 0 0 59 34 A 1 1 0 0 0 59 32 z M 18.349609 34.304688 L 21.722656 48.695312 L 25.107422 48.695312 L 27.572266 37.630859 L 30.037109 48.695312 L 33.277344 48.695312 L 36.650391 34.304688 L 33.835938 34.304688 L 31.611328 44.757812 L 29.146484 34.304688 L 25.998047 34.304688 L 23.457031 45.080078 L 21.164062 34.304688 L 18.349609 34.304688 z M 47 38 A 1 1 0 0 0 47 40 A 1 1 0 0 0 47 38 z M 51 38 A 1 1 0 0 0 51 40 A 1 1 0 0 0 51 38 z M 55 38 A 1 1 0 0 0 55 40 A 1 1 0 0 0 55 38 z M 59 38 A 1 1 0 0 0 59 40 A 1 1 0 0 0 59 38 z M 47 44 A 1 1 0 0 0 47 46 A 1 1 0 0 0 47 44 z M 51 44 A 1 1 0 0 0 51 46 A 1 1 0 0 0 51 44 z M 55 44 A 1 1 0 0 0 55 46 A 1 1 0 0 0 55 44 z M 59 44 A 1 1 0 0 0 59 46 A 1 1 0 0 0 59 44 z M 47 50 A 1 1 0 0 0 47 52 A 1 1 0 0 0 47 50 z M 51 50 A 1 1 0 0 0 51 52 A 1 1 0 0 0 51 50 z M 55 50 A 1 1 0 0 0 55 52 A 1 1 0 0 0 55 50 z M 59 50 A 1 1 0 0 0 59 52 A 1 1 0 0 0 59 50 z"></path>
                                </svg>
                                Exportar Para DOCX
                            </button>
                            <button class="btn btn-outline-info" id="exportar_pdf" type="submit" name="exportar_documento_pdf">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @ - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M64 464H96v48H64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H229.5c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3V288H336V160H256c-17.7 0-32-14.3-32-32V48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16zM176 352h32c30.9 0 56 25.1 56 56s-25.1 56-56 56H192v32c0 8.8-7.2 16-16 16s-16-7.2-16-16V448 368c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24H192v48h16zm96-80h32c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H304c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H320v96h16zm80-112c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v32h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H448v48c0 8.8-7.2 16-16 16s-16-7.2-16-16V432 368z" />
                                </svg>
                                Exportar Para PDF
                            </button>
                        </div>
                    </form>
                    <form class="d-none" action="../../models/documento.php" method="post" id="exportar_documento_doc">
                        <input type="hidden" name="exportar_documento_doc">
                    </form>
                </div>
            </div>
            <div class="col-12 col-xl-6 ps-md-4">
                <div class="d-flex flex-wrap gap-2 justify-content-center my-2 border border-1 rounded overflow-auto shadow" id="previa_documento">
                    <?php
                    $img_campus_petrolina = "../assets/img/campus_petrolina.png";
                    $img_escudo_brasil = "../assets/img/escudo_brasil.png";

                    include("../components/pdf.php");

                    echo "<div style='padding: 4px 12px;'>";
                    echo $cabecalho;
                    echo $html;
                    echo $rodape;
                    echo "</div>";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include('../components/creditos.php') ?>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        function downloadDoc() {
            $("#exportar_documento_doc").submit();
        }

        // Atribuir os dados dos inputs na prévia de vizualização do documento
        $(() => {
            var turnos = ["matutino", "vespertino", "noturno"];
            turnos.forEach(turno => {
                $("#checkbox_" + turno).on("input", function() {
                    if (document.querySelector("#checkbox_" + turno).checked) {
                        $("#table_" + turno).css("display", "block");
                        $("#doc_table_" + turno).css("display", "block");
                    } else {
                        $("#table_" + turno).css("display", "none");
                        $("#doc_table_" + turno).css("display", "none");
                    }
                });
            });

            var campos = [
                "concedente_nome",
                "concedente_cnpj",
                "concedente_natureza_juridica",
                "concedente_endereco",
                "concedente_representante",
                "concedente_supervisor",
                "concedente_supervisor_cargo",
                "concedente_supervisor_formacao",

                "estagiario_nome",
                "estagiario_cpf",
                "estagiario_rg",
                "estagiario_orgao_expedidor",
                "estagiario_data_nascimento",
                "estagiario_endereco",
                "estagiario_email",
                "estagiario_curso",
                "estagiario_semestre",
                "estagiario_turno",
                "estagiario_aulas",
                "estagiario_estagio",

                "instituicao_nome",
                "instituicao_cnpj",
                "instituicao_natureza_juridica",
                "instituicao_endereco",
                "instituicao_representante",
                "instituicao_orientador",

                "date_start_stage",
                "date_end_stage",
                "estagio_horas_semanais",
                "estagio_horas_total",
                "estagio_meses_duracao",
                "estagio_dias_duracao",

                "documento_numero",
                "documento_cidade_uf",
                "documento_dia",
                "documento_mes",
                "documento_ano",
                "documento_supervisor_nome",
                "documento_diretor_nome",
            ];

            var table = [];
            for (let index = 1; index <= 6; index++) {
                table.push("matutino_segunda_" + index + "_hora_1");
                table.push("matutino_segunda_" + index + "_hora_2");

                table.push("matutino_terca_" + index + "_hora_1");
                table.push("matutino_terca_" + index + "_hora_2");

                table.push("matutino_quarta_" + index + "_hora_1");
                table.push("matutino_quarta_" + index + "_hora_2");

                table.push("matutino_quinta_" + index + "_hora_1");
                table.push("matutino_quinta_" + index + "_hora_2");

                table.push("matutino_sexta_" + index + "_hora_1");
                table.push("matutino_sexta_" + index + "_hora_2");

                table.push("matutino_sabado_" + index + "_hora_1");
                table.push("matutino_sabado_" + index + "_hora_2");

                table.push("matutino_domingo_" + index + "_hora_1");
                table.push("matutino_domingo_" + index + "_hora_2");


                table.push("vespertino_segunda_" + index + "_hora_1");
                table.push("vespertino_segunda_" + index + "_hora_2");

                table.push("vespertino_terca_" + index + "_hora_1");
                table.push("vespertino_terca_" + index + "_hora_2");

                table.push("vespertino_quarta_" + index + "_hora_1");
                table.push("vespertino_quarta_" + index + "_hora_2");

                table.push("vespertino_quinta_" + index + "_hora_1");
                table.push("vespertino_quinta_" + index + "_hora_2");

                table.push("vespertino_sexta_" + index + "_hora_1");
                table.push("vespertino_sexta_" + index + "_hora_2");

                table.push("vespertino_sabado_" + index + "_hora_1");
                table.push("vespertino_sabado_" + index + "_hora_2");

                table.push("vespertino_domingo_" + index + "_hora_1");
                table.push("vespertino_domingo_" + index + "_hora_2");


                if (index <= 4) {
                    table.push("noturno_segunda_" + index + "_hora_1");
                    table.push("noturno_segunda_" + index + "_hora_2");

                    table.push("noturno_terca_" + index + "_hora_1");
                    table.push("noturno_terca_" + index + "_hora_2");

                    table.push("noturno_quarta_" + index + "_hora_1");
                    table.push("noturno_quarta_" + index + "_hora_2");

                    table.push("noturno_quinta_" + index + "_hora_1");
                    table.push("noturno_quinta_" + index + "_hora_2");

                    table.push("noturno_sexta_" + index + "_hora_1");
                    table.push("noturno_sexta_" + index + "_hora_2");

                    table.push("noturno_sabado_" + index + "_hora_1");
                    table.push("noturno_sabado_" + index + "_hora_2");

                    table.push("noturno_domingo_" + index + "_hora_1");
                    table.push("noturno_domingo_" + index + "_hora_2");
                }
            }

            var value;

            function validaDatas(element) {
                if (element == "estagiario_data_nascimento" || element == "date_start_stage" || element == "date_end_stage") {
                    var data = new Date();
                    value = data.toLocaleDateString("pt-BR", {
                        day: "2-digit",
                        month: "2-digit",
                        year: "numeric"
                    });
                } else
                    value = $("#" + element).val();
            }
            campos.forEach(element => {
                if ($("#" + element).val() != "") { // Atualiza os valores ao carregar a página
                    validaDatas(element);

                    $("#doc_" + element).html(value);
                }

                $("#" + element).on("input", function() { // Atualiza os valores ao alterar os campos
                    validaDatas(element);

                    $("#doc_" + element).html(value);
                });
            });

            table.forEach(element => {
                if ($("#" + element).val() != "")
                    $("#doc_" + element).val($("#" + element).val());

                $("#" + element).on("input", function() {
                    $("#doc_" + element).val($("#" + element).val());
                });
            });

            // Para evitar problema com repetição de id fez-se essa exceção com o uso de uma classe no lugar
            $("#estagiario_nome").on("input", function() {
                $(".doc_estagiario_nome").html($("#estagiario_nome").val());
            });
        });
    </script>
</body>

</html>