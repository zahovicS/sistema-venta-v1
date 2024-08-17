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
 * Retorna los clientes potenciales
 * @return {Promise<Array<Client>|null>}
 */
export const getTopPotentialClients = async () => {
    try {
        const request = await axios({
            'method': 'GET',
            'url': 'clients/get-top-potential-clients',
        });
        return request.data.potential_clients;
    }catch (e) {
        console.error(e);
        return null;
    }
}

/**
 * Retorna el total de las ventas
 * @param {int|null} store_id
 * @return {Promise<number>}
 */

export const getTotalSales = async (store_id = null) => {
    try {
        const request = await axios({
            'method': 'POST',
            'url': 'invoices/get-total-sales',
            'data' :{
                store_id : store_id
            }
        });
        return request.data.total_sales;
    }catch (e) {
        console.error(e);
        return 0;
    }
}

/**
 * Retorna el total de los productos
 * @return {Promise<number>}
 */

export const getTotalProducts = async () => {
    try {
        const request = await axios({
            'method': 'GET',
            'url': 'products/get-total-products',
        });
        return request.data.total_products;
    }catch (e) {
        console.error(e);
        return 0;
    }
}

/**
 * Retorna el total de las categorías
 * @return {Promise<number>}
 */

export const getTotalCategories = async () => {
    try {
        const request = await axios({
            'method': 'GET',
            'url': 'categories/get-total-categories',
        });
        return request.data.total_categories;
    }catch (e) {
        console.error(e);
        return 0;
    }
}


/**
 * Retorna el total de las marcas
 * @return {Promise<number>}
 */

export const getTotalBrands = async () => {
    try {
        const request = await axios({
            'method': 'GET',
            'url': 'brands/get-total-brands',
        });
        return request.data.total_brands;
    }catch (e) {
        console.error(e);
        return 0;
    }
}
