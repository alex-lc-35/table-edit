import axios from 'axios';

const instance = axios.create({
    baseURL: 'http://localhost:8000/api',
});

export function fetch(params) {
    console.log('[table-edit] fetch');

    return instance('/table/' + params)
        .then((response) => {
            console.log('[table-edit] options', response.data);
            return response.data;
        })
        .catch((error) => {
            console.error('[table-edit] fetch error', error);
            return null;
        });
}
