'use strict';

import Toastify from 'toastify-js'
import {_ready} from "../helpers/JSHelper.js";
import {getTopPotentialClients} from "./helper.js";
import {
    notDataClientComponent,
    clientInfoComponent,
    skeletonClientListComponent
} from "./components.js";

import "toastify-js/src/toastify.css"

/**
 * @typedef {Object} Client
 * @property {int} id
 * @property {int} document_type_id
 * @property {string} document_number
 * @property {string} name
 * @property {string} email
 * @property {string} phone
 * @property {string} telephone
 * @property {string} address
 * @property {string} status
 * @property {string} created_at
 * @property {string} updated_at
 */

/**
 * Definicion de constantes y variables
 * @type {Element|null}
 */

const $containerPotentialClients = document.querySelector("#container-potential-clients");

/**
 * Renderiza los clientes potenciales
 * @return {Promise<void>}
 */
const loadTopPotentialClients = async () => {

    const $skeletonClientListComponent = await skeletonClientListComponent();
    $containerPotentialClients.replaceChildren($skeletonClientListComponent);

    try {

        const potentialClients = await getTopPotentialClients();

        if (potentialClients === null || potentialClients.length === 0) {
            throw new Error("Clientes potenciales no encontrados.");
        }

        setTimeout(() => {
            for (const potentialClient of potentialClients) {
                const $clientComponent = clientInfoComponent(potentialClient);
                $containerPotentialClients.appendChild($clientComponent);
            }
        }, 2000);

    } catch (e) {
        console.log(e.message);
        setTimeout(() => {
            const $noDataClientsComponent = notDataClientComponent();
            $containerPotentialClients.replaceChildren($noDataClientsComponent);
            Toastify({
                text: e.message,
                duration: 3000,
                newWindow: true,
                close: false,
                gravity: "bottom", // `top` or `bottom`
                position: "center", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                className: "danger",
                style: {
                    background: "linear-gradient(to right, #DC3545, #F24955)",
                }
            }).showToast();
        },2000);

    }
}

/**
 * Inicializa el app
 * @return {Promise<void>}
 */
const init = async () => {
    await loadTopPotentialClients();
}

_ready(() => {
    init();
})
