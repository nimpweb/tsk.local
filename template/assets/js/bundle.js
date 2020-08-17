let code = {
    currentPage: 1,
    sid : 1,
    hasRepresentative : false
}

// const incomeData = [{
//     personalAccount : '0122460',
//     phone   :   '+7 (891) 284-63-67',
//     email : 'nimpweb@yandex.ru',
//     fullName: 'Алексей Тимофеевич',
//     debtDate: '28.04.2020',
//     amount: 0,
//     currency: 'RUR'
// }];


document.addEventListener('DOMContentLoaded', ready);


function ready() {
    const hasRepresentative = document.querySelector('#hasRepresentative');
    if (hasRepresentative) {
        hasRepresentative.addEventListener('change', event => {
            const block = document.querySelector('.representativeBlock');
            block.querySelectorAll('.fti-inputs').forEach(item => {
                if (event.target.checked) { item.classList.remove('display--hidden'); }
                else { item.classList.add('display--hidden'); }
            });
            if (event.target.checked) { block.classList.remove('display--hidden'); }
            else { block.classList.add('display--hidden'); }
           
        })
    }

    const equalsFaktAddressLink = document.querySelector('#equalsFaktAddressLink');
    if (equalsFaktAddressLink) {
        equalsFaktAddressLink.addEventListener('click', event => {
            const blockFaktAddr = document.querySelector('.block_fakt_addr');
            if (blockFaktAddr) {
                (event.target.checked) ? blockFaktAddr.classList.add('display--hidden') : blockFaktAddr.classList.remove('display--hidden');
            }
        });
    }

    /* Считаем максимальную мощность */
    const maxPowerK = document.querySelector('[name=maxPowerK]') || null;
    const maxPowerKA = document.querySelector('[name=maxPowerKA]') || null;
    const maxPowerKB = document.querySelector('[name=maxPowerKB]') || null;
    if (maxPowerK && maxPowerKA && maxPowerKB) {
        maxPowerKA.addEventListener('input', event => {
            doCalculteMaxPower(event, maxPowerKB, maxPowerK);
        });
        maxPowerKB.addEventListener('input', event => {
            doCalculteMaxPower(event, maxPowerKA, maxPowerK);
        });
    }


    /* Гарантирующий поставщик - mail */
    const guaranteeSupplier = document.querySelector('#guaranteeSupplier');
    if (guaranteeSupplier) {
        guaranteeSupplier.addEventListener('change', event => {
            const guaranteeSupplierEmail = document.querySelector('[name=guaranteeEmail]');
            guaranteeSupplierEmail.value = event.target.options[event.target.selectedIndex].dataset.email;
        });
    }
    
    cookieModalButton = document.querySelector('.modal-panel-btn');
    cookieModalButton.addEventListener('click', event => event.target.closest('.modal-panel').style.display = 'none')

    const showBlockForm = document.querySelector('form.fav_show_block');

    showBlockForm.addEventListener('submit', event => {
        event.preventDefault();
        let hasErrors = false;
        
        showBlockForm.querySelectorAll('.fti-inputs:not(.display--hidden) .fti-input.fti-required').forEach(input => {
            console.log(input.type)
            if (input.getAttribute('required') || input.classList.contains('fti-required')) {
                if (input.type) {
                    let isError = false;
                    switch (input.type) {
                        case 'select-one': 
                            if (input.selectedIndex == 0) { isError = true; }
                            break;
                        default: 
                            if (input.value.trim() === '') { isError = true; }
                    }
                    console.log(input)
                    if (isError) {
                        hasError = true;
                        input.style.borderColor = 'red';
                    } else {
                        input.style.borderColor = '';
                    }
                }
            }


            // if (((input.value.trim() === '') && (input.getAttribute('required') || input.classList.contains('fti-required'))))  {
            //     if (input.type == 'select' && input.selectedIndex != 0) {
            //         input.style.borderColor = '';
            //     } else {
            //         hasErrors = true;
            //         console.log(input.name)
            //         input.style.borderColor = 'red';
            //     }
            // } else {
            //     input.style.borderColor = "";
            // }
        });
        if (hasErrors) {
            showError('Заполните обязательные поля');
        } else {
            console.log('in here')
            showError(false)
            let inputData = {};
            showBlockForm.querySelectorAll('input').forEach(input => {
                if (input.type == 'radio') {
                    if (input.checked){
                        inputData[input.getAttribute('name')] = input.value;
                    }
                } else {
                    inputData[input.getAttribute('name')] = input.value;
                }
            });
            code.currentPage++;
            Object.assign(code, inputData);
            console.log(code);
        }

        
    });

    /**
     * Добавление динамически сроков проектирования 
     */
    const stageAddButton = showBlockForm.querySelectorAll('.stage-add');
    if (stageAddButton) {
        stageAddButton.forEach(button => {
            button.addEventListener('click', event => {
                console.log( event.target.dataset.stageId);
                let stageNumber = (event.target.dataset.stageId === undefined) ? 1 : +event.target.dataset.stageId;
                stageNumber++;
                let html = `
                <div class="col-12"><h5 class="mb-2 red-line-h5 line-upper">${stageNumber} очередь (этап) строительства</h5></div>	
                <div class="col-12 wr-inp fti-inputs fav-inputs">
                    <div class="title-unp pb-2">Наименование объекта <sup>*</sup></div>
                    <input type="text" class="fti-input form-control fti-required " placeholder="Например: Строительная площадка, магазин, жилой дом и т.п." name="stage${stageNumber}Name" value="">
                </div>
                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                    <div class="title-unp pb-2">Планируемый срок проектирования энергопринимающего устройства <sup>*</sup></div>
                    <input type="text" class="fti-input form-control fti-required " placeholder="месяц/год" name="stage${stageNumber}TermDesign" value="">
                </div>
                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                    <div class="title-unp pb-2">Планируемый срок введения энергопринимающего устройства в эксплуатацию  <sup>*</sup></div>
                    <input type="text" class="fti-input form-control fti-required " placeholder="месяц/год" name="stage${stageNumber}PowerReceivingDevice" value="">
                </div>
                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                    <div class="title-unp pb-2">Максимальная мощность, кВт <sup>*</sup></div>
                    <input type="text" class="fti-input form-control fti-required " placeholder="месяц/год" name="stage${stageNumber}MaxPower" value="">
                </div>
                <div class="col-md-6 col-12 wr-inp fti-inputs fav-inputs">
                    <div class="title-unp pb-2">Категория надежности  <sup>*</sup></div>
                    <select class="fti-select form-control fti-required" name="stage${stageNumber}CategoryReliability" placeholder="Выберите гарантирующего поставщика">
                        <option value="1">1-ая категория</option>
                        <option value="2">2-ая категория</option>
                        <option value="3">3-ья категория</option>
                    </select>
                </div>
                `;
                event.target.closest('.stage-button-container').insertAdjacentHTML('beforeBegin', html);
                
                event.target.setAttribute('data-stage-id', stageNumber);
                console.log('stageNumber=', stageNumber)
            })
        })
    }

}


function showError(message) {
    const block = document.querySelector('.fav_warn_text');
    if (message && message != '') {
        block.innerHTML = `<span>${message}</span>`
        block.style.display = 'block'
    } else {
        block.innerHTML = ''
        block.style.display = 'none'
    }
}

function switchPageType(ch) {
    const index = ch.value;
    document.querySelectorAll('.fav_showing').forEach(item => { 
        hideElements(item);
        let inList = item.dataset.inSid || '';
        if (inList) {
            console.log(item, inList);
            if (typeof(inList) === 'string') {
                inList = inList.split(',');
            }
            if (inList.includes(index)) {
                showElements(item);
            }
            console.log('index=', index, 'list=', inList.join(','));
        }
    });

    // document.querySelectorAll('[data-sid="'+index+'"]').forEach(item => { 
    //     showElements(item)
    // });
}

function hideElements($block) {
    $block.classList.add('display--hidden'); 
    $block.querySelectorAll('form-control').forEach(inp => inp.setAttribute('disabled', 'disabled'));
}

function showElements($block) {
    $block.classList.remove('display--hidden');
    $block.querySelectorAll('.form-control').forEach(inp => inp.removeAttribute('disabled'));
}

function doCalculateMaxUnn() {
    /* Считаем максимальное напряжение*/
    const maxPowerV = document.querySelector('[name=maxPowerV]') || null;
    const maxPowerVA = document.querySelector('[name=maxPowerVA]') || null;
    const maxPowerVB = document.querySelector('[name=maxPowerVB]') || null;
    if (maxPowerV && maxPowerVA && maxPowerVB) {
        let value1 = maxPowerVA.value;
        value1 = parseFloat(value1.replace('кВ', '').trim()) || 0;
        let value2 = maxPowerVB.value;
        value2 = parseFloat(value2.replace('кВ', '').trim()) || 0;
        maxPowerV.value = (value1 > value2) ? value1 : value2 + ' кВ';
    }
}

function doCalculteMaxPower(event, selectorSource, selectorResult) {
    let input = parseFloat(event.target.value) || 0;
    let result = parseFloat(selectorSource.value) || 0;
    result += input;
    selectorResult.value = result;
}