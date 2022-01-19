;(function(params) {
    const itensDataContainer = document.querySelector('body#index .itens-container .itens');
    itensDataContainer.addEventListener('click', function(e){
        let itemCliqued = e.target;
        let itemId = itemCliqued.getAttribute('data-pull');
        if(itemId){
            window.location.href = `/?${itemId}`;
        }
    });
    const url = window.location.href; 
    var res = url.split('?'); 
    if (res[1]) {
        switch (res[1]) {
            case 'cpf':
                dataSelected('cpf');
                break;
            case 'cnpj':
                dataSelected('cnpj');
                break;
            case 'nome':
                dataSelected('nome');
                break;
            case 'telefone':
                dataSelected('telefone');
                break;
            default:
                break;
        }
    }
    function toggleBackButtonState() {
        const $backButton = document.querySelector('#backToHome');
        if ($backButton.style.display === 'block') {
            $backButton.style.display = 'none';
        } else {
            $backButton.style.display = 'block';
        }
    }
    function dataSelected(data) {
        if (data) {
            toggleBackButtonState();
            const $noSelectedData = document.querySelector('#no-selected-data');
            $noSelectedData.style.display = "none";
            const $selectedData = document.querySelector('#selected-data');
            $selectedData.style.display = 'block';
            const $dataSubtitle = $selectedData.querySelector('#dataSubtitle');
            $dataSubtitle.innerHTML = data;
            const $inputData = $selectedData.querySelector('#inputData');
            $inputData.setAttribute('placeholder', `Digite o ${data} a ser puxado.`);
            $inputData.setAttribute('name', data);
            switch (data) {
                case 'telefone':
                    $('#inputData').mask('(00) 00000-0000');
                    break;
                case 'cpf':
                    $('#inputData').mask('000.000.000-00');
                    break;
                case 'cnpj':
                    $('#inputData').mask('00.000.000/0000-00');
                    break;
                default:
                    break;
            }
        }
    }
})()