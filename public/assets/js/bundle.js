const incomeData = [{
    personalAccount : '0122460',
    phone   :   '+7 (891) 284-63-67',
    email : 'nimpweb@yandex.ru',
    fullName: 'Алексей Тимофеевич',
    debtDate: '28.04.2020',
    amount: 0,
    currency: 'RUR'
}];

const $billing = document.querySelector('#billing');

const showBlockForm = document.querySelector('form.fav_show_block');
if (showBlockForm) {
    showBlockForm.addEventListener('submit', event => {
        event.preventDefault();
        if ($billing && $billing.selectedIndex === 0) {
            alert('Выберите биллинг, к которому относится Ваш населенный пункт!');
            return false;
        }
        let hasErrors = false;

        showBlockForm.querySelectorAll('.fti-inputs:not(.display--hidden) > .fti-input.fti-required').forEach(input => {
            if (((input.value.trim() === '') && (input.getAttribute('required') || input.classList.contains('fti-required'))))  {
                hasErrors = true;
                console.log(input);
                input.style.borderColor = 'red';
            } else {

                const account = showBlockForm.querySelector('[name=ls]');
                const phone = showBlockForm.querySelector('[name=tel]');

            }
        });

        if (hasErrors) {
            showBlockForm.querySelector('.fav_warn_text').innerHTML = '<span>Заполните обязательные поля</span>';
            showBlockForm.querySelector('.fav_warn_text').style.display = 'block';
            console.log('error has been')
        } else {
            showBlockForm.submit();
            // let inputData = {};
            // showBlockForm.querySelectorAll('input').forEach(input => inputData[input.getAttribute('name')] = input.value);
            // const data = incomeData.filter(item => {
            //     return (item.personalAccount == inputData.ls && item.phone == inputData.tel);
            // });
            //
            // if (data.length > 0) {
            //     console.log(data[0]);
            //
            // } else {
            //     alert('Потребитель не найден!')
            // }
        }


    });

    showBlockForm.querySelectorAll('input[name=sid]').forEach(input => {
        input.addEventListener('click', event => switchPageType(event.target));
    });
}

document.addEventListener('click', event => {
   if (event.target.tagName === 'IMG') {
       let el = event.target.closest('div');
       if (el) {
           el = document.querySelector('.region-list__tab[data-tab='+el.dataset.tab+']');
           if (el) {
               location.href =  el.querySelector('a').href;
           }
       }
   }
});

document.addEventListener('mouseover', event => {
    let tabName = false;
    if (event.target.classList.contains('city')) {
        tabName = event.target.closest('li').dataset.tab;
    } else if (event.target.tagName === 'IMG') {
        tabName = event.target.closest('div').dataset.tab;
    }

    if (tabName) {
        document.querySelectorAll('[data-tab='+tabName+']').forEach(item => item.classList.add('hover-region'));
    }

})

document.addEventListener('mouseout', event => {
    let tabName = false;
    if (event.target.classList.contains('city')) {
        tabName = event.target.closest('li').dataset.tab;
    } else if (event.target.tagName === 'IMG') {
        tabName = event.target.closest('div').dataset.tab;
    }
    if (tabName) {
        document.querySelectorAll('[data-tab='+tabName+']').forEach(item => item.classList.remove('hover-region'));
    }
});

export function switchPageType(ch) {
    document.querySelectorAll('.fav_showing').forEach(item => {
        item.classList.add('display--hidden');
        item.querySelectorAll('input').forEach(inp => inp.setAttribute('disabled', 'disabled'));
    });
    document.querySelectorAll('[data-sid="'+ch.value+'"]').forEach(item => {
        item.classList.remove('display--hidden');
        item.querySelectorAll('input').forEach(inp => inp.removeAttribute('disabled'));
    });
}