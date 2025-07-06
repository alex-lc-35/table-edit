import axios from 'axios';

const instance = axios.create({
    baseURL: 'http://localhost:8000/api/',
});

export function fetch(tableName) {
    console.log('[table-edit] fetch');

    return instance('/' + tableName)
        .then((response) => {
            console.log('[table-edit] options', response.data);
            return response.data;
        })
        .catch((error) => {
            console.error('[table-edit] fetch error', error);
            return null;
        });
}

export function edit() {
    console.log('[table-edit] edit');
}
