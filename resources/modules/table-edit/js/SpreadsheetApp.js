import jspreadsheet from 'jspreadsheet-ce';
import 'jspreadsheet-ce/dist/jspreadsheet.css';
import 'jspreadsheet-ce/dist/jspreadsheet.themes.css';
import { fetch } from './api.js';

export default {
    async init(el, tableName) {
        try {
            const data = await fetch(tableName);

            const options = {
                ...data.options,
                onchange: this.update,
            };

            jspreadsheet(el, options);
        } catch (error) {
            console.error('Erreur lors de l’initialisation du tableur', error);
        }
    },

    update(instance, cell, x, y, value) {
        console.log("📦 Donnée mise à jour :");
        console.log({ instance, cell, x, y, value });

        // TODO : envoyer vers l'API ici ?
    }
};
