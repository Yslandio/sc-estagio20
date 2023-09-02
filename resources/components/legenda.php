<div class="row justify-content-center">
    <div class="col-12 col-xl-6">
        <div class="d-flex flex-wrap gap-2 flex-column rounded border border-2 pb-3 bg-light">
            <div class="w-100">
                <hr class="w-100">
                <h4 class="title text-center mb-0">LEGENDA DE CALENDÁRIO</h4>
                <hr class="w-100">
            </div>

            <div class="d-flex flex-wrap gap-2 align-items-center border border-1 shadow-sm rounded p-2 mx-3">
                <span class="bg-light text-black rounded border border-1 d-flex justify-content-center align-items-center" style="width:30px; height:25px;">Nº</span>
                <p class="m-0">Dia útil (Célula branca com escrita em preto)</p>
            </div>
            <div class="d-flex flex-wrap gap-2 align-items-center border border-1 shadow-sm rounded p-2 mx-3">
                <span class="bg-light text-black rounded border border-1 d-flex justify-content-center align-items-center fw-bold" style="width:30px; height:25px;">Nº</span>
                <p class="m-0">Dia atual (Célula com escrita em preto negrito)</p>
            </div>
            <div class="d-flex flex-wrap gap-2 align-items-center border border-1 shadow-sm rounded p-2 mx-3">
                <span class="bg-light text-danger rounded border border-1 d-flex justify-content-center align-items-center fw-bold" style="width:30px; height:25px;">Nº</span>
                <p class="m-0">Dia de domingo (Célula com escrita em vermelho)</p>
            </div>
            <div class="d-flex flex-wrap gap-2 align-items-center border border-1 shadow-sm rounded p-2 mx-3">
                <span class="bg-light text-primary rounded border border-1 d-flex justify-content-center align-items-center fw-bold" style="width:30px; height:25px;">Nº</span>
                <p class="m-0">Dia de sábado (Célula com escrita em azul)</p>
            </div>
            <div class="d-flex flex-wrap gap-2 align-items-center border border-1 shadow-sm rounded p-2 mx-3">
                <span class="bg-danger text-white rounded border border-1 d-flex justify-content-center align-items-center" style="width:30px; height:25px;">Nº</span>
                <p class="m-0">Dia não letivo (Célula com fundo vermelho)</p>
            </div>
            <?php if ($legendaStagio) { ?>
                <div class="d-flex flex-wrap gap-2 align-items-center border border-1 shadow-sm rounded p-2 mx-3">
                    <span class="text-black rounded border border-1 d-flex justify-content-center align-items-center" style="width:30px; height:25px; background-color: orange;">Nº</span>
                    <p class="m-0">Dia de estágio (Célula com fundo laranja)</p>
                </div>
                <div class="d-flex flex-wrap gap-2 align-items-center border border-1 shadow-sm rounded p-2 mx-3">
                    <span class="text-black rounded border border-1 d-flex justify-content-center align-items-center" style="width:30px; height:25px; background-color: yellow;">Nº</span>
                    <p class="m-0">Dia de fim do semestre (Célula com fundo vermelho)</p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>