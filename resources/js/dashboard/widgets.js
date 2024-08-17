import {_ready} from "../helpers/JSHelper.js";
import {clientInfoComponent, notDataClientComponent} from "./components.js";
import Toastify from "toastify-js";
import {getTopPotentialClients, getTotalBrands, getTotalCategories, getTotalProducts, getTotalSales} from "./helper.js";

/**
 * Placeholders
 */

const $placeholderTotalSales = document.querySelector('#placeholder-total-sales');
const $placeholderTotalProducts = document.querySelector('#placeholder-total-products');
const $placeholderTotalCategories = document.querySelector('#placeholder-total-categories');
const $placeholderTotalBrands = document.querySelector('#placeholder-total-brands');

const setTotalSales = async (store_id = null) => {
    try {
        const totalSales = await getTotalSales(store_id);

        if (totalSales === 0) {
            throw new Error("Sin total de ventas.");
        }

        $placeholderTotalSales.textContent = parseFloat(totalSales);
    }catch (e) {
        console.log(e.message);
    }
}

const setTotalProducts = async () => {
    try {
        const totalProducts = await getTotalProducts();

        if (totalProducts === 0) {
            throw new Error("Sin total de productos.");
        }

        $placeholderTotalProducts.textContent = parseInt(totalProducts);
    }catch (e) {
        console.log(e.message);
    }
}

const setTotalCategories = async () => {
    try {
        const totalCategories = await getTotalCategories();

        if (totalCategories === 0) {
            throw new Error("Sin total de categorias.");
        }

        $placeholderTotalCategories.textContent = parseInt(totalCategories);
    }catch (e) {
        console.log(e.message);
    }
}

const setTotalBrands = async () => {
    try {
        const totalBrands = await getTotalBrands();

        if (totalBrands === 0) {
            throw new Error("Sin total de categorias.");
        }

        $placeholderTotalBrands.textContent = parseInt(totalBrands);
    }catch (e) {
        console.log(e.message);
    }
}

const init = async () => {
    setTotalSales();
    setTotalProducts();
    setTotalCategories();
    setTotalBrands();
}
_ready(() => {
    init();
})
