import axios from "../api/axios.js";
export const getStores = async () => {
    try {
        const request = await axios({
            'method': 'GET',
            'url': 'stores/get-all-stores',
        });
        return request.data;
    }catch (e) {
        console.error(e);
        return null;
    }
}
