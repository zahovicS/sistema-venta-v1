'use strict';

import axios from "../api/axios.js";

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
 *
 * @return {Promise<Array<Client>|null>}
 */
export const getTopPotentialClients = async () => {
    try {
        const request = await axios({
            'method': 'GET',
            'url': 'clients/get-top-potential-clients',
        });
        return request.data;
    }catch (e) {
        console.error(e);
        return null;
    }
}
