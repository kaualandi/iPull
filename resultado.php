<?php
    if (!empty($_POST['nome'])) {
        $dataType = 'nome';
        $data = $_POST['nome'];
    } else if (!empty($_POST['cpf'])) {
        $dataType = 'cpf';
        $data = $_POST['cpf'];
    } else if (!empty($_POST['cnpj'])) {
        $dataType = 'cnpj';
        $data = $_POST['cnpj'];
    } else if (!empty($_POST['telefone'])) {
        $dataType = 'telefone';
        $data = $_POST['telefone'];
    } else {
        header('Location: /');
    }
    $data = strval($dataType);
?>
<main id="main_result" class="mt-3 mb-4">
    <h3>Conseguimos!</h3>
    <p>Os seguintes dados foram resgatados:</p>
    <div id="infors">
        <label>Nome completo
            <input type="text" value="Kauã Landi Fernando" readonly>
        </label>
        <label>CPF
            <input type="text" value="204.719.767-84" readonly>
        </label>
        <label>Telefone
            <input type="text" value="(21) 99922-2644" readonly>
        </label>
    </div>
</main>