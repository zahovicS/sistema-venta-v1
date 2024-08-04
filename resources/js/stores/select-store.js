import {_addEventListener, _disableElements, _enableElements, _ready} from "../helpers/JSHelper.js";
import Choices from "choices.js";
import 'choices.js/public/assets/styles/choices.min.css';
import {getStores} from "./helper.js";
import axios from "../api/axios.js";
import {_alertError, _alertSuccess, _loader} from "../components/alert.js";

const $selectStore = document.querySelector('#select-store');
const $formSelectStoreForUser = document.querySelector("#form-select-store-for-user");

_ready(async function () {
    // inicia la instancia de Choise JS para seleccionar la tienda
    if ($selectStore) {
        const instanceChoise = new Choices($selectStore, {
            removeItems: false,
            allowHTML: false,
            placeholder: true,
            placeholderValue: "Seleccione una tienda",
            searchPlaceholderValue: "Escriba para buscar una tienda",
        }).setChoices(async function () {
            const stores = await getStores();
            return stores.map((el) => {
                return {
                    value: el.id,
                    label: el.name,
                }
            })
        });
    }
    // agrega el evento para capturar el envío de la selección de la tienda para el usuario administrador
    _addEventListener($formSelectStoreForUser, 'submit', async function (event) {
        event.preventDefault();
        const buttonsForms = this.querySelectorAll('button');
        const loader = _loader();
        try {
            const store_id = parseInt($selectStore.value);
            _disableElements(buttonsForms);
            if(isNaN(store_id)){
                throw new Error ("Seleccione una tienda");
            }
            const request = await axios({
                'method': 'POST',
                'url': 'users/set-store-user',
                'data': {
                    'store_id': store_id
                }
            });
            const response = request.data;
            if(response.status === "success"){
                setTimeout(function (){
                    _alertSuccess({
                        'message': response.message
                    })
                    window.location.reload();
                },1500);
            }else{
                throw new Error (response.message);
            }
        } catch (e) {
            if(loader) loader.close();
            _enableElements(buttonsForms);
            _alertError({
                "errors" : e.message
            });
        }
    })
})
