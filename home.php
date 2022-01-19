<main class="mt-3 mb-4">
    <div id="no-selected-data">
        <h3>Selecione com que dado quer puxar.</h3>
        <div class="itens-container">
            <div class="text-center mt-3 itens row">
                <button data-pull="cpf" class="col-12 col-sm-6">CPF</button>
                <button data-pull="cnpj" class="col-12 col-sm-6 disabled">CNPJ</button>
                <button data-pull="nome" class="col-12 col-sm-6 disabled">Nome</button>
                <button data-pull="telefone" class="col-12 col-sm-6 disabled">Telefone</button>
            </div>
        </div>
    </div>
    <div id="selected-data" style="display: none;">
        <h3>Digite o <span id="dataSubtitle"></span>.</h3>
        <form method="POST" action="/resultado">
            <input id="inputData" type="text">
            <button lang="en-us" type="submit">Pull</button>
        </form>
    </div>
</main>