'use strict';

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

// <div className="d-flex px-4 py-3">
//     <div className="avatar avatar-lg">
//         <img src="{{ assets_path(" img/icons/colored/w11-businessman.png") }}" alt="business"/>
//     </div>
//     <div className="name ms-4">
//         <h5 className="mb-1">document_number - name</h5>
//         <h6 className="text-muted mb-0">address</h6>
//     </div>
// </div>

/**
 * Devuelve un componente html del cliente
 * @param {Client} client
 * @return HTMLDivElement
 */

export const clientInfoComponent = (client) => {
    // Crear el elemento div contenedor
    const clientComponent = document.createElement('div');
    clientComponent.className = 'd-flex px-4 py-3';

    // Crear el elemento div para el avatar
    const $avatarDiv = document.createElement('div');
    $avatarDiv.className = 'avatar avatar-lg';

    // Crear el elemento img para el avatar
    const $avatarImg = document.createElement('img');
    $avatarImg.src = 'img/icons/colored/w11-businessman.png';
    $avatarImg.alt = 'business';

    // Agregar el elemento img al div del avatar
    $avatarDiv.appendChild($avatarImg);

    // Crear el elemento div para el nombre
    const $nameDiv = document.createElement('div');
    $nameDiv.className = 'name ms-4';

    // Crear el elemento h5 para el nombre
    const $nameH5 = document.createElement('h5');
    $nameH5.className = 'mb-1';
    $nameH5.textContent = `${client.document_number} - ${client.name}`;

    // Crear el elemento h6 para la dirección
    const addressH6 = document.createElement('h6');
    addressH6.className = 'text-muted mb-0';
    addressH6.textContent = client.address;

    // Agregar los elementos h5 y h6 al div del nombre
    $nameDiv.appendChild($nameH5);
    $nameDiv.appendChild(addressH6);

    // Agregar los elementos div del avatar y nombre al div contenedor
    clientComponent.appendChild(avatarDiv);
    clientComponent.appendChild($nameDiv);

    return clientComponent;
}

/**
 * Devuelve un componente html cuando no hay clientes
 * @return HTMLDivElement
 */
export const notDataClientComponent = () => {
    // Crear el elemento div contenedor
    const $noDataComponent = document.createElement('div');
    $noDataComponent.className = 'text-center px-4 py-3';

    // Crear el elemento h5 para el titulo
    const $titleH5 = document.createElement('h5');
    $titleH5.className = 'mb-0';
    $titleH5.textContent = '- Sin datos -';

    // Agregar los elementos div del titulo al div contenedor
    $noDataComponent.appendChild($titleH5);

    return $noDataComponent;
}

/**
 * Devuelve un componente html skeleton
 * @return HTMLDivElement
 */
export const skeletonClientInfoComponent = () => {
    // Crear el elemento div contenedor
    const $skeletonClientInfoComponent = document.createElement('div');
    $skeletonClientInfoComponent.className = 'content-skeleton px-4';

    // Crear el elemento avatar skeleton
    const $skeletonAvatar = document.createElement('div');
    $skeletonAvatar.className = 'skeleton-avatar';

    // Crear el elemento line 1 skeleton
    const $skeletonLine = document.createElement('div');
    $skeletonLine.className = 'skeleton-line';

    // Crear el elemento line 2 skeleton
    const $skeletonLine2 = document.createElement('div');
    $skeletonLine2.className = 'skeleton-line';

    $skeletonClientInfoComponent.appendChild($skeletonAvatar);
    $skeletonClientInfoComponent.appendChild($skeletonLine);
    $skeletonClientInfoComponent.appendChild($skeletonLine2);

    return $skeletonClientInfoComponent;
}

/**
 * Devuelve una lista de skeleton html
 * @param {int} number
 * @return HTMLDivElement
 */

export const skeletonClientListComponent = (number = 5) => {
    // Crear el elemento div contenedor
    const $skeletonClientListComponent = document.createElement('div');
    $skeletonClientListComponent.className = 'w-100';

    for (let i = 0; i < number; i++) {
        const $skeletonClientInfoComponent = skeletonClientInfoComponent();
        $skeletonClientListComponent.appendChild($skeletonClientInfoComponent);
    }
    return $skeletonClientListComponent;
}
