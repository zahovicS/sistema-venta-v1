export const _ready = (fn) => {
    if (document.readyState !== 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

export const _addEventListener = (el, eventName, eventHandler, selector) => {
    if (selector) {
        const wrappedHandler = (e) => {
            if (!e.target) return;
            const el = e.target.closest(selector);
            if (el) {
                eventHandler.call(el, e);
            }
        };
        el.addEventListener(eventName, wrappedHandler);
        return wrappedHandler;
    } else {
        const wrappedHandler = (e) => {
            eventHandler.call(el, e);
        };
        el.addEventListener(eventName, wrappedHandler);
        return wrappedHandler;
    }
}

export const _disableElements = (el)=> {
    if (!el) return;
    if(el instanceof NodeList){
        el.forEach((element) => {
            element.setAttribute('disabled', true);
        })
    }else{
        el.setAttribute('disabled', true);
    }
}

export const _enableElements = (el) => {
    if (!el) return;
    if(el instanceof NodeList){
        el.forEach((element) => {
            element.removeAttribute('disabled');
        })
    }else{
        el.removeAttribute('disabled');
    }
}


export const _transformArrToText = (messages = []) => {
    let html = ``;
    if (typeof messages === 'string') {
        html = messages;
    }
    if (Array.isArray(messages) && messages.length > 0) {
        html += `<h6 class="text-uppercase">Errores:</h6>`;
        html += `<ul class="text-left">`;
        for (const key in messages) {
            const message = messages[key];
            html += `<li class="text-left">${message}</li>`
        }
        html += `</ul>`;
    }
    return html;
}
