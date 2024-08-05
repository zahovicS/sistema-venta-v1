import {_addEventListener, _disableElements, _enableElements, _ready} from "../helpers/JSHelper.js";
import {_alertError, _alertSuccess, _loader} from "../components/alert.js";
import axios from "../api/axios.js";
import {_baseUrl} from "../helpers/paths.js";

const $btnClearSelectStore = document.querySelector('#clear-store-for-user');

_ready(function (){
    _addEventListener($btnClearSelectStore, 'click', async function (event){
        event.preventDefault();
        const buttonForm = this;
        const loader = _loader();
        try {
            _disableElements(buttonForm);
            const request = await axios({
                'method': 'GET',
                'url': 'users/clear-store-user',
            });
            const response = request.data;
            if(response.status === "success"){
                setTimeout(function (){
                    _alertSuccess({
                        'message': response.message
                    })
                    window.location.reload();
                    location.href = _baseUrl("dashboard");
                },1500);
            }else{
                throw new Error (response.message);
            }
        } catch (e) {
            if(loader) loader.close();
            _enableElements(buttonForm);
            _alertError({
                "errors" : e.message
            });
        }
    })
})
