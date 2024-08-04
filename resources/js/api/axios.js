// First we need to import axios.js
import axios from 'axios'
import {base_url} from "../helpers/constants.js";

// Next we make an 'instance' of it
const instance = axios.create({
    // .. where we make our configurations
    baseURL: base_url,
    headers: {
        'X-Requested-With': 'XMLHttpRequest',
        // 'X-CSRF-TOKEN' : csrf_token
    }
})

// Also add/ configure interceptors && all the other cool stuff

export default instance
