import Swal from "sweetalert2";
import 'sweetalert2/src/sweetalert2.scss';
import {IconsColored} from "./icons.js";
import {_transformArrToText} from "../helpers/JSHelper.js";

export const _loader = (text = "Cargando...") => {
    return Swal.fire({
        iconHtml: `<img src='${IconsColored.w11Load}' height='100%'></img>`,
        title: text,
        allowOutsideClick: false,
        customClass: {
            title: 'text-center',
        },
        didOpen: () => {
            Swal.showLoading()
        },
    });
}

export const _alertError = (errors = {}) => {
    const html = _transformArrToText(errors?.errors || [])
    return Swal.fire({
        iconHtml: `<img src='${IconsColored.w11Error}' height='100%'></img>`,
        title: errors?.message || "Error(es):",
        html: html,
        timer: 3000,
        timerProgressBar: true,
        confirmButtonText: "Cerrar",
        customClass: {
            title: 'text-center',
        },
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
}

export const _alertSuccess = (success = {}) => {
    return Swal.fire({
        iconHtml: `<img src='${IconsColored.w11Success}' height='100%'></img>`,
        title: success?.message || "Mensaje",
        timer: 3000,
        timerProgressBar: true,
        confirmButtonText: "Cerrar",
        customClass: {
            title: 'text-center',
        },
    });
}
