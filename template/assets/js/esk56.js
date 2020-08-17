    <div class="popup" style="opacity: 0; display: none">
        <div class="popup_dialog">
            <div class="popup_content text-center">
                <button type="button" class="popup_close"><strong>×</strong></button>
                <div class="popup_form">
                    <form class="form" action="#">
                      <h2>Укажите реквизиты</h2>
                        <input class="form-control form_input" name="f_name" required="" type="text" placeholder="Введите вашу фамилию">
                        <input class="form-control form_input" name="n_name" required="" type="text" placeholder="Введите ваше имя">
                        <input class="form-control form_input" name="o_name" required="" type="text" placeholder="Введите ваше отчество">
                        <input class="form-control form_input" name="place" required="" type="text" placeholder="Название СНТ и номер участка(собственника)">
                        <select class="form-control form_input" name="price_type" id="">
                            <option value="1">Техприсоединение Энергопринимающих устройств до15кВт включительно</option>
                            <option value="1">Техприсоединение Энергопринимающих устройств свыше 15кВт включительно</option>
                            <option value="1">Прочие услуги</option>
                        </select>
                        <button class="text-uppercase btn-block button" name="submit" type="submit">Приступить к оплате</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const scriptLoader = {
            token : 'rcd8o5daj8quvo9krimbq21h7e',
            scripts : ['https://3dsec.sberbank.ru/demopayment/docsite/assets/js/ipay.js'],
            importJS(uri) {
                let $script = document.createElement('script')
                let $head = document.getElementsByTagName('head')[0]
                $script.type = 'text/javascript'
                $script.src = uri
                $head.appendChild($script)
            },
            payButtonClick(event) {
                event.preventDefault();
                document.querySelector('.popup').classList.toggle('show-popup');
            },
            makeStyles() {
                const $style = `
                    <style>
                    .pay-button {
                        font-family: sans-serif;
                        font-size: 1rem;
                        color: #fff !important;
                        background-color: #de8413 !important;
                        border: solid 1px #c57b1e !important;
                        padding: 6px 8px !important;
                        transition: all 0.25s;
                        border-radius: 4px !important;
                        cursor: pointer;
                        text-decoration: none !important;
                    } 

                    .pay-button:hover {
                        background-color: #ffa715 !important;
                        border-color: #999 !important;
                    }

                    .form_input {
                        height: 5.8rem;
                        padding: 0;
                        margin-bottom: .7rem;
                        text-align: center;
                        border-radius: 1rem;
                        -moz-box-sizing: border-box;
                    }
                    .form-control {
                        display: block;
                        width: 100%;
                        height: 34px;
                        font-size: 14px;
                        line-height: 1.42857143;
                        color: #555;
                        background-color: #fff;
                        background-image: none;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                    }

                    .select-input {
                        padding: 6px 8px;
                        border-radius: 4px;
                        width: 106%;
                    }

                    .form {
                        padding: 2rem 5rem;
                        text-align: center;
                        border-radius: 1rem;
                        background-color: #ffffff;
                    }

                    .button {
                        padding: 10px;
                        font-weight: 700;
                        font-style: normal;
                        border: 1px solid #ffc600;
                        border-radius: 1rem;
                        background: -webkit-gradient(linear, left top, left bottom, from(#ffed26), to(#ffb400));
                        background: linear-gradient(180deg, #ffed26 0%, #ffb400 100%);
                        -webkit-box-shadow: 1px 2px 20px 0px rgba(255, 153, 0, 0.4);
                        box-shadow: 1px 2px 20px 0px rgba(255, 153, 0, 0.4);
                        cursor: pointer;
                        text-decoration: none;
                        height: auto;
                    }

                    .btn-block {
                        display: block;
                        width: 100%;
                    }

                    .text-uppercase {
                        text-transform: uppercase;
                    }

                    .form_notice {
                        margin-top: 1rem;
                        margin-bottom: 2rem;
                        font-size: 1.1rem;
                        color: #666;
                    }

                    /*Modals*/
                    .show_popup {
                        display: block !important;
                        opacity: 1 !important;
                    }

                    .popup,
                    .popup_engineer,
                    .popup_calc_end {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 9;
                    background-color: rgba(0, 0, 0, 0.5);
                    font-family: sans-serif;
                    }

                    .myimage {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 500px;
                    height: 500px;
                    z-index: 10;
                    }

                    .overlay {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 9;
                    background-color: rgba(0, 0, 0, 0.7);
                    opacity: 1;

                    }

                    .popup_content,
                    .popup_engineer_content,
                    .popup_calc_end_content {
                    /* display: none; */
                    position: fixed;
                    top: 10%;
                    left: 50%;
                    -webkit-transform: translateX(-50%);
                    transform: translateX(-50%);
                    width: 40rem;
                    background-color: #ffffff;
                    }

                    .popup_close,
                    .popup_engineer_close,
                    .popup_calc_end_close {
                    position: absolute;
                    top: -2.2rem;
                    right: -5rem;
                    font-size: 4rem;
                    color: #ffffff;
                    border: none;
                    background: transparent;
                    cursor: pointer;
                    }


                    </style>
            `;
                document.querySelector('head').insertAdjacentHTML('beforeEnd', $style)
            },
            createPayButton() {
                const $nav = document.querySelector('.navigation');
                const payButton = document.createElement('a');
                payButton.classList.add('pay-button');
                payButton.href = '#';
                payButton.innerText = 'Оплатить тех.присоединение';

                const $liItem = document.createElement('li');
                $liItem.classList.add('normal');
                $liItem.appendChild(payButton);
                $nav.appendChild($liItem);
            }

        }

        
    </script>
    <script src='https://3dsec.sberbank.ru/demopayment/docsite/assets/js/ipay.js'></script>
    <script>var ipay = new IPAY({api_token : "rcd8o5daj8quvo9krimbq21h7e"}) </script>
    <script type="text/javascript">
        if (scriptLoader) {
            scriptLoader.makeStyles()
            scriptLoader.createPayButton()
        } else {
            console.log('false')
        }
      

        document.addEventListener('DOMContentLoaded', () => {
            const popup = document.querySelector('.popup')          
            popup.querySelectorAll('input[type=text]').forEach(item => item.value = '');
            
            const payButtons = document.querySelectorAll('.pay-button').forEach(item => {
                item.addEventListener('click', event => fadeIn(popup))
                popup.querySelector('.popup_close').addEventListener('click', event => closePopup())
            })

            popup.addEventListener('submit', event => {
                event.preventDefault();
                const payTypeList = [
                    'Техприсоединение Энергопринимающих устройств до 15кВт включительно', 
                    'Техприсоединение Энергопринимающих устройств свыше 15кВт включительно',
                    'Прочие услуги'
                ]
                let formData = {}
                event.target.closest('form').querySelectorAll('input').forEach(item => formData[item.name] = item.value)
                event.target.closest('form').querySelectorAll('select').forEach(item => formData[item.name] = item.selectedIndex)
                let body = {
                    currency:'RUB',
                    description: `${formData.f_name} ${formData.n_name[0].toUpperCase()}. ${formData.o_name[0].toUpperCase()}.(${formData.place}): ${payTypeList[formData.price_type]}`
                };
                if (formData.price_type == 0) { body['amount'] = +550 }
                closePopup();

                ipayCheckout(body, order => showSuccessfulPurchase(order), order => showFailurefulPurchase(order))
                document.querySelector('iframe').style.height = '100vh';
            })

            function closePopup() {
                fadeOut(popup)
                popup.querySelectorAll('input[type=text]').forEach(item => item.value = '');
            }
        })

        function showSuccessfulPurchase(order) {
            console.log('success: ');
            console.log(order);
            alert('Сейчас мы будем пробовать отправить письмо в сетевую компанию!')
        } 

        function showFailurefulPurchase(order) {
            console.log('failed: ');
            console.log(order);
            alert('Произошла ошибка во время оплаты!')
        }

        function fadeIn(selector) {
            const el = selector
            let opacity = 0.01;
            el.style.display = "block";
            var timer = setInterval(function() {
                if(opacity >= 1) {
                    clearInterval(timer);
                }
                el.style.opacity = opacity;
                opacity += opacity * 0.1;
            }, 10);
        
        }

        function fadeOut(selector) {
            const el = selector
            let opacity = 1;
            const timer = setInterval(function() {
                if(opacity <= 0.1) {
                    clearInterval(timer);
                    el.style.display = "none";
                }
                el.style.opacity = opacity;
                opacity -= opacity * 0.1;
            }, 10);
        }
    </script>
